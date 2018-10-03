<?php
require('../fpdf181/fpdf.php');

$num = $_POST["numero"];
$result = $_POST["resultado"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Preco de custo = R$ '.$num);
$pdf->Ln();

if ($result) {
    $pdf->Cell(40,10,'O numero esta no intervalo entre 100 e 200!');
}
else{
    $pdf->Cell(40,10,'O numero nao esta no intervalo entre 100 e 200!');
}

$pdf->Output();
?>
