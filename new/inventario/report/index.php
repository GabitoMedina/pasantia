<?php
require 'fpdf/fpdf.php';
// include_path "fpdf/fpdf.php";
 // $pdf  = include 'headerproform.php';

$pdf = new FPDF('P', 'mm', 'legal');
$pdf -> AddPage();
$pdf-> SetFont('Arial','B',15);


// este nos permite centrar CON X O Y
$pdf-> SetX(50);
$pdf-> Cell(100, 10, 'Factura', 1, 1, 'C');
$pdf-> Cell(100, 10, 'Factura0', 1 , 'L', 1);
$pdf-> Cell(100, 10, 'Factura1',1,  1,'L');
$pdf-> Cell(100, 10, 'Factura2', 1, 1, 'L');
$pdf-> Cell(100, 10, 'Factura3', 1 ,  2,'L',0);
// aqui le sepaaramos como un salto de linea
$y = $pdf->GetY();
$pdf-> SetY($y+10);
$pdf-> Cell(100, 10, 'Dir:Wilson E8-140 y Av. 6 de Diciembre', 1, 'A', 1);
$pdf-> Cell(100, 10, 'RUC:2121222222', 1, 'L', 1);

$pdf-> Cell(100, 10, 'Telef:2421554', 1, 1,'L',1);
// esste permite crear o llenar letras oraciones mas extensas
$pdf-> Cell(100, 10, 'E-MAIL:soportedev@vps.com', 1, 2,'L', 0);
$pdf -> Output();




 ?>
