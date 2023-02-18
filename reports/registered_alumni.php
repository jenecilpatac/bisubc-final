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
$pdf->Cell(0,0,'Registered Alumni',0,0,'C');

$pdf->Ln(5); // Line break

// Column headings
$header = array("Name", 'Address', 'Email', 'Status', 'Name of Company', 'Position', 'Awards');
$width = array(45, 45, 40, 25, 40, 35, 50);
//$pdf->MultiCell(0, 0, string $header)
// Data loading
$data = $pdf->LoadData('registered_alumni.txt');
$pdf->SetFont('Arial','',10);
$pdf->BasicTable($header, $data, $width);
//$pdf->MultiCell(0, 0, string $data)

$pdf->PrepareBy();

$pdf->Output();


?>