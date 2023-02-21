<?php

require_once 'models/db_connect.php';

class SQL_Tracer extends DB_Connect {

    public $profile1_fields = array(
        'FIRST_NAME',
        'MIDDLE_NAME',
        'LAST_NAME',
        'PERMANENT_ADDRESS',
        'EMAIL',
        'PHONE',
        'MOBILE',
        'CIVIL_STATUS',
        'SEX',
        'BIRTHDAY',
        'ANNUAL_INCOME',
    );

    public $profile2_fields = array(
        'EXAM_PASSED',
        'EXAM_DATE_TAKEN',
        'EXAM_RATING',
        'ADVANCE_STUDY_PASSED',
        'ADVANCE_STUDY_DURATION',
        'ADVANCE_STUDY_PLACE',
        'PURSUE_ADVANCE_STUDIES',
        'PURSUE_ADVANCE_STUDIES_OTHERS',
    );

    public function __construct() 
    {
        Parent::__construct();

        require_once 'models/sql_alumni.php';
        $this->sql = new SQL_Alumni;

    }

    public function getRegisteredAlumniList()
    {
        $sql = "
            SELECT *, 
                concat(First_Name, ' ', Last_Name) as Name
            FROM users as t1
            LEFT JOIN alumni as t2 ON t1.Alumni_Key = t2.Alumni_Key
            ORDER BY Last_Name, First_Name
        ";
        $results = $this->getDataFromTable($sql);
        //print "<pre>$sql"; print_r($results); exit;
        $results = array();
        for ($i=0; $i< 20; $i++) {
            $results[] = array(
                'Name' => 'Name',
                'Address' => 'Address',
                'Email' => 'Email',
                'Employment_Status' => 'Status',
                'Company_Name' => 'Name of Company',
                'Position' => 'Position',
                'Awards_Received' => 'Awards Received',
            );
        }

        return $results;
    }

    public function getRegisteredAlumniTableData()
    {
        $table = array();
        $table['table_id'] = 'dataTable'; // 'registered_alumni_tbl';
        $table['table_headers'] = array(
            'Name' => 'Name',
            'Address' => 'Address',
            'Email' => 'Email',
            'Employment_Status' => 'Status',
            'Company_Name' => 'Name of Company',
            'Position' => 'Position',
            'Awards_Received' => 'Awards Received',
        );

        
        $table['table_data'] = $this->getRegisteredAlumniList();

        return $table;
    }

    public function getEmployedGraduatesTableData()
    {
        $table = array();
        $table['table_id'] = 'dataTable'; // 'employed_graduates_tbl';
        $table['table_headers'] = array(
            'Course_Name' => 'Course',
            'Total_Graduates' => 'No. of Graduates',
            'Total_Graduates_Hired_2yrs' => 'No. of Graduates Hired<br>within 2 years after graduation',
            'Percentage' => 'Percentage',
        );
        $table['table_data'] = array();

        return $table;
    }

    public function getOutcomeIndicatorTableData()
    {
        $table = array();
        $table['table_id'] = 'dataTable'; // 'outcome_indicator_tbl';
        $table['table_headers'] = array(
            'Course_Name' => 'Program',
            'Name' => 'Name of Graduates',
            'Employment_Status' => 'Status',
            'Company_Name' => 'Company Name / Type of Business',
            'Supporting_Docs' => 'Supporting Documents',
        );
        $table['table_data'] = array();

        return $table;
    }

    public function getOutcomeIndicatorSummaryTableData()
    {
        $table = array();
        $table['table_id'] = 'dataTable'; // 'outcome_indicator_summary_tbl';
        $table['table_headers'] = array(
            'Total_Graduates' => 'Total No. of Graduates',
            'Total_Employed' => 'Employed',
            'Total_Unemployed' => 'Unemployed',
            'Total_Untracked' => 'Not Tracked',
        );
        $table['table_data'] = array();

        return $table;
    }

    public function getAlumniDataFolder()
    {          
        if (!is_dir(ALUMNI_DATA)) {
            createDir(ALUMNI_DATA);
        }
        $lname = strtolower(preg_replace('/[^A-Z0-9]/i', '', $_SESSION['ais']['logged']['Last_Name']));
        $fname = strtolower(preg_replace('/[^A-Z0-9]/i', '', $_SESSION['ais']['logged']['First_Name']));
        $dir = ALUMNI_DATA."/{$lname}_$fname";
        //print "<pre>DIR: $dir\n";        
        if (!is_dir($dir)) {
            createDir($dir);
        }

        return $dir;
    }   

    public function updateAlumniPassword()
    {
        if (isset($_POST['password']) && $_POST['password'] != '') {
            $password = hashPassword($_POST['password']);
            if ($password == $_SESSION['ais']['logged']['Pass_Word']) {
                if (isset($_POST['verify_password']) && ($_POST['new_password'] == $_POST['verify_password'])) {
                    $new_password = hashPassword($_POST['new_password']);
                    $user_key = $_SESSION['ais']['logged']['User_Key'];
                    $this->sql->updateUserPassword($new_password, $user_key);
                    $_POST['profile_updates']['success']['password'] = 'User password has been updated';
                } else {
                    $_POST['profile_updates']['error']['password'] = 'New password unverified';
                }
            } else {
                $_POST['profile_updates']['error']['password'] = 'Incorrect password';
            }
        }
        
    }

    public function checkSaveResults()
    {
        if (!empty($_POST['profile_updates']['success'])) {
            $success_msg = implode('</br>', $_POST['profile_updates']['success']);
            $_POST['success'] = 'Alumni Profile updated!</br><p class="text-muted">'.$success_msg.'</p>';
        }
        if (!empty($_POST['profile_updates']['error'])) {
            $error_msg = implode('</br>', $_POST['profile_updates']['success']);
            $_POST['danger'] = 'Error encountered when updating Alumni Profile!</br><p class="text-muted">'.$error_msg.'</p>';
        }
    }

    public function setAlumniProfilePicture()
    {
        $dir = $this->getAlumniDataFolder();
        $files = getImagesFromDir($dir, 'profile_pic');
        if (!empty($files)) {
            $pic_path = current($files);
            $_SESSION['ais']['profile']['PROFILE_PIC'] = $pic_path;
        }
    }

    public function getSavedAlumniProfile($alumni_key) 
    {
        $sql = "
            SELECT * 
            FROM alumni_profiles
            WHERE Alumni_Key = $alumni_key
        ";
        $results = $this->getDataFromTable($sql);
        $data = array();
        //print "<pre>$sql\n"; print_r($results); exit;
        foreach ($results as $row) {            
            $data = $row;
        }

        return $data;
    }

    public function getAlumniProfileData($alumni_key)
    {
        $sql = "
            SELECT * 
            FROM alumni_profiles
            WHERE Alumni_Key = $alumni_key
        ";
        $results = $this->getDataFromTable($sql);
        $data = array();
        //print "<pre>$sql\n"; print_r($results); exit;
        foreach ($results as $row) {
            if ($row['Profile1'] != '') {
                $profile = json_decode($row['Profile1'], true);
                if (is_array($profile)) {
                    foreach ($profile as $field => $value) {
                        $data[$field] = $value;
                    }
                }
            }
            if ($row['Profile2'] != '') {
                $profile = json_decode($row['Profile2'], true);
                if (is_array($profile)) {
                    foreach ($profile as $field => $value) {
                        $data[$field] = $value;
                    }
                }
            }
            if ($row['Profile3'] != '') {
                $profile = json_decode($row['Profile3'], true);
                if (is_array($profile)) {
                    foreach ($profile as $field => $value) {
                        $data[$field] = $value;
                    }
                }
            }
        }        

        return $data;
    }

    public function setAlumniProfileSessionData($alumni_key) 
    {
        $profile = $this->getAlumniProfileData($alumni_key);
        $_SESSION['ais']['profile'] = $profile;
        foreach ($_SESSION['ais']['logged'] as $field => $value) {
            $field = strtoupper($field);
            $_SESSION['ais']['profile'][$field] = $value;
        }
        $this->setAlumniProfilePicture();
    }

    public function saveAlumniProfile1($alumni_key)
    {
        # Profile Picture
        if (isset($_FILES['profile_picture']) && isset($_FILES['profile_picture']['tmp_name'])) {
            $profile_pic = $_FILES['profile_picture']['tmp_name'];
            //print "<pre>$profile_pic\n";
            if (is_file($profile_pic)) {
                $dir = $this->getAlumniDataFolder();
                if (is_dir($dir)) {
                    $ext = getFileExtension($_FILES['profile_picture']['name']);
                    $new_file = "{$dir}/profile_pic.{$ext}";
                    //print "<pre>$new_file\n";
                    copy($profile_pic, $new_file);
                    $_POST['profile_updates']['success']['profile_picture'] = 'Profile picture has been updated';
                }
            }
        }

        # Password Update
        if (isset($_POST['new_password']) && $_POST['new_password'] != '') {
            $this->updateAlumniPassword();
        }
        $this->updateAlumniProfileInDB($alumni_key, 1);
    }

    public function saveAlumniProfile2($alumni_key)
    {
        $this->updateAlumniProfileInDB($alumni_key, 2);
    }

    public function saveAlumniProfile3($alumni_key)
    {
        $this->updateAlumniProfileInDB($alumni_key, 3);
    }

    public function updateAlumniProfileInDB($alumni_key, $profile_page)
    {
        $table = 'alumni_profiles';            
        $existing = false;  
        $data = $this->getSavedAlumniProfile($alumni_key);
        //print "<pre>"; print_r($data); exit;
        if (empty($data)) {    
            $data = array(
                'Date_Updated' => time(),
                'Alumni_Key' => $alumni_key,
                'Profile1' => '',
                'Profile2' => '',
                'Profile3' => '',
            );
        } else {
            $existing = true;   
            $data['Date_Updated'] = time();
        }
        $tbl_columns = array(
            'Profile1',
            'Profile2',
            'Profile3',
            'Employment_Status',
            'Company_Name',
            'Supporting_Doc',
            'Position',
            'Awards_Received',
            'Hired_2Years_After_Grad',
            'Date_Updated',
        );
        if ($profile_page == 1) {
            $profile = $existing ? json_decode($data['Profile1'], true) : array();            
            foreach ($this->profile1_fields as $field) {
                if (isset($_POST[$field]) && $_POST[$field] !== '') {
                    $profile[$field] = $_POST[$field];
                }
            }
            $data['Profile1'] = json_encode($profile);
        } elseif ($profile_page == 2) {
            $profile = $existing ? json_decode($data['Profile2'], true) : array();    
            foreach ($this->profile2_fields as $field) {
                if (isset($_POST[$field]) && $_POST[$field] !== '') {
                    $profile[$field] = $_POST[$field];
                }
            }
            $data['Profile2'] = json_encode($profile);
        }        
        //print "<pre>"; print_r($_POST); exit;   

        if ($existing) {
            $where_sql = " Alumni_Key = {$alumni_key} ";
            $res = $this->updateTableRow($table, $tbl_columns, $data, $where_sql);
        } else {
            $res = $this->insertTableRow($table, array_keys($data), array($data));
        }


        if ($res) {
            # Add Admin Alert
            //$this->addAdminAlert($announcement_key);

            # Update user/alumni table accordingly

            # Update alumni logged data
            //$user = $this->sql->getRegisteredAlumniProfile($alumni_key);
            //$_SESSION['ais']['logged'] = $user;
        }
    }
}

?>