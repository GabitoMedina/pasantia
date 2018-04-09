<?php

include_once 'ModelSQL.php';

class Servicio extends ModelSQL {
    public $tabla;
    public $Id;
    public $Codigo;
    public $Fecha;
    public $IdCliente;


    function __construct() {
        $this->Id = 0;
        //$this->Codigo = "prof-";
        $this->tabla = "servicio";
    }
}