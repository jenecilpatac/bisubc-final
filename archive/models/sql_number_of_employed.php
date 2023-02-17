<?php

class SQL_Number_of_Employed {

    function __construct() {

    }
    public function getNumber_of_Employed() {
        $data = array(
            array(
                'Course' => 'BS Information Technology',
                'No._of_Graduates' => '49',
                'Hired_within_2years' => '27',
                'Percentage' => '55'
               
            ),array(
                'Course' => 'BS Computer Science',
                'No._of_Graduates' => '14',
                'Hired_within_2years' => '4',
                'Percentage' => '28'
    
            ),array(
                'Course' => 'BS Electrical Technology',
                'No._of_Graduates' => '45',
                'Hired_within_2years' => '43',
                'Percentage' => '22'
    
            ),array(
                'Course' => 'BS Electronics Technology',
                'No._of_Graduates' => '49',
                'Hired_within_2years' => '27',
                'Percentage' => '55'
    
            ),array(
                'Course' => 'BS Food Preparation & Service Management',
                'No._of_Graduates' => '23',
                'Hired_within_2years' => '15',
                'Percentage' => '33'
            )
        );
        
        return $data;
    }
}

?>