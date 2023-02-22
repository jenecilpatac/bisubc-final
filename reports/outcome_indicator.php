<?php

require_once 'fpdf_lib.php';

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4');
$pdf->HeaderLogo();
$pdf->SetFont('Times','',12);

$pdf->SetFont('Arial','B',12);  // Arial bold 15        
$pdf->Cell(25); // Move to the right
$pdf->Cell(0,0,'Outcome Indicator',0,0,'C');
$pdf->Ln(6); // Line break
$pdf->SetFont('Arial','',12);    
$pdf->Cell(25);
$pdf->Cell(0,0,'Academic Year '.$_GET['batch'],0,0,'C');
$pdf->Ln(8); // Line break
$pdf->SetFont('Arial','',12);    
$pdf->Cell(25);
$pdf->Cell(0,0,$_GET['course'],0,0,'C');
$pdf->Ln(10); 

// Column headings
$header[0] = array('Name of Graduates','Status','Company Name/Business Type','Supporting Documents');
$header[1] = array(" ", ' ', ' ', ' ');
$width = array(60, 60, 60, 60);
//$pdf->MultiCell(0, 0, string $header)
// Data loading
$data = $pdf->LoadData('outcome_indicator.txt');
$pdf->SetFont('Arial','',10);
$pdf->SetLeftMargin(30); 
$pdf->BasicTable($header, $data, $width);

// Column headings
$header[0] = array('Total Number of Graduates','Employed','Unemployed','Not Tracked');
$header[1] = array(" ", ' ', ' ', ' ');
$width = array(60, 60, 60, 60);
//$pdf->MultiCell(0, 0, string $header)

$pdf->Ln(10);
// Data loading
$data = $pdf->LoadData('outcome_indicator_summary.txt');
$pdf->SetFont('Arial','',10);
$pdf->SetLeftMargin(30); 
$pdf->BasicTable($header, $data, $width);
//$pdf->MultiCell(0, 0, string $data)
$pdf->PrepareBy();

$pdf->Output();

?>