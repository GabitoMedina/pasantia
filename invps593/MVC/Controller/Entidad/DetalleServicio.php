<?php
include_once 'ModelSQL.php';

class DetalleServicio extends ModelSQL {
    public $tabla;
    public $Id;
    public $EquipEmpresa;
    public $Producto;
    public $Marca;
    public $Modelo;
    public $TipoRespaldo;
    public $Respaldo;
    public $Programa;
    public $Costo;
    public $Abono;
    public $Saldo;
    public $IdServicio;
    public $IdCaractEquipo;
    //public $Logo;

    function __construct() {
        $this->Id = 0;
        $this->tabla = "detalleservicio";
    }
}
