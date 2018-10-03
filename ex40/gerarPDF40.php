<?php
require('../fpdf181/fpdf.php');

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$categoria = $_POST["categoria"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Nome = '.$nome);
$pdf->Ln();
$pdf->Cell(40,10,'Idade = '.$idade);
$pdf->Ln();
$pdf->Cell(40,10,'Categoria = '.$categoria);

$pdf->Output();
?>
