<?php
require('../fpdf181/fpdf.php');

$nome = $_POST["nome"];
$salario = $_POST["salario"];
$salarioFinal = $_POST["salarioFinal"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Funcionario = '.$nome);
$pdf->Ln();
$pdf->Cell(40,10,'Salario fixo = R$ '.$salario);
$pdf->Ln();
$pdf->Cell(40,10,'Salario Final = R$ '.$salarioFinal);

$pdf->Output();
?>
