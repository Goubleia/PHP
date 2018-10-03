<?php
require('../fpdf181/fpdf.php');

$CustoCarro = $_POST["CustoCarro"];
$CustoFabrica = $_POST["CustoFabrica"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Custo de Fabrica = R$ '.$CustoFabrica);
$pdf->Ln();
$pdf->Cell(40,10,'Valor de Venda = R$ '.$CustoCarro);

$pdf->Output();
?>
