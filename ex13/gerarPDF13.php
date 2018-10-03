<?php
require('../fpdf181/fpdf.php');

$result = $_POST["resultado"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

if($result){
    $pdf->Cell(40,10,'O numero eh maior do que 10!');
}
else{
    $pdf->Cell(40,10,'O numero nao eh maior do que 10!');
}

$pdf->Output();
?>
