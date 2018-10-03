<?php
require('../fpdf181/fpdf.php');

$Real = $_POST["Real"];
$Dolar = $_POST["Dolar"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Dolar = US$ '.$Dolar);
$pdf->Ln();
$pdf->Cell(40,10,'Real = R$ '.$Real);

$pdf->Output();
?>
