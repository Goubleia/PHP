<?php
require('../fpdf181/fpdf.php');

$Deposito = $_POST["Deposito"];
$Rendimento = $_POST["Rendimento"];
$Final = $_POST["Final"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Deposito R$ '.$Deposito);
$pdf->Ln();
$pdf->Cell(40,10,'Rendimento = R$ '.$Rendimento);
$pdf->Ln();
$pdf->Cell(40,10,'Final = R$ '.$Final);

$pdf->Output();
?>
