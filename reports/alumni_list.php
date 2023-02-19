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
$pdf->Cell(0,0,'List of Alumni',0,0,'C');
$pdf->Ln(6); // Line break
$pdf->SetFont('Arial','',12);    
$pdf->Cell(30);
$pdf->Cell(0,0,'Academic Year 2019-2020',0,0,'C');
$pdf->Ln(10); 
// Column headings

$header[0] = array('Course', 'Batch', 'Last name', 'First name');
$header[1] = array(" ", ' ', '', ' ');
$width = array(80, 30, 40, 60);
//$pdf->MultiCell(0, 0, string $header)
// Data loading
$data = $pdf->LoadData('alumni_list.txt');
$pdf->SetFont('Arial','',10);
$pdf->SetLeftMargin(40); 
$pdf->BasicTable($header, $data, $width);
$pdf->PrepareBy();

$pdf->Output();


?>