<?php

require_once 'fpdf_lib.php';

function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode('|',trim($line));
    return $data;
}

$json_file = file_get_contents('profile_cv.json');
$profile = json_decode($json_file, true);
//print "<pre>"; print_r($profile); exit;

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('P', 'A4');
$pdf->Image('../img/bisu.png',62,6,25);

$line_space = 6;
$line_indent = 25;
// Title     
$pdf->SetFont('Arial','',10); // Arial bold 15        
$pdf->Cell($line_indent); // Move to the right
$pdf->Cell(0,0,'Republic of the Philippines',0,0,'C');
$pdf->Ln($line_space); // Line break
$pdf->SetFont('Arial','B',12);       
$pdf->Cell($line_indent);
$pdf->Cell(0,0,'Bohol Island State University',0,0,'C');
$pdf->Ln($line_space); 
$pdf->SetFont('Arial','',10);    
$pdf->Cell($line_indent); 
$pdf->Cell(0,0,'Balilihan Campus',0,0,'C');
$pdf->Ln($line_space); 
$pdf->SetFont('Arial','',10);     
$pdf->Cell($line_indent); 
$pdf->Cell(0,0,'Magsija, Balilihan, Bohol',0,0,'C');
$pdf->Ln(10); 

$data = $pdf->LoadData('profile_cv.txt');
$pdf->Image('../'.$profile['PROFILE_PIC'],150,40,45);
$pdf->SetFont('Times','',12);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);     
$pdf->Cell(0,0,'PERSONAL PROFILE: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',11);     
$pdf->Cell(0,0,'Name: ',0,0);  
$pdf->Cell(-120,0,$profile['FIRST_NAME'].' '.$profile['LAST_NAME'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Address: ',0,1);
$pdf->Cell(-120,0,$profile['PERMANENT_ADDRESS'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Email Adress: ',0,1);
$pdf->Cell(-120,0,$profile['EMAIL'],0,1, 'R');
$pdf->Ln(7);  
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Contact No. : ',0,1);
$pdf->Cell(-120,0,$profile['PHONE'],0,1, 'R');
$pdf->Ln(7);  
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Civil Status: ',0,1);
$pdf->Cell(-120,0,$profile['CIVIL_STATUS'],0,1, 'R');
$pdf->Ln(7);  
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Sex: ',0,1);
$pdf->Cell(-120,0,$profile['SEX'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Birthday: ',0,1);
$pdf->Cell(-120,0,$profile['BIRTHDAY'],0,1, 'R');
$pdf->Ln(10); 


$pdf->SetFont('Arial','B',12);    
$pdf->Cell(0,0,'EDUCATIONAL BACKGROUND: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Educational Attainment: ',0,1);
$pdf->Cell(-120,0,$profile['COURSE'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Year Graduated: ',0,1);
$pdf->Cell(-120,0,$profile['BATCH'],0,1, 'R');
$pdf->Ln(7);  
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Professional Examination Passed: ',0,1);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);     
$pdf->Cell(0,0,'TRAININGS/ADVANCE STUDIES ATTENDED AFTER COLLEGE ',0,1);
$pdf->Ln(7);  
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Title of Training or Advance Study(Masteral): ',0,1);
$pdf->Cell(-120,0,$profile['EXAM_PASSED'],0,1, 'R');
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);     
$pdf->Cell(0,0,'JOB PLACEMENT PROFILE: ',0,1);
$pdf->Ln(7);
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Current Employment status : ',0,1);
$pdf->Cell(-120,0,$profile['EMPLOYMENT_STATUS'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Number of Job experiences: ',0,1);
$pdf->Cell(-120,0,$profile['JOB_EXPERIENCES'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);    
$pdf->Cell(0,0,'Place of work: ',0,1);
$pdf->Cell(-120,0,$profile['LOCAL_ABROAD'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);    
$pdf->Cell(0,0,'Name of Company/Institution: ',0,1);
$pdf->Cell(-120,0,$profile['NAME_COMPANY'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Address of the Company: ',0,1);
$pdf->Cell(-120,0,$profile['ADDRESS_COMPANY'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Contact number of the company: ',0,1);
$pdf->Cell(-120,0,$profile['CONTACT_COMPANY'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Position: ',0,1);
$pdf->Cell(-120,0,$profile['POSITION'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Job Level(first job): ',0,1);
$pdf->Cell(-120,0,$profile['LEVEL_FIRST_JOB'],0,1, 'R');
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Job Level(current job): ',0,1);
//$pdf->Cell(-120,0,$profile['LEVEL_CURRENT_JOB'],0,1, 'R');
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);      
$pdf->Cell(0,0,'AWARDS AND ACHIEVEMENTS: ',0,1);
$pdf->Ln(7);
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Name of award: ',0,1);
$pdf->Cell(-120,0,$profile['AWARD_DOC'],0,1, 'R');

$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Level of award: ',0,1);
$pdf->Cell(-120,0,$profile['LEVEL_AWARD'],0,1, 'R');
//$pdf->Cell(-120,0,$profile['LEVEL_AWARD_OTHERS'],0,1, 'R');
$pdf->Output();


?>