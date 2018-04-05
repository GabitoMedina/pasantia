<?php
require 'fpdf/fpdf.php';
// include_path "fpdf/fpdf.php";

// $pdf = new FPDF('P', 'mm', 'legal');
$pdf = new FPDF();
$pdf -> AddPage();
$pdf-> SetFont('Arial','B',15);


// este nos permite centrar CON X O Y
$pdf-> SetX(50);
$pdf-> Cell(100, 10, 'HolaMundo', 1, 1, 'C');
// aqui le sepaaramos como un salto de linea
$y = $pdf->GetY();
$pdf-> SetY($y+10);
$pdf-> Cell(100, 10, 'HolaMundo', 1, 1, 'C');
// esste permite crear o llenar letras oraciones mas extensas
$pdf-> MultiCell(100, 5, 'HolaMundo', 1, 'L', 0);
$pdf -> Output();




 ?>
