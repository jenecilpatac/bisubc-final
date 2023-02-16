<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['ais']['logged'] = 'admin';
//print "<pre>"; print_r($_SESSION); exit;
//print "<pre>"; print_r($_GET); exit;

require_once 'config.php';
require_once 'helper.php';


require_once 'models/sql_alumni.php';
$sql = new SQL_Alumni;
require_once 'models/sql_tracker.php';
$sql_tracker = new SQL_Tracker;


if (!isset($_GET['m'])) {
    $_GET['m'] = 'home';
}

# Login
if ($_GET['m'] == 'login') {
    $valid = false;
    if (isset($_POST['login']) && $_POST['login'] == 'submit') {
        $valid = false;
        if (isset($_POST['email']) && $_POST['username'] !== '' && isset($_POST['password']) && $_POST['password'] !== '') {
            $_SESSION['logged'] = array();
            include_once 'models/db_connect.php';
            $sql = new DB_Connect; 
            $valid = $sql->isValidUser($_POST['username'], $_POST['password']);
            if (!$valid) {
                $_POST['danger'] = "Either user does not exist or username/password mismatched.";
            } else {
                $_SESSION['logged'] = $_POST['logged'];
                require 'init.php';
            }
        } else {
            $_POST['danger'] = "Invalid Login.";
        }
    } elseif (!empty($_SESSION['logged']) && $_SESSION['logged'] != 'guest') {
        $valid = true;
    } else {
        unset($_SESSION['logged']);
        require_once 'views/ui_login.php';
        exit;
    }

    if (!$valid) {
        logout();
    }

# Registered Alumni
} elseif ($_GET['m'] == 'verify') {
    if (isset($_POST['verify']) && $_POST['verify'] == 'alumni') {
        //print "<pre>"; print_r($_POST); exit;
        if (empty($_POST['password']) || empty($_POST['password_repeat']) ||
            empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email'])) {

                $_POST['danger'] = 'Populate all fields.';
        } else {
            if ($_POST['password'] == $_POST['password_repeat']) {
                $verified = $sqk_tracker->verifyAlumni($_POST['email'], $_POST['firstname'], $_POST['lastname']);
                if (!empty($verified)) {
                    $_SESSION['ais']['register'] = $_POST;
                    //print "<pre>"; print_r($_POST); exit;
                    header("Location: index.php?m=register");
                } else {
                    $_POST['danger'] = 'Alumni data does not exist.';
                }                        
            } else {
                $_POST['danger'] = 'Password mismatched.';
            }
        }

    }
    require_once 'views/ui_verify_alumni.php';
    die();

    # Registered Alumni
} elseif ($_GET['m'] == 'register') {    
    //print "<pre>"; print_r($_SESSION['ais']); exit;
    $_POST['courses'] = $sql->getCourseList();
    $_POST['batches'] = array();
    require_once 'views/ui_register.php';
    die();
}

//print "<pre>"; print_r($_GET); exit;

# Login
if (!isset($_SESSION['ais']['logged'])) {
    header("Location: index.php?m=login");
}

# Logout
if ($_GET['m'] == 'logout') {
    logout();

# Registered Alumni
} elseif ($_GET['m'] == 'registered') {
    require_once 'views/ui_registered.php';

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
} elseif ($_GET['m'] == 'employed_graduates') {
    require_once 'views/ui_employed_graduates.php';

# Registered Alumni
} elseif ($_GET['m'] == 'outcome_indicator') {
    require_once 'views/ui_outcome_indicator.php';

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
                    $_SESSION['batches'] = $sql->getBatches();
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