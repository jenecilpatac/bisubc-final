<?php

require_once 'models/db_connect.php';

class SQL_Tracer extends DB_Connect {

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
        $table['table_data'] = array();

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

}

?>