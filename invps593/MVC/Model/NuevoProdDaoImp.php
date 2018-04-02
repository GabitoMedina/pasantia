<?php

include_once SITE_ROOT . '/MVC/Controller/C_MySQL.php';
include_once SITE_ROOT . '/MVC/Controller/Entidad/NuevoPoduct.php';

class ProductoDaoImp {

    public static function save($nuevoprod) {
        $conn = (new C_MySQL())->open();
        $sql = "";
        if ($nuevoprod->Id == 0) {
            $sql = $nuevoprod->Insert();
        } else {
            $sql = $nuevoprod->Update();
        }
        if ($conn->query($sql)) {
            if ($nuevoprod->Id == 0) {
                $nuevoprod->Id = $conn->insert_id;
            }
        }
        $conn->close();
    }

    public static function _list($params, &$count) {
        $conn = (new C_MySQL())->open();
        $banderapag = ($params["top"] > 0 ) ? "limit " . $params['top'] . " offset " . $params['pag'] : "";
        $where = ($params["buscar"] != NULL) ? " and descripcion like '%" . $params["buscar"] . "%'" : "";

        //where estado = 'ACT'
        $sql = "select SQL_CALC_FOUND_ROWS * from producto where estado = 'ACT' $where $banderapag ;";

        $list = C_MySQL::returnListAsoc($conn, $sql);
        $count = C_MySQL::row_count($conn);
        $conn->close();
        return $list;
    }

    public function delete($value) {
        $conn = (new C_MySQL())->open();
        $sql = $value->Update_Delete();
        $conn->query($sql);
        $conn->close();
    }

}
