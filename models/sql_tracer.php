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

    public $profile3_fields = array(
        'EMPLOYMENT_STATUS',
        'JOB_EXPERIENCES',
        'NEVER_EMPLOYED',
        'NEVER_EMPLOYED_OTHERS',
        'LOCAL_ABROAD',
        'NAME_COMPANY',
        'ADDRESS_COMPANY',
        'CONTACT_COMPANY',
        'SUPPORTING_DOCUMENT',
        'SUPPORTING_DOC_FILE',
        'LINE_BUSINESS',
        'POSITION',
        'WORK_ALIGNED',
        'STATUS_FIRST_JOB',
        'STATUS_CURRENT_JOB',
        'LEVEL_FIRST_JOB',
        'LEVEL_CURRENT_JOB  ',
        'SELF_EMPLOYED_LINE',
        'FIND_FIRST',
        'FIND_FIRST_OTHERS',
        'FIRST_JOB_AFTER_GRAD',
        'FIRST_JOB_AFTER_GRAD_OTHERS',
        'FIRST_JOB_FACTORS',
        'FIRST_JOB_FACTORS_OTHERS',
        'CHALLENGES',
        'CHALLENGES_OTHERS',
        'AWARDS',
        'LEVEL_AWARD',
        'LEVEL_AWARD_OTHERS',
        'AWARD_DOC',
        'AWARD_DOC_FILE',
    );

    public function __construct() 
    {
        Parent::__construct();

        require_once 'models/sql_alumni.php';
        $this->sql = new SQL_Alumni;

    }

    public function getRegisteredAlumniList($batch, $course_code)
    {
        $sql = "
            SELECT *, 
                t1.Alumni_Key,
                concat(First_Name, ' ', Last_Name) as Name
            FROM users as t1
            LEFT JOIN alumni as t2 
                ON t1.Alumni_Key = t2.Alumni_Key
            LEFT JOIN batches as t4 
                ON t2.Batch_Key = t4.Batch_Key
            LEFT JOIN courses as t5 
                ON t4.Course_Key = t5.Course_Key
            LEFT JOIN alumni_profiles as t3 
                ON t1.Alumni_Key = t3.Alumni_Key
            WHERE Batch = '{$batch}'
                AND Course_Code = '{$course_code}'
            ORDER BY Last_Name, First_Name
        ";        
        $results = $this->getDataFromTable($sql);
        //print "<pre>$sql"; print_r($results); exit;

        return $results;
    }

    public function getRegisteredAlumniTableData($batch, $course_code)
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
        $table['table_data'] = $this->getRegisteredAlumniList($batch, $course_code);
        //print "<pre>"; print_r($table['table_data']); 
        $table['table_pdf'] = $table['table_data'];
        foreach ($table['table_data'] as $i => $row) {
            $table['table_data'][$i]['Name'] = "<a target='_blank' href='index.php?m=tracer&alumni_key={$row['Alumni_Key']}'>{$row['Name']}</a>";
        }
        //print "<pre>"; print_r($table['table_data']); exit;

        return $table;
    }

    public function getEmployedGraduatesData($batch)
    {
        $sql = "
            SELECT 
                count(*) as Alumni_Count,
                Course_Name,
                Course_Code,
                Hired_2Years_After_Grad
            FROM alumni as t2
            LEFT JOIN batches as t4 
                ON t2.Batch_Key = t4.Batch_Key
            LEFT JOIN courses as t5 
                ON t4.Course_Key = t5.Course_Key
            LEFT JOIN alumni_profiles as t3 
                ON t2.Alumni_Key = t3.Alumni_Key
            WHERE Batch = '{$batch}'            
            GROUP BY Course_Code, Hired_2Years_After_Grad
        ";        
        $results = $this->getDataFromTable($sql);

        return $results;
    }

    public function getEmployedGraduatesTableData($batch)
    {
        $table = array();
        $table['table_id'] = 'dataTable'; // 'employed_graduates_tbl';
        $table['table_headers'] = array(
            'Course_Name' => 'Course',
            'Total_Graduates' => 'No. of Graduates',
            'Total_Graduates_Hired_2yrs' => 'No. of Graduates Hired<br>within 2 years after graduation',
            'Percentage' => 'Percentage',
        );
        $data = $this->getEmployedGraduatesData($batch);
        //if (isset($_POST['view']) && $_POST['view'] == 'alumni') {
            //print "<pre>$batch\n"; print_r($data);  exit;
        //}
        $summary = array();
        foreach ($data as $row) {
            $course = $row['Course_Code'];
            if (!isset($summary[$course])) {
                $summary[$course] = array(
                    'Course_Name' => $row['Course_Name'],
                    'Total_Graduates' => 0,
                    'Total_Graduates_Hired_2yrs' => 0,
                );                
            }
            $summary[$course]['Total_Graduates'] += $row['Alumni_Count'];
            if ($row['Hired_2Years_After_Grad'] == 1) {
                $summary[$course]['Total_Graduates_Hired_2yrs'] += $row['Alumni_Count'];
            } 
        }
        $table['table_data'] = array();
        foreach ($summary as $course => $row) {
            $row['Percentage'] = round(($row['Total_Graduates_Hired_2yrs'] / $row['Total_Graduates'])*100, 4);
            $table['table_data'][] = $row;
        }

        return $table;
    }

    public function getOutcomeIndicatorData($batch, $course_code)
    {
        $sql = "
            SELECT *, 
                t2.Alumni_Key,
                concat(First_Name, ' ', Last_Name) as Name
            FROM alumni as t2
            LEFT JOIN batches as t4 
                ON t2.Batch_Key = t4.Batch_Key
            LEFT JOIN courses as t5 
                ON t4.Course_Key = t5.Course_Key
            LEFT JOIN alumni_profiles as t3 
                ON t2.Alumni_Key = t3.Alumni_Key
            WHERE Batch = '{$batch}'
                AND Course_Code = '{$course_code}'
            ORDER BY Last_Name, First_Name
        ";        
        $results = $this->getDataFromTable($sql);

        return $results;
    }

    public function getOutcomeIndicatorTableData($batch, $course_code)
    {
        $table = array();
        $table['table_id'] = 'dataTable'; // 'outcome_indicator_tbl';
        $table['table_headers'] = array(
            'Name' => 'Name of Graduates',
            'Employment_Status' => 'Status',
            'Company_Name' => 'Company Name / Type of Business',
            'Supporting_Doc' => 'Supporting Documents',
        );
        $table['table_data'] = $this->getOutcomeIndicatorData($batch, $course_code);

        return $table;
    }

    public function getOutcomeIndicatorSummaryData($batch, $course_code)
    {
        $sql = "
            SELECT 
                count(*) as Alumni_Count,
                Employment_Status
            FROM alumni as t2
            LEFT JOIN batches as t4 
                ON t2.Batch_Key = t4.Batch_Key
            LEFT JOIN courses as t5 
                ON t4.Course_Key = t5.Course_Key
            LEFT JOIN alumni_profiles as t3 
                ON t2.Alumni_Key = t3.Alumni_Key
            WHERE Batch = '{$batch}'
                AND Course_Code = '{$course_code}'
            GROUP BY Employment_Status
        ";        
        $results = $this->getDataFromTable($sql);

        return $results;
    }

    public function getOutcomeIndicatorSummaryTableData($batch, $course_code)
    {
        $table = array();
        $table['table_id'] = 'dataTable'; // 'outcome_indicator_summary_tbl';
        $table['table_headers'] = array(
            'Total_Graduates' => 'Total No. of Graduates',
            'Total_Employed' => 'Employed',
            'Total_Unemployed' => 'Unemployed',
            'Total_Untracked' => 'Not Tracked',
        );
        $summary = array(
            'Total_Graduates' => 0,
            'Total_Employed' => 0,
            'Total_Unemployed' => 0,
            'Total_Untracked' => 0,
        );
        $data = $this->getOutcomeIndicatorSummaryData($batch, $course_code);
        //print "<pre>"; print_r($data);  exit;
        foreach ($data as $row) {
            $summary['Total_Graduates'] += $row['Alumni_Count'];
            if ($row['Employment_Status'] == 'employed' || $row['Employment_Status'] == 'self_employed') {
                $summary['Total_Employed'] += $row['Alumni_Count'];
            } elseif ($row['Employment_Status'] == 'not_employed') {
                $summary['Total_Unemployed'] += $row['Alumni_Count'];
            } else {
                $summary['Total_Untracked'] += $row['Alumni_Count'];
            }
        }
        $table['table_data'] = array($summary);
        //print "<pre>"; print_r($table['table_data']); exit;
        

        return $table;
    }

    public function getAlumniDataFolder($user)
    {          
        if (!is_dir(ALUMNI_DATA)) {
            createDir(ALUMNI_DATA);
        }
        $lname = strtolower(preg_replace('/[^A-Z0-9]/i', '', $user['Last_Name']));
        $fname = strtolower(preg_replace('/[^A-Z0-9]/i', '', $user['First_Name']));
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

    public function setAlumniProfilePicture($user)
    {
        $dir = $this->getAlumniDataFolder($user);
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
        $user = $this->sql->getRegisteredAlumniProfile($alumni_key);
        $_SESSION['ais']['profile'] = $profile;
        foreach ($user as $field => $value) {
            $field = strtoupper($field);
            $_SESSION['ais']['profile'][$field] = $value;
        }
        $this->setAlumniProfilePicture($user);
        # Supporting Document        
        $dir = $this->getAlumniDataFolder($user);
        $files = getImagesFromDir($dir, 'supporting_document');
        if (!empty($files)) {
            $pic_path = current($files);
            $_SESSION['ais']['profile']['SUPPORTING_DOC_FILE'] = $pic_path;
        }
        # Award Document        
        $dir = $this->getAlumniDataFolder($user);
        $files = getImagesFromDir($dir, 'award_document');
        if (!empty($files)) {
            $pic_path = current($files);
            $_SESSION['ais']['profile']['AWARD_DOC_FILE'] = $pic_path;
        }
    }

    public function saveAlumniProfile1($alumni_key)
    {  
        $user = $this->sql->getRegisteredAlumniProfile($alumni_key);
        # Profile Picture
        if (isset($_FILES['profile_picture']) && isset($_FILES['profile_picture']['tmp_name'])) {
            $profile_pic = $_FILES['profile_picture']['tmp_name'];
            //print "<pre>$profile_pic\n";
            if (is_file($profile_pic)) {
                $dir = $this->getAlumniDataFolder($user);
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
        $user = $this->sql->getRegisteredAlumniProfile($alumni_key);
        //print "<pre>"; print_r($_POST); print_r($_FILES); exit;
        # Supporting Document
        if (isset($_FILES['SUPPORTING_DOC_FILE']) && isset($_FILES['SUPPORTING_DOC_FILE']['tmp_name'])) {
            $doc = $_FILES['SUPPORTING_DOC_FILE']['tmp_name'];
            //print "<pre>$profile_pic\n";
            if (is_file($doc)) {
                $dir = $this->getAlumniDataFolder($user);
                if (is_dir($dir)) {
                    $ext = getFileExtension($_FILES['SUPPORTING_DOC_FILE']['name']);
                    $new_file = "{$dir}/supporting_document.{$ext}";
                    //print "<pre>$new_file\n";
                    copy($doc, $new_file);
                    $_POST['profile_updates']['success']['SUPPORTING_DOC_FILE'] = 'Supporting document for employment has been uploaded';
                }
            }
        }

        # Award Document
        if (isset($_FILES['AWARD_DOC_FILE']) && isset($_FILES['AWARD_DOC_FILE']['tmp_name'])) {
            $doc = $_FILES['AWARD_DOC_FILE']['tmp_name'];
            //print "<pre>$profile_pic\n";
            if (is_file($doc)) {
                $dir = $this->getAlumniDataFolder($user);
                if (is_dir($dir)) {
                    $ext = getFileExtension($_FILES['AWARD_DOC_FILE']['name']);
                    $new_file = "{$dir}/award_document.{$ext}";
                    //print "<pre>$new_file\n";
                    copy($doc, $new_file);
                    $_POST['profile_updates']['success']['AWARD_DOC_FILE'] = 'Award document has been uploaded';
                }
            }
        }
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
        } elseif ($profile_page == 3) {
            $profile = $existing ? json_decode($data['Profile3'], true) : array();    
            foreach ($this->profile3_fields as $field) {
                if (isset($_POST[$field]) && $_POST[$field] !== '') {
                    $profile[$field] = $_POST[$field];
                }
            }
            $data['Profile3'] = json_encode($profile);
            if (isset($_POST['EMPLOYMENT_STATUS'])) {
                $data['Employment_Status'] = $_POST['EMPLOYMENT_STATUS'];
            }
            if (isset($_POST['NAME_COMPANY'])) {
                $data['Company_Name'] = $_POST['NAME_COMPANY'];
            }
            if (isset($_POST['POSITION'])) {
                $data['Position'] = $_POST['POSITION'];
            }
            if (isset($_POST['SUPPORTING_DOCUMENT'])) {
                $data['Supporting_Doc'] = $_POST['SUPPORTING_DOCUMENT'];
            }
            if (isset($_POST['LEVEL_AWARD'])) {
                $data['Awards_Received'] = ($_POST['LEVEL_AWARD'] == 'others') ? $_POST['LEVEL_AWARD_OTHERS'] : $_POST['LEVEL_AWARD'];
            }
            if (isset($_POST['FIRST_JOB_AFTER_GRAD'])) {
                $data['Hired_2Years_After_Grad'] = ($_POST['FIRST_JOB_AFTER_GRAD'] == 'others') ? 0 : 1;
            }
        }        
        //print "<pre>"; print_r($data); exit;   

        if ($existing) {
            $where_sql = " Alumni_Key = {$alumni_key} ";
            $res = $this->updateTableRow($table, $tbl_columns, $data, $where_sql);
        } else {
            $res = $this->insertTableRow($table, array_keys($data), array($data));
        }


        if ($res) {
            # Update alumni logged data
            $user = $this->sql->getRegisteredAlumniProfile($alumni_key);
            $_SESSION['ais']['logged'] = $user;

            # Add Admin Alert
            $alert = ucwords(strtolower($user['First_Name']))." ".ucwords(strtolower($user['Last_Name']))." updated his/her profile.";
            $this->sql->addAdminAlerts($alert);
        }
    }
}

?>