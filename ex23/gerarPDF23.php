<?php
require('../fpdf181/fpdf.php');

$numeros = $_POST["numeros"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Numeros:');
$pdf->Ln();
for ($i=0; $i < count($numeros); $i++) { 
    $pdf->Cell(40,10, $numeros[$i]);
    $pdf->Ln();
}

$pdf->Output();
?>
