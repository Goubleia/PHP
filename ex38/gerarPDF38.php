<?php
require('../fpdf181/fpdf.php');

$media = $_POST["media"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Media aluno = '.$media);

$pdf->Output();
?>
