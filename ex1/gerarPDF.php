<?php
require('../fpdf181/fpdf.php');

$soma = $_POST["soma"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Soma = '.$soma);

$pdf->Output();
?>
