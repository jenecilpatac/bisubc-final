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

}

?>