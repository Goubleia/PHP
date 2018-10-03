<?php
require('../fpdf181/fpdf.php');

$aluno = $_POST["aluno"];
$media = $_POST["media"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Aluno = '.$aluno);
$pdf->Ln();
$pdf->Cell(40,10,'Media = '.$media);

$pdf->Output();
?>
