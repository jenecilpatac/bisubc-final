<?php

require_once 'fpdf_lib.php';

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4');
$pdf->HeaderLogo();
$pdf->SetFont('Times','',12);


$pdf->SetFont('Arial','B',12);  // Arial bold 15        
$pdf->Cell(30); // Move to the right
$pdf->Cell(0,0,'Number of Employed Graduates',0,0,'C');
$pdf->Ln(6); // Line break
$pdf->SetFont('Arial','',12);    
$pdf->Cell(30);
$pdf->Cell(0,0,'Academic Year 2019-2020',0,0,'C');
$pdf->Ln(10); 
// Column headings

$header[0] = array('Course', 'No. of Graduates', 'No. of Graduates hired', 'Percentage');
$header[1] = array(" ", ' ', 'w/ in 2 years after graduation', ' ');
$width = array(80, 30, 60, 60);
//$pdf->MultiCell(0, 0, string $header)
// Data loading
$data = $pdf->LoadData('employed_graduates.txt');
$pdf->SetFont('Arial','',10);
$pdf->SetLeftMargin(30); 
$pdf->BasicTable($header, $data, $width);

$pdf->PrepareBy();

$pdf->Output();


?>