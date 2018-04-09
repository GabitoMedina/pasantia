<?php
include_once SITE_ROOT . '/MVC/Controller/C_MySQL.php';
include_once SITE_ROOT . '/MVC/Controller/Entidad/Servicio.php';
class ProformaDaoImp {
    public static function save($servicio) {
        $conn = (new C_MySQL())->open();
        $sql = "";
        if ($servicio->Id == 0) {
            $sql = $servicio->Insert();
        } else {
            $sql = $servicio->Update();
        }
        if ($conn->query($sql)) {
            if ($servicio->Id == 0) {
                $servicio->Id = $conn->insert_id;
            }
        }
        $conn->close();
    }
    public static function _list($params, &$count) {
        $conn = (new C_MySQL())->open();
        $banderapag = ($params["top"] > 0 ) ? "limit " . $params['top'] . " offset " . $params['pag'] : "";
        //where estado = 'ACT'
//        $sql = "select SQL_CALC_FOUND_ROWS * from viewProforma order by id desc $banderapag ;";
        $sql = "select SQL_CALC_FOUND_ROWS `p`.`id` AS `id`,`p`.`codigo` AS `codigo`,`p`.`fecha` AS `fecha`,`p`.`idcliente` AS `idcliente`,
                count(dtp.id) as caractequipo
                from ((`servicio` `p` 
                join `cliente` `c` on((`c`.`id` = `p`.`idcliente`))) 
                join detalleservicio dtp on dtp.idservicio = p.id
                join caractequipo prod on prod.id = dtp.idcaractequipo
                where prod.descripcion like  CONCAT('%','". $params["buscar"] ."','%')  
                GROUP BY p.id
                ORDER BY p.fecha desc $banderapag ";

        $list = C_MySQL::returnListAsoc($conn, $sql);
        $count = C_MySQL::row_count($conn);
        $conn->close();
        return $list;
    }
    public static function saveDetalle($detalle){
        $conn = (new C_MySQL())->open();
        $sql = "INSERT INTO DETALLESERVICIO(proforma,producto,cantidad,precioProveedor,precioComision) values('". $detalle["proforma"] ."','". $detalle["producto"] ."','". $detalle["cantidad"] ."','". $detalle["precioProveedor"] ."','". $detalle["precioComision"] ."')";
        $conn->query($sql);
        $conn->close();
    }
    
    
}
