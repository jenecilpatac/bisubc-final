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

$pdf->Ln(); // Line break

// Column headings
$header = array('Name', 'Address', 'Email', 'Status', 'Name of Company', 'Position', 'Awards');
$pdf->MultiCell(0 w, 0 h, string $header [0 border ['C' align [false fill]]])
// Data loading
$data = $pdf->LoadData('registered_alumni.txt');
$pdf->SetFont('Arial','',12);
$pdf->BasicTable($header,$data);
$pdf->MultiCell(0 w, 0 h, string $data [0 border ['C' align [false fill]]])

$pdf->PrepareBy();

$pdf->Output();


?>