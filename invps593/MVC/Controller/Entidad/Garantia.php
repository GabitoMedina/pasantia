<?php

include_once 'ModelSQL.php';
class Garantia extends ModelSQL {
    public $tabla;
    public $Id;
    public $Descripcion;
    public $Estado;

    function __construct() {
        $this->Id = 0;
        $this->Estado = 'ACT';
        $this->tabla = "garantia";
    }
}
