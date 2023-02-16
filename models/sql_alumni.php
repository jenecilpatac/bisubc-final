<?php

require_once 'models/db_connect.php';

class SQL_Alumni extends DB_Connect {

    public $users_tbl = array(
        'User_Name',
        'Password',
        'User_Type',
        'Birth_Date',
        'Gender',
        'Batch_Key',
        'User_Key',
        'Address',
        'Employment_Status',
        'Position',
        'Company_Name',
        'Company_Address',
    );

    public $alumni_tbl = array(
        'Batch_Key',
        'First_Name',
        'Middle_Name',
        'Last_Name',
    );

    public $courses_tbl = array(
        'Course_Code',
        'Course_Name',
        'Department',
    );

    public $batches_tbl = array(
        'Course_Key',
        'Batch',
    );

    public function __construct() 
    {
        Parent::__construct();

    }

    public function addAnnouncement($announcement)
    {
        if ($announcement) {
            $table = 'announcements';
            $data = array();
            $row = array(
                'Time_Stamp' => time(),
                'Announcement_Code' => md5($announcement),
                'Announcement' => $announcement,
            );
            $data[] = $row;
            $res = $this->insertTableRow($table, array_keys($row), $data);
        }

        return $res;
    }

    public function getAnnouncementList()
    {
        $sql = "
            SELECT 
                Date_Format(FROM_UNIXTIME(Time_Stamp), '%M %e, %Y %H:%m') as Date,
                Announcement
            FROM announcements
            ORDER BY Time_Stamp DESC
            LIMIT 20
        ";
        $results = $this->getDataFromTable($sql);
        if (empty($results)) {
            $results = array();
        }

        return $results;
    }

    public function addCourse($courses)
    {
        $table = 'courses';
        $data = array();
        foreach ($courses as $values) {
            $row = array();
            foreach ($this->courses_tbl as $col) {
                $row[] = isset($values[$col]) ? $values[$col] : '';
            }
            $data[] = $row;
        }
        $res = $this->insertTableRow($table, $this->courses_tbl, $data);

        return $res;
    }

    public function getCourses()
    {
        $sql = "
            SELECT * 
            FROM courses
            ORDER BY Department, Course_Code
        ";
        $data = $this->getDataFromTable($sql);
        $courses = array();
        foreach ($data as $row) {
            $courses[$row['Department']][$row['Course_Code']] = $row['Course_Name'];
        }

        return $courses;
    }

    public function getCourseList()
    {
        $sql = "
            SELECT * 
            FROM courses 
            ORDER BY Department, Course_Name
        ";
        $results = $this->getDataFromTable($sql);

        return $results;
    }

    public function getCoursesTableData()
    {
        $table = array();
        $table['table_title'] = 'Courses Available';
        $table['table_headers'] = $this->courses_tbl;
        $table['table_data'] = $this->getCourseList();

        return $table;
    }

    public function getCourseKey($course_code)
    {
        $sql = "
            SELECT * 
            FROM courses
            WHERE Course_Code = '{$course_code}'
            LIMIT 1
        ";
        $data = $this->getDataFromTable($sql);
        $key = 0;
        foreach ($data as $row) {
            $key = $row['Course_Key'];
        }

        return $key;
    }

    public function getCourseData($course_code)
    {
        $sql = "
            SELECT * 
            FROM courses
            WHERE Course_Code = '{$course_code}'
            LIMIT 1
        ";
        $results = $this->getDataFromTable($sql);
        $data = array();
        foreach ($results as $row) {
            $data = $row;
        }

        return $data;
    }

    public function addBatch($course_key, $batch)
    {
        $table = 'batches';
        $data = array();
        $data[] = array(
            'Course_Key' => $course_key,
            'Batch' => $batch
        );
        $res = $this->insertTableRow($table, $this->batches_tbl, $data);

        return $res;
    }

    public function getBatchKey($course_key, $batch)
    {
        $sql = "
            SELECT * 
            FROM batches
            WHERE Course_Key = $course_key
                AND Batch = '{$batch}'
            LIMIT 1
        ";
        
        $data = $this->getDataFromTable($sql);
        $key = 0;
        foreach ($data as $row) {
            $key = $row['Batch_Key'];
        }

        return $key;
    }

    public function getBatches()
    {
        $sql = "
            SELECT * 
            FROM batches as b
            LEFT JOIN courses as c ON b.Course_Key = c.Course_Key
            ORDER BY Batch DESC
        ";
        $data = $this->getDataFromTable($sql);
        $list = array();
        foreach ($data as $row) {
            $list[$row['Batch']] = array(
                'Course_Code' => $row['Course_Code'],
                'Department' => $row['Department'],
            );
        }

        return $list;
    }

    public function getUserKey($email)
    {
        $sql = "
            SELECT * 
            FROM users
            WHERE Email = '{$email}'
            LIMIT 1
        ";
        $data = $this->getDataFromTable($sql);
        $key = 0;
        foreach ($data as $row) {
            $key = $row['User_Key'];
        }

        return $key;
    }

    public function addUser($alumni)
    {
        $table = 'users';
        # Has Password
        $alumni['Password'] = hashPassword($alumni['Password']);
        $alumni['Birth_Date'] = strtotime($alumni['Birth_Date']);
        $data = array();
        $row = array();
        foreach ($this->users_tbl as $col) {
            $row[] = isset($alumni[$col]) ? $alumni[$col] : '';
        }
        $data[] = $row;
        $res = $this->insertTableRow($table, $this->users_tbl, $data);

        return $res;
    }

    public function addAlumni($alumni)
    {
        $table = 'alumni';
        $data = array();
        $row = array();
        foreach ($this->alumni_tbl as $col) {
            $row[] = isset($alumni[$col]) ? $alumni[$col] : '';
        }
        $data[] = $row;
        //print "<pre>"; print_r($alumni); print_r($data); exit;
        $res = $this->insertTableRow($table, $this->alumni_tbl, $data);

        return $res;
    }

    public function addAlumniData($list)
    {
        $created = 0;
        foreach ($list as $alumni) {
            # Get alumni Course_Key, only add alumni if course is available
            $course_key = 0;
            if (!empty($alumni['Course'])) {
                $course_key = $this->getCourseKey($alumni['Course']);
            }
            if ($course_key < 1) {
                # Do not proceed if invalid course
                return false;
            }

            # Get alumni Batch_Key, do not proceed if batch is blank
            $batch_key = 0;
            if (!empty($alumni['Batch'])) {
                $batch_key = $this->getBatchKey($course_key, $alumni['Batch']);
                if ($batch_key < 1) {
                    $this->addBatch($course_key, $alumni['Batch']);
                    $batch_key = $this->getBatchKey($course_key, $alumni['Batch']);
                }
            }
            if ($batch_key < 1) {
                # Do not proceed if invalid batch
                return false;
            }
            $alumni['Batch_Key'] = $batch_key;
            //print "<pre>";
            //print_r($alumni);
            //exit;

            $this->addAlumni($alumni);
            $created++;
        } 

        return $created;
    }

    public function getBatchAlumniList($batch_key=0)
    {
        $sql = "
            SELECT * 
            FROM batches as t1
            LEFT JOIN alumni as t2 ON t1.Batch_Key = t2.Batch_Key
            LEFT JOIN courses as t3 ON t1.Course_Key = t3.Course_Key
            WHERE t1.Batch_Key = $batch_key
            ORDER BY Last_Name, First_Name
        ";
        $results = $this->getDataFromTable($sql);
        //print "<pre>$sql"; print_r($results); exit;

        return $results;
    }

    public function getAlumniTableData()
    {
        $table = array();
        $course_key = $this->getCourseKey($_POST['course_sel']);
        if ($course_key > 0) {
            $batch_key = $this->getBatchKey($course_key, $_POST['batch_sel']);
            if ($batch_key > 0) {
                $table['table_title'] = 'Alumni List';
                $table['table_headers'] = array('Course_Name', 'Batch', 'Last_Name', 'First_Name');
                $table['table_data'] = $this->getBatchAlumniList($batch_key);
            }
        }

        return $table;   
    }

    public function getAlumniData() 
    {
        $alumni = array(
            'profile_pic' => 'pic1',
            'info' => 'info',
            'desc' => 'This is a description',
            'fb' => 'www.facebook.com/',
            'twitter' => '',
            'insta' => '',
        );

        $data = array();
        $course_key = $this->getCourseKey($_POST['course_sel']);
        if ($course_key > 0) {
            $batch_key = $this->getBatchKey($course_key, $_POST['batch_sel']);
            if ($batch_key > 0) {
                $list = $this->getBatchAlumniList($batch_key);
                $reverse = false;
                $blank_pic = "./bisu-img/alumni/blank_profile_pic.jpg";
                $row_cnt = 0;
                foreach ($list as $i => $alumni) {
                    $row = array();
                    # Alumni Name
                    $row['name'] = $alumni['Last_Name'].', '.$alumni['First_Name'];

                    # Profile Picture
                    $pic_fname = preg_replace('/(\s|\.)+/', '', $alumni['Last_Name']).'_'.preg_replace('/(\s|\.)+/', '', $alumni['First_Name']);
                    $pic_fpath = "./bisu-img/alumni/{$_POST['course_data']['Course_Code']}/{$pic_fname}.jpg";
                    //print "<pre>$pic_fpath\n";
                    if (!is_file($pic_fpath)) {
                        $pic_fpath = $blank_pic;
                    }
                    $row['picture'] = $pic_fpath;

                    # Profile position
                    $row['reverse'] = $reverse;
                    $row_cnt++;
                    if ($row_cnt > 1) {
                        $row_cnt = 0;
                        $reverse = !$reverse;
                    }

                    # Alumni Info
                    $row['info'] = $alumni['Address'];

                    # Alumni Info
                    $company = empty($alumni['Company_Name']) ? 'COMPANY' : $alumni['Company_Name'];
                    $row['desc'] = $alumni['Employment_Status'].' '.$alumni['Position'].' @'.$company.' - '.$alumni['Company_Address'];

                    //print "<pre>";
                    //print_r($row);
                    $data[] = $row;
                }

            }
        }

        return $data;
    }

    public function getUserProfile($user_key)
    {
        $sql = "
            SELECT * 
            FROM users as u
            LEFT JOIN alumni as a on u.User_Key = a.User_Key
            LEFT JOIN batches as b on a.Batch_Key = b.Batch_Key
            LEFT JOIN courses as c on b.Course_Key = c.Course_Key
            WHERE u.User_Key = $user_key
        ";
        $results = $this->getDataFromTable($sql);
        $profile = array();
        foreach ($results as $row) {
            $profile = $row;
        }

        return $profile;
    }   

    public function getAdminProfile()
    {
        $profile = array(
            'Image' => "./bisu-img/alumni/blank_profile_pic.jpg",
            'Full_Name' => 'Admin',
            'Position' => 'System Administrator',
            'Email' => '',
            'Address' => '',
            'Employment_Status' => '',
            'Company_Name' => '',
            'Company_Address' => '',
            'Batch' => '',
            'Course_Name' => '',
        );


        return $profile;
    }

    public function updateUserEmail($email, $user_key)
    {
        $sql = "
            UPDATE users
            SET Email = '$email'
            WHERE User_Key = $user_key
        ";
        //print "<pre>$sql\n";
        if ($this->db->query($sql) === true) {
            $success = true;
        } else {
            $success = $this->db->error;
        }
        //var_dump($success);

        return $success;
    }

    public function updateAlumniProfile($data, $user_key)
    {
        //print "<pre> $user_key\n"; print_r($data); print_r($fields); exit;
        $alumni_fields = array(
            'Address',
            'Position',
            'Employment_Status',
            'Company_Name',
            'Company_Address',
        );
        $updated_fields = array();
        foreach ($alumni_fields as $col) {
            $updated_fields[] = "$col='{$data[$col]}'";
        }
        $sql = "
            UPDATE alumni
            SET ".implode(', ', $updated_fields)."
            WHERE User_Key = $user_key
        ";
        //print "<pre>$sql\n";
        if ($this->db->query($sql) === true) {
            $success = true;
        } else {
            $success = $this->db->error;
        }
        //var_dump($success);
        $email_res = $this->updateUserEmail($data['Email'], $user_key);
        $success = ($success === true && $email_res !== true) ? $email_res : $success;

        return $success;
    }

    public function getUserProfileData($ukey) 
    {
        $sql = "
            SELECT *
            FROM users as u
            LEFT JOIN alumni as a ON u.User_Key = a.User_Key
            LEFT JOIN batches as b ON a.Batch_Key = b.Batch_Key
            LEFT JOIN courses as c ON b.Course_Key = c.Course_Key
            WHERE u.User_Key = {$ukey}
        ";
        $data = $this->getDataFromTable($sql);
        $alumni = $data[0];

        # Profile Picture
        $blank_pic = "./bisu-img/alumni/blank_profile_pic.jpg";
        $pic_fname = preg_replace('/(\s|\.)+/', '', $alumni['Last_Name']).'_'.preg_replace('/(\s|\.)+/', '', $alumni['First_Name']);
        $pic_fpath = "./bisu-img/alumni/{$alumni['Course_Code']}/{$pic_fname}.jpg";
        //print "<pre>$pic_fpath\n";
        if (!is_file($pic_fpath)) {
            $pic_fpath = $blank_pic;
        }

        $profile = $alumni;
        $profile['Image'] = $pic_fpath;
        $profile['Full_Name'] = $alumni['Last_Name'].', '.$alumni['First_Name'];

        return $profile;
    }

    public function addChat($chat, $user_key)
    {
        if ($chat != '') {
            $table = 'chat';
            $row = array(
                'User_Key' => $user_key,
                'Chat_Date' => time(),
                'Chat_Msg' => $chat,
            );
            // print "<pre>"; print_r($row);
            $res = $this->insertTableRow($table, array_keys($row), array($row));
        }

        return $res;
    }

    public function getChatData($user_key) 
    {
        $course_key = intval($_SESSION['logged_profile']['Course_Key']);
        $batch_key = intval($_SESSION['logged_profile']['Batch_Key']);
        $sql = "
            SELECT 
                First_Name, Last_Name, ch.User_Key, 
                Chat_Msg, Chat_Date
            FROM chat as ch
            LEFT JOIN users as u ON ch.User_Key = u.User_Key
            LEFT JOIN alumni as a ON u.User_Key = a.User_Key
            LEFT JOIN batches as b ON a.Batch_Key = b.Batch_Key
            LEFT JOIN courses as c ON b.Course_Key = c.Course_Key
            WHERE a.Batch_Key = {$batch_key}
                AND b.Course_Key = {$course_key}
            ORDER BY Chat_Date
            LIMIT 50
        ";
        $data = $this->getDataFromTable($sql);
        $chats = array();
        $cur_time = time();
        foreach ($data as $row) {
            $owner = ($row['User_Key'] == $user_key) ? 'You' : $row['First_Name'].' '.$row['Last_Name'];
            $ago = $this->getChatAgoValue($cur_time, $row['Chat_Date']);
            $chats[] = array(
                'owner' => $owner,
                'ago' => $ago,
                'msg' => $row['Chat_Msg'],
            );
        }
        //print "<pre>";
        //print_r($chats);
        
        return $chats;
    }

    public function getChatAgoValue($cur_time, $chat_time)
    {
        $ago = '';
        $diff = $cur_time - $chat_time;

        # Seconds
        if ($diff < 60) {
            $t = $diff;
            $unit = $t > 1 ? 'secs' : 'sec';

        # Minutes
        } elseif ($diff < (60*60)) {
            $t = floor($diff / 60);
            $unit = $t > 1 ? 'mins' : 'min';

        # Hours
        } elseif ($diff < (60*60*24)) {
            $t = floor($diff / (60*60));
            $unit = $t > 1 ? 'hrs' : 'hr';
        } else {
            $t = floor($diff / (60*60*24));
            $unit = $t > 1 ? 'days' : 'day';
        }

        $ago = "{$t}{$unit}";

        return $ago;
    }

}


?>