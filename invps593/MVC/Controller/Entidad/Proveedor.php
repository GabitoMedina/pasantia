<?php

include_once 'ModelSQL.php';
class Proveedor extends ModelSQL {
    public $tabla;
    public $Id;
    public $Nombres;
    public $TipoIdentificacion;
    public $Identificacion;
    public $Empresa;
    public $Telefono;
    public $Celular;
    public $Email;
    public $Direccion;
    public $Estado;
    //public $Logo;

    function __construct() {
        $this->Id = 0;
        $this->Estado = 'ACT';
        $this->tabla = "proveedor";
    }
}
