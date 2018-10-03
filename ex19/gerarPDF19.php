<?php
require('../fpdf181/fpdf.php');

$nomes = $_POST["nomes"];
$sexos = $_POST["sexos"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

for($i=0;$i<count($nomes);$i++){
    $pdf->Cell(40,10,'Pessoa '.$i.' :');
    $pdf->Cell(40,10,'Nome = '.$nomes[$i]);
    $pdf->Cell(40,10,'Sexo = '.$sexos[$i]);
    $pdf->Ln();
}

$pdf->Output();
?>
