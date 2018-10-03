<?php
require('../fpdf181/fpdf.php');

$Custo = $_POST["Custo"];
$Percentual = $_POST["Percentual"];
$Venda = $_POST["Venda"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Preco de custo = R$ '.$Custo);
$pdf->Ln();
$pdf->Cell(40,10,'Percentual = '.$Percentual.'%');
$pdf->Ln();
$pdf->Cell(40,10,'Venda = R$ '.$Venda);

$pdf->Output();
?>
