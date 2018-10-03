<?php
require('../fpdf181/fpdf.php');

$C = $_POST["C"];
$F = $_POST["F"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Temperatura em Celsius = '.$C.' C');
$pdf->Ln();
$pdf->Cell(40,10,'Temperatura em Fahrenheit = '.$F.' F');

$pdf->Output();
?>
