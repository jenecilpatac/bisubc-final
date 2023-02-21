<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
//$_SESSION['ais']['logged'] = 'admin';
//print "<pre>"; print_r($_SESSION); exit;

require_once 'config.php';
require_once 'helper.php';


require_once 'models/sql_alumni.php';
$sql = new SQL_Alumni;
require_once 'models/sql_tracer.php';
$sql_tracer = new SQL_Tracer;


if (!isset($_GET['m'])) {
    $_GET['m'] = 'home';
}

# Login
if ($_GET['m'] == 'login') {
    //print "<pre>"; print_r($_GET); print_r($_POST); exit;
    if (isset($_POST['login']) && $_POST['login'] == 'submit') {
        //print "<pre>"; print_r($_POST); exit;
        if (isset($_POST['email']) && $_POST['email'] !== '' && isset($_POST['password']) && $_POST['password'] !== '') {
            $_SESSION['ais']['logged'] = array();
            if ($_POST['email'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASS) {
                //print "<pre>"; print_r($_GET); exit;
                $user = ADMIN_USERNAME;
            } else {
                $user = $sql->isValidUser($_POST['email'], $_POST['password']);
                //print "<pre>"; var_dump($user); exit; 
            }
            if (empty($user)) {
                $_POST['danger'] = "Either user does not exist or username/password mismatched.";
            } else {
                $_SESSION['ais']['logged'] = $user;
                //print "<pre> POST ISSET "; print_r($_SESSION); exit;
                header("Location: ./index.php");
                exit;
            }
        } else {
            $_POST['danger'] = "Please fill up all fields.";
        }        
        //print "<pre>ISSET "; print_r($_SESSION); exit;
        $_SESSION['ais']['logged'] = array();
        require_once 'views/ui_login.php';
        exit;

    } else {
        //print "<pre>ELSE "; print_r($_SESSION); exit;
        $_SESSION['ais']['logged'] = array();
        require_once 'views/ui_login.php';
        exit;
    }

# Registered Alumni
} elseif ($_GET['m'] == 'register') {
    $_POST['courses'] = $sql->getCourseList();
    $_POST['batches'] = $sql->getBatches();
    //print "<pre>"; print_r($_POST); exit;
    if (isset($_POST['register']) && $_POST['register'] == 'alumni') {
        //print "<pre>"; print_r($_POST); exit;
        if (empty($_POST['password']) || empty($_POST['password_repeat']) ||
            empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email'])) {

                $_POST['danger'] = 'Populate all fields.';
        } else {
            if ($_POST['password'] == $_POST['password_repeat']) {
                //print "<pre>"; print_r($_POST); exit; 
                $user = $sql->createAlumniUser($_POST);
                //print "<pre>"; var_dump($user); exit; 
                if ($user == -1) {
                    $_POST['danger'] = 'You already have an account. Login!';
                } elseif (!empty($user)) {
                    $_SESSION['ais']['logged'] = $user;
                    header("Location: index.php");
                } else {
                    $_POST['danger'] = 'Alumni data does not exist.';
                }                        
            } else {
                $_POST['danger'] = 'Password mismatched.';
            }
        }

    }
    
    require_once 'views/ui_register.php';
    die();

    # Registered Alumni
} elseif ($_GET['m'] == 'tracer') {    
    //print "<pre>"; print_r($_SESSION['ais']); exit;
    $alumni_key = $_SESSION['ais']['logged']['Alumni_Key'];
    if (isset($_POST['save_profile'])) {
        $_POST['profile_updates'] = array(
            'error' => array(),
            'success' => array(),
        );
        $_POST['save_profile'] = intval($_POST['save_profile']);
        if ($_POST['save_profile'] == 1) {
            $sql_tracer->saveAlumniProfile1($alumni_key);
        } elseif ($_POST['save_profile'] == 2) {  
            $sql_tracer->saveAlumniProfile2($alumni_key);
        } elseif ($_POST['save_profile'] == 3) {  
            $sql_tracer->saveAlumniProfile3($alumni_key);
        }
        //print "<pre>"; print_r($_SESSION['ais']); print_r($_POST); ;print_r($_FILES); exit;        
        $sql_tracer->checkSaveResults();
    } elseif (isset($_POST['to_profile'])) {
        $profile_sel = intval($_POST['to_profile']);
        header("Location: index.php?m=tracer&profile=".$profile_sel);

    }
    $_POST['disabled'] = array(
        'FIRST_NAME' => true,
        'MIDDLE_NAME' => true,
        'LAST_NAME' => true,
        'LAST_NAME' => true,
        'COURSE_NAME' => true,
        'BATCH' => true,
    );    
    $sql_tracer->setAlumniProfileSessionData($alumni_key);     
    //print "<pre>"; print_r($_SESSION['ais']['profile']); exit;
    $_POST['courses'] = $sql->getCourseList();
    $_POST['batches'] = $sql->getBatches();
    require_once 'views/ui_tracer.php';
    die();
}
//print "<pre>"; print_r($_GET); exit;

# Login
if (!isset($_SESSION['ais']['logged']) || empty($_SESSION['ais']['logged'])) {
    //print "<pre>"; print_r($_SESSION); exit;
    //header("Location: ./index.php?m=login&type=admin");
}

$_POST['alert_data'] = array();
if (isset($_SESSION['ais']['logged']) && !empty($_SESSION['ais']['logged'])) {
    if ($_SESSION['ais']['logged'] == ADMIN_USERNAME) {
        $_POST['alert_data']['unread'] = 0;
        $_POST['alert_data']['alerts'] = array();
    } elseif ($_SESSION['ais']['logged'] != 'guest') {
        $alumni_key = intval($_SESSION['ais']['logged']['Alumni_Key']);
        $_POST['alert_data']['unread'] = $sql->getUnreadAlumniAlertCount($alumni_key);
        $_POST['alert_data']['alerts'] = $sql->getAlumniAlerts($alumni_key);
    }
    //print "<pre>"; print_r($_POST['alert_data']); exit;
} else {
    $_SESSION['ais']['logged'] = 'guest';
}

# Logout
if ($_GET['m'] == 'logout') {
    logout();

# Announcements
} elseif ($_GET['m'] == 'announcements') {
    if (isset($_POST['save']) && $_POST['save'] == 'announcement') {
        //print "<pre>"; print_r($_POST); exit;
        if ($_POST['announcement'] == '') {
            $_POST['danger'] = 'Please enter announcement.';
        } else {
            $res = $sql->addAnnouncement($_POST['announcement']);
            if ($res) {
                $_POST['success'] = 'Announcement successfully saved.';
            } else {
                $_POST['danger'] = 'Something went wrong.';
            }
        }
    }
    $_POST['announcement_list'] = $sql->getAnnouncementList();
    //print "<pre>"; print_r($_POST['announcement_list']); exit;
    require_once 'views/ui_announcements.php';
    
# Registered Alumni
} elseif ($_GET['m'] == 'registered_alumni') {
    $_POST['table'] = $sql_tracer->getRegisteredAlumniTableData();
    //print "<pre>"; print_r($_POST['table']); exit;
    $_POST['courses'] = $sql->getCourseList();
    $_POST['batches'] = $sql->getBatches();
    require_once 'views/ui_registered_alumni.php';

# Employed Graduates
} elseif ($_GET['m'] == 'employed_graduates') {
    $_POST['table'] = $sql_tracer->getEmployedGraduatesTableData();
    //print "<pre>"; print_r($_POST['table']); exit;
    require_once 'views/ui_employed_graduates.php';

# Dashboard
} elseif ($_GET['m'] == 'dashboard') {
    require_once 'views/ui_dashboard.php';

# Outcome Indicator
} elseif ($_GET['m'] == 'outcome_indicator') {
    $_POST['details_table'] = $sql_tracer->getOutcomeIndicatorTableData();
    $_POST['summary_table'] = $sql_tracer->getOutcomeIndicatorSummaryTableData();
    //print "<pre>"; print_r($_POST['details_table']); exit;
    //print "<pre>"; print_r($_POST['summary_table']); exit;
    $_POST['courses'] = $sql->getCourseList();
    $_POST['batches'] = $sql->getBatches();
    require_once 'views/ui_outcome_indicator.php';

# Tracer
} elseif ($_GET['m'] == 'tracer') { 
    if (!empty($_POST)) {
        //print "<pre>"; print_r($_POST); exit;
    } 
    $_POST['courses'] = $sql->getCourseList();
    $_POST['batches'] = $sql->getBatches();
    $_POST['disabled_fields'] = array();  
    require_once 'views/ui_tracer.php';

# Manage Courses
} elseif ($_GET['m'] == 'manage_courses') {
    if (isset($_POST['save']) && $_POST['save'] == 'course') {
        //print "<pre>"; print_r($_POST); exit;
        if ($_POST['Course_Code'] == '' && $_POST['Course_Name'] == '') {
            $_POST['danger'] = 'Please enter course code and course name.';
        } elseif ($_POST['Course_Code'] == '') {
            $_POST['danger'] = 'Please enter course code.';
        } elseif ($_POST['Course_Name'] == '') {
            $_POST['danger'] = 'Please enter course name.';
        } else {
            $res = $sql->addCourse(array($_POST));
            if ($res) {
                $_POST['success'] = 'Course "'.$_POST['Course_Code'].': '.$_POST['Course_Name'].'" successfully saved.';
            } else {
                $_POST['danger'] = 'Something went wrong.';
            }
        }
    }
    $_POST['table'] = $sql->getCoursesTableData();
    //print "<pre>"; print_r($_POST['table']); exit;
    require_once 'views/ui_manage_courses.php';

# Manage Alumni
} elseif ($_GET['m'] == 'manage_alumni') {
    //print "<pre>"; print_r($_POST); exit;
    if (isset($_POST['save']) && $_POST['save'] == 'alumni') {
        //print "<pre>"; print_r($_FILES); exit;
        # Save Alumni
        if (isset($_FILES['upload_csv']) && !empty($_FILES['upload_csv']['tmp_name'])) {
            $csv_file = $_FILES['upload_csv']['tmp_name'];
            if (is_file($csv_file)) {
                $list = getCSVFileData($csv_file);
                //print "<pre>"; print_r($list); exit;
                $created = $sql->addAlumniData($list);
                $created_info = $created.'/'.count($list);
                if ($created > 0) {
                    $_POST['success'] = 'Alumni data  ('.$created_info.') from "'.$_FILES['upload_csv']['name'].'" file have been successfully saved.';      
                    # Get Course and Batch name from the first alumni to be used as default
                    if (isset($list[0]['Course']) && isset($list[0]['Batch'])) {
                        $_POST['course_sel'] = $list[0]['Course'];
                        $_POST['batch_sel'] = $list[0]['Batch'];
                    }              
                } else {
                    $_POST['warning'] = 'No alumni data ('.$created_info.') saved. Alumni may already exist.';
                }
            }
        } else {
            $_POST['warning'] = 'No CSV file selected. Please click on [Browse...] button to select file.';
        }
    } 
    $_POST['courses'] = $sql->getCourseList();
    $_POST['batches'] = $sql->getBatches();
    
    # View Alumni
    if (isset($_POST['view']) && $_POST['view'] == 'alumni') {
        //print "<pre>"; print_r($_POST); exit;
        $_POST['course_sel'] = $_POST['course'];
        $_POST['batch_sel'] = $_POST['batch'];
    } elseif (!isset($_POST['course_sel']) && !isset($_POST['batch_sel'])) {
        $batches = array_keys($_POST['batches']);
        if (!empty($batches)) {
            $_POST['batch_sel'] = $batches[0];
            $batch = $_POST['batches'][$_POST['batch_sel']];
            $_POST['course_sel'] = $batch['Course_Code'];
        } else {
            $_POST['batch_sel'] = '-';
            $_POST['course_sel'] = '-';
        }
    }
    $_POST['table'] = $sql->getAlumniTableData();
    //print "<pre>"; print_r($_POST['table']); exit;
    if (empty($_POST['table'])) {
        $_POST['danger'] = 'No alumni data available.';
    }
    require_once 'views/ui_manage_alumni.php';
    
} else {
    require_once 'views/ui_home.php';
}
    
?>