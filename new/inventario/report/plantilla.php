<?php
include 'plantilla.php';
require 'fpdf/fpdf.php';

class FPDF extends FPDF
{
  // function Header()
  // {
  //   $pdf->Image('img/iconproform.png', 5, 5, 30);
  //   $pdf->SetFont ('Arial','B',15);
  //
  //   $pdf->Cell(30);
  //   $pdf->Cell(120,10, 'Reporte',0,0,'C');
  //   // $pdf->Ln(20);
  //
  // }

  function Footer()
  {
    $pdf->SetY(-15);
    $pdf->SetFont ('Arial','I', 8);
    $pdf->Cell(0,10,'Pagina '.$pdf->PageNo().'/{nb}',0,0,'C');

    // $pdf->AddPage();
    // $pdf->Output();


  }



}
// Creación del objeto de la clase heredada
$pdf = new FPDF();
// $pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Aril', 'B', 20);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
$pdf->Output();
