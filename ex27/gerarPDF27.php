<?php
function gerarPDF($valor,$combustivel){
    require('../fpdf181/fpdf.php');

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);

    $pdf->Cell(40,10,'Valor do carro = R$ '.$valor);
    $pdf->Ln();
    $pdf->Cell(40,10,'Tipo de combustivel = '.$combustivel);

    $pdf->Output();
}
?>
