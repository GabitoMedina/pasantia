<?php
include 'plantilla.php'
require 'fpfp181/fpdf.php';

class PDF extends fpdf
{
  function Header()
  {
    $this->Image('img/iconproform.png', 5, 5, 30);
    $this->SetFont ('Arial','B',15);

    $this->Cell(30);
    $this->Cell(120,10, 'Reporte',0,0,'C');
    $this->Ln(20);

  }

  function Footer()
  {
    $this->SetY(-15);
    $this->SetFont ('Arial','I', 8);
    $this->Cell(0,10.'Pag'$this->PageNo().'/{nb}',0,1,'C');

    $pdf->AddPage();
    $pdf->Output();


  }



}



 ?>
