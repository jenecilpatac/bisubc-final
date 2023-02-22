<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'config.php';
require_once 'helper.php';

require_once 'models/sql_alumni.php';
$sql = new SQL_Alumni;
require_once 'models/sql_tracer.php';
$sql_tracer = new SQL_Tracer;
$_POST['profile_updates'] = array(
    'error' => array(),
    'success' => array(),
);

$_POST['is_ajax'] = true;
if (isset($_POST['input_name']) && isset($_POST['input_value'])) {
    $alumni_key = $_GET['alumni_key'];  
    $_POST[$_POST['input_name']] = $_POST['input_value'];
    # Save profile
    $_POST['save_profile'] = intval(preg_replace('/profile/', '', $_POST['from_profile']));
    if ($_POST['save_profile'] == 1) {
        $sql_tracer->saveAlumniProfile1($alumni_key);
    } elseif ($_POST['save_profile'] == 2) {  
        $sql_tracer->saveAlumniProfile2($alumni_key);
    } elseif ($_POST['save_profile'] == 3) {  
        $sql_tracer->saveAlumniProfile3($alumni_key);
    }    
    $sql_tracer->setAlumniProfileSessionData($alumni_key);   
    $tmpfile = './reports/profile_cv.json';
    file_put_contents($tmpfile, json_encode($_SESSION['ais']['profile']));
}


echo json_encode($_POST['profile_updates']);

?>