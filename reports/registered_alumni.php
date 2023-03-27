<?php

require_once 'fpdf_lib.php';

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4');
$pdf->HeaderLogo();
$pdf->VisionMission();
$pdf->SetFont('Times','',12);

$pdf->SetFont('Arial','B',12);  // Arial bold 15        
$pdf->Cell(30); // Move to the right
$pdf->Cell(0,0,'Registered Alumni',0,0,'C');
$pdf->Ln(6); // Line break
$pdf->SetFont('Arial','',12);    
$pdf->Cell(25);
$pdf->Cell(0,0,'Academic Year '.$_GET['batch'],0,0,'C');
$pdf->Ln(8); // Line break
$pdf->SetFont('Arial','',12);    
$pdf->Cell(25);
$pdf->Cell(0,0,$_GET['course'],0,0,'C');
$pdf->Ln(5); 

$pdf->Ln(5); // Line break

// Column headings
$header = array();
$header[0] = array("Name", 'Email', 'Status', 'Name of Company', 'Position', 'Awards');
$header[1] = array(" ",' ', ' ', ' ', ' ', ' ');
$width = array(50, 60, 25, 40, 43, 50);
//$pdf->MultiCell(0, 0, string $header)
// Data loading
$data = $pdf->LoadData('registered_alumni.txt');
$pdf->SetFont('Arial','',10);
$pdf->SetLeftMargin(15); 
$pdf->BasicTable($header, $data, $width);
//$pdf->MultiCell(0, 0, string $data)

$pdf->PrepareBy();

$pdf->AddPage('P', 'A4');
$pdf->Image('../img/bisu.png',60,6,25);

$line_space = 6;
$line_indent = 25;
// Title     
$pdf->SetFont('Arial','',12); // Arial bold 15        
//$pdf->Cell($line_indent); // Move to the right
$pdf->Cell(0,1,'Republic of the Philippines',0,0,'C');
$pdf->Ln($line_space); // Line break
$pdf->SetFont('Arial','B',14);       
//$pdf->Cell($line_indent);
$pdf->Cell(0,0,'Bohol Island State University',0,0,'C');
$pdf->Ln($line_space); 
$pdf->SetFont('Arial','',12);    
//$pdf->Cell($line_indent); 
$pdf->Cell(0,0,'Balilihan Campus',0,0,'C');
$pdf->Ln($line_space); 
$pdf->SetFont('Arial','',12);     
//$pdf->Cell($line_indent); 
$pdf->Cell(0,0,'Magsija, Balilihan, Bohol',0,0,'C');
$pdf->Ln(8);
$pdf->SetFont('Arial','',8); 
$pdf->SetLeftMargin(20);    
        //$pdf->Cell(0,0, ',0,0,'L');
        $pdf->Ln(3);
        $pdf->SetFont('Arial','',8);     
        $pdf->Cell(0,0,'Vision: A premier Science and Technology university for the formation of world class and virtuous human resource for sustainable ',0,0,'L');
        $pdf->Ln(3);
        $pdf->SetFont('Arial','',8);     
        $pdf->Cell(0,0,'development of Bohol and the country.',0,0,'L');
        $pdf->Ln(3);
        $pdf->SetFont('Arial','',8);     
        $pdf->Cell(0,0,'Mission: BISU is committed to provide quality higher education in the arts and sciences, as well as in the professional and  ',0,0,'L');
        $pdf->Ln(3);
        $pdf->SetFont('Arial','',8);     
        $pdf->Cell(0,0,'technological fields; undertake research and development and extension services for the sustainable development of Bohol and the country.',0,0,'L');
        $pdf->Line(18,52, 212-20,52);
        $pdf->Ln(15);
$pdf->SetFont('Times','',12);
$pdf->SetFont('Arial','B',12);  // Arial bold 15        
$pdf->Cell(8); // Move to the right
$pdf->Cell(0,0,'AWARDS AND ACHIEVEMENTS',0,0,'C');

$json_file = file_get_contents('profile_cv.json');
$profile = json_decode($json_file, true);
$pdf->Image('../'.$profile['AWARD_DOC_FILE'],30,70,35);
$pdf->SetFont('Times','',12);
$pdf->Ln(10);

$pdf->Output();


?>