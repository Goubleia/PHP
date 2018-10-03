<?php
require('../fpdf181/fpdf.php');

$nome = $_POST["nome"];
$classificacao = $_POST["classificacao"];
$media = $_POST["media"];
$matricula = $_POST["matricula"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Aluno = '.$nome);
$pdf->Ln();
$pdf->Cell(40,10,'Classificacao = '.$classificacao);
$pdf->Ln();
$pdf->Cell(40,10,'Matricula = '.$matricula);
$pdf->Ln();
$pdf->Cell(40,10,'Media = '.$media);


$pdf->Output();
?>
