<?php

require_once 'models/db_connect.php';

class SQL_Tracker extends DB_Connect {

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

    public function __construct() 
    {
        Parent::__construct();

    }

    public function verifyAlumni($email, $fname, $lname) 
    {
        $sql = "
            SELECT *
            FROM alumni
            WHERE Email = '{$email}'
                AND First_Name = '{$fname}'
                AND Last_Name = '{$lname}'
        ";
        $results = $this->getDataFromTable($sql);
        if (empty($results)) {
            $results = array();
        }

        return $results;


    }

}

?>