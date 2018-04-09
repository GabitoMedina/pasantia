<?php
include_once 'ModelSQL.php';

class CaractEquipo extends ModelSQL {
    public $tabla;
    public $Id;
    public $Nombre;
    public $Marca;
    public $Modelo;
    public $Serie;
    public $Cargador;
    public $Bateria;
    public $Accesorios;
    public $OtroCentro;
    //public $Logo;

    function __construct() {
        $this->Id = 0;
        $this->tabla = "caractequipo";
        $this->Cargador = "no";
        $this->Bateria = "no";
        $this->Accesorios = "no";
        $this->OtroCentro = "no";

    }
}
