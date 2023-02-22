<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
//$_SESSION['ais']['logged'] = 'admin';
//print "<pre>"; print_r($_SESSION['ais']); exit;

if ($_SESSION['ais']['logged'] != 'admin') {
    header('Location: index.php');
}

require_once 'config.php';
require_once 'helper.php';


require_once 'models/sql_alumni.php';
$sql = new SQL_Alumni;
require_once 'models/sql_tracer.php';
$sql_tracer = new SQL_Tracer;


$_POST['disabled'] = array(
    'FIRST_NAME' => true,
    'MIDDLE_NAME' => true,
    'LAST_NAME' => true,
    'LAST_NAME' => true,
    'COURSE_NAME' => true,
    'BATCH' => true,
);    
$_POST['disable_all'] = true;
//print "<pre>"; print_r($_SESSION['ais']); exit;
$alumni_key = $_GET['alumni_key'];  
$sql_tracer->setAlumniProfileSessionData($alumni_key);     
//print "<pre>"; print_r($_SESSION['ais']['profile']); exit;
$_POST['courses'] = $sql->getCourseList();
$_POST['batches'] = $sql->getBatches();

require_once 'views/ui_profile.php';


?>