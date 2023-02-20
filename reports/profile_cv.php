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
$pdf->Image('../img/blank-profile-picture.png',150,40,45);
$pdf->SetFont('Times','',12);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);     
$pdf->Cell(0,0,'PERSONAL PROFILE: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',11);     
$pdf->Cell(0,0,'Name: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Adress: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Birthplace: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Email Adress: ',0,1);
$pdf->Ln(7);  
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Contact No. : ',0,1);
$pdf->Ln(7);  
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Civil Status: ',0,1);
$pdf->Ln(7);  
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Sex: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Birthday: ',0,1);
$pdf->Ln(10); 


$pdf->SetFont('Arial','B',12);    
$pdf->Cell(0,0,'EDUCATIONAL BACKGROUND: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Educational Attainment: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Year Graduated: ',0,1);
$pdf->Ln(7);  
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Professional Examination Passed: ',0,1);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);     
$pdf->Cell(0,0,'TRAININGS/ADVANCE STUDIES ATTENDED AFTER COLLEGE ',0,1);
$pdf->Ln(7);  
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Title of Training or Advance Study(Masteral): ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'What made you pursue advance studies: ',0,1);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);     
$pdf->Cell(0,0,'JOB PLACEMENT PROFILE: ',0,1);
$pdf->Ln(7);
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Current Employment status : ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Number of Job experiences: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);    
$pdf->Cell(0,0,'Place of work: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);    
$pdf->Cell(0,0,'Name of Company/Institution: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Address of the Company: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Contact number of the company: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);     
$pdf->Cell(0,0,'Position: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Job Level: ',0,1);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);      
$pdf->Cell(0,0,'AWARDS AND ACHIEVEMENTS: ',0,1);
$pdf->Ln(7);
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Name of award: ',0,1);
$pdf->Ln(7); 
$pdf->SetFont('Arial','',12);      
$pdf->Cell(0,0,'Level of award: ',0,1);




$pdf->Output();


?>