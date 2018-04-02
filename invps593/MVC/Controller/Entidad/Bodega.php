<?php

include_once 'ModelSQL.php';
class Producto extends ModelSQL {
    public $tabla;
    public $Id;
    public $Descripcion;
    public $Estado;
    public $Observacion;
    public $Facura;
    public $Proveedor;
    public $Cantidad
    //public $Logo;

    function __construct() {
        $this->Id = 0;
        $this->Estado = "ACT";
        $this->tabla = "producto";
    }
}
