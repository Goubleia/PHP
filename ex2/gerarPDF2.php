<?php
require('../fpdf181/fpdf.php');

$soma = $_POST["soma"];
$sub = $_POST["sub"];
$mult = $_POST["mult"];
$div = $_POST["div"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Soma = '.$soma);
$pdf->Ln();
$pdf->Cell(40,10,'Sutracao = '.$sub);
$pdf->Ln();
$pdf->Cell(40,10,'Multiplicacao = '.$mult);
$pdf->Ln();
$pdf->Cell(40,10,'Divisao = '.$div);

$pdf->Output();
?>
