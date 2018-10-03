<?php
require('../fpdf181/fpdf.php');

$array = $_POST["array"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

for($i=0;$i<count($array);$i++){
    if($array[$i] >= 18){
        $pdf->Cell(40,10,$i.' - Maior de idade.');
    }
    else{
        $pdf->Cell(40,10,$i.' - Menor de idade.');
    }
    
    $pdf->Ln();
}

$pdf->Output();
?>
