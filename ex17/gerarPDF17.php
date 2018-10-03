<?php
require('../fpdf181/fpdf.php');

$quant = $_POST["quantidade"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Dentre 80 numeros, '.$quant.' estao entre o intervalo de 10 e 150.');

$pdf->Output();
?>
