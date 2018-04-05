<?php

include 'plantilla.php';
require "conexion.php";
$query = "SELECT name FROM category";
$resultado = $mysqli->query($query);

$pdf = new PDF();
$pdf->AliasPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B', 12);

$pdf->Cell(70,6,'Nombre'1,0,'C',1);
// $pdf-Cell(100, 10, "hola Mundo")

$pdf->AddPage();

$pdf->Output();


 ?>
