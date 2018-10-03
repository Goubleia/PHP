<?php
require('../fpdf181/fpdf.php');

$nome = $_POST["nome"];
$peso = $_POST["peso"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Nome = '.$nome);
$pdf->Ln();
$pdf->Cell(40,10,'Peso = '.$peso.' Kg');

$pdf->Output();
?>
