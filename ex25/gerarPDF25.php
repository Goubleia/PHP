<?php
require('../fpdf181/fpdf.php');

$prim = $_POST["primeiro"];
$seg = $_POST["segundo"];
$result = $_POST["comparacao"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Primeiro numero = '.$prim);
$pdf->Ln();
$pdf->Cell(40,10,'Segundo numero = '.$seg);
$pdf->Ln();

if ($result == "primeiro") {
    $pdf->Cell(40,10,'Os numeros sao diferentes!');
    $pdf->Ln();
    $pdf->Cell(40,10,'O primeiro eh maior do que o segundo!');
}
elseif ($result == "segundo") {
    $pdf->Cell(40,10,'Os numeros sao diferentes!');
    $pdf->Ln();
    $pdf->Cell(40,10,'O segundo eh maior do que o primeiro!');
}
else{
    $pdf->Cell(40,10,'Os numeros sao iguais!');
}

$pdf->Output();
?>