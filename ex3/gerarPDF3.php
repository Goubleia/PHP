<?php
require('../fpdf181/fpdf.php');

$consumo = $_POST["consumo"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Consumo medio = '.$consumo.' Km/L');

$pdf->Output();
?>
