<?php
require('../fpdf181/fpdf.php');

$A1 = $_POST["A1"];
$B1 = $_POST["B1"];
$trocadoA = $_POST["trocadoA"];
$trocadoB = $_POST["trocadoB"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Anterior A = '.$A1);
$pdf->Ln();
$pdf->Cell(40,10,'Anterior B = '.$B1);
$pdf->Ln();
$pdf->Cell(40,10,'Depois A = '.$trocadoA);
$pdf->Ln();
$pdf->Cell(40,10,'Depois B = '.$trocadoB);

$pdf->Output();
?>
