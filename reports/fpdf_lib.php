<?php

require_once '../fpdf/fpdf.php';

class PDF extends FPDF
{

    // Page header
    function HeaderLogo()
    {
        // Logo
        $this->Image('../img/bisu.png',90,6,25);

        $line_space = 6;
        $line_indent = 25;
        // Title     
        $this->SetFont('Arial','',12); // Arial bold 15        
        $this->Cell($line_indent); // Move to the right
        $this->Cell(0,0,'Republic of the Philippines',0,0,'C');
        $this->Ln($line_space); // Line break
        $this->SetFont('Arial','B',14);       
        $this->Cell($line_indent);
        $this->Cell(0,0,'Bohol Island State University',0,0,'C');
        $this->Ln($line_space); 
        $this->SetFont('Arial','',12);    
        $this->Cell($line_indent); 
        $this->Cell(0,0,'Balilihan Campus',0,0,'C');
        $this->Ln($line_space); 
        $this->SetFont('Arial','',12);     
        $this->Cell($line_indent); 
        $this->Cell(0,0,'Magsija, Balilihan, Bohol',0,0,'C');
        
        $this->Ln(20);
    }

    // Page header
    function PrepareBy()
    {        
        $this->Ln(15); // Line break
        $this->SetFont('Arial','B',12); // Arial bold 15     
        $this->Cell(0,0,'Prepared By:',0,1);

        $line_space = 5;
        $this->Ln(8); 
        $this->SetFont('Arial','',12);   
        $this->Cell(0,10,'Signature',0,0);  
        $this->Ln($line_space); 
        $this->Cell(0,10,'Printed Name',0,0);
        $this->SetFont('Arial','B',12); // Arial bold 15     
        $this->Cell(-150,10,'JOCELYN P. LUMACTUD',0,0,'R');
        $this->Cell(100);
        $this->Cell(1,10,'JEAN F. NEBREA',0,0,'R');
        $this->SetFont('Arial','',12); // Arial bold 15     
        $this->Ln($line_space); 
        $this->Cell(0,10,'Designation',0,0); 
        $this->Cell(-145,10,'Chair, Student Affirs & Services',0,0,'R');
        $this->Cell(93);
        $this->Cell(1,10,'Campus Director',0,0,'R');
        $this->SetFont('Arial','B',12); // Arial bold 15  

        $this->Ln(15); 
        $this->SetFont('Arial','B',12); // Arial bold 15     
        $this->Cell(0,0,'HIGHER EDUCATION PROGRAM',0,1);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

    // Load data
    function LoadData($file)
    {
        // Read file lines
        $lines = file($file);
        $data = array();
        foreach($lines as $line)
            $data[] = explode('|',trim($line));
        return $data;
    }

    // Simple table
    function BasicTable($header, $data)
    {
        // Header
        foreach($header as $col)
            $this->Cell(70,7,$col,1,0,'C');
        $this->Ln();
        // Data
        foreach($data as $row)
        {
            foreach($row as $col)
                $this->Cell(70,6,$col,1);
            $this->Ln();
        }
    }

}

?>
