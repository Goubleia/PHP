<?php
require('../fpdf181/fpdf.php');

$Compra = $_POST["Compra"];
$Prestacoes = $_POST["Prestacoes"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Compra = R$ '.$Compra);
$pdf->Ln();
$pdf->Cell(40,10,'Prestacoes = R$ '.$Prestacoes);

$pdf->Output();
?>
