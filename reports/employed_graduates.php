<?php

require_once 'fpdf_lib.php';

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4');
$pdf->HeaderLogo();
$pdf->SetFont('Times','',12);

$pdf->Cell(0,10,'BOHOL ISLAND STATE UNIVERSITY - BALILIHAN CAMPUS',0,1);
$pdf->Cell(0,10,'Number of Employed Graduates by Campus',0,1);
$pdf->Cell(0,10,'ACADEMIC YEAR 2019-2020',0,1);

// Column headings
$header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');
// Data loading
$data = $pdf->LoadData('../fpdf/tutorial/countries.txt');
$pdf->SetFont('Arial','',14);
$pdf->BasicTable($header,$data);

$pdf->PrepareBy();

$pdf->Output();


?>