<?php
require('../fpdf181/fpdf.php');

$result = $_POST["resultado"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

if($result == 'Numero invalido'){
    $pdf->Cell(40,10,$result.'!');
}
else{
    $pdf->Cell(40,10,'Numero por extenso = '.$result.'!');
}

$pdf->Output();
?>
