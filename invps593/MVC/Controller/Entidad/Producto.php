<?php

include_once 'ModelSQL.php';
class Producto extends ModelSQL {
    public $tabla;
    public $Id;
    public $Descripcion;
    public $Estado;
    public $Observacion;
    // 4-4-18
    // agregando nuevos campos a tabla producto
    public $Cantidad;
    public $Pice_in;
    public $Price_iva;
    public $Garantia_id;
    public $Usuario_id;
    public $Created_at;


    //public $Logo;

    function __construct() {
        $this->Id = 0;
        $this->Estado = "ACT";
        $this->tabla = "producto";
    }
}
