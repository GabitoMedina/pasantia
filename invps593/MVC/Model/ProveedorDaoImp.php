<!-- <?php

include_once SITE_ROOT . '/MVC/Controller/C_MySQL.php';
include_once SITE_ROOT . '/MVC/Controller/Entidad/Proveedor.php';

class ProveedorDaoImp {

    public static function save($proveedor) {
        $conn = (new C_MySQL())->open();
        $sql = "";
        if ($proveedor->Id == 0) {
            $sql = $proveedor->Insert();
        } else {
            $sql = $proveedor->Update();
        }
        if ($conn->query($sql)) {
            if ($proveedor->Id == 0) {
                $proveedor->Id = $conn->insert_id;
            }
        }
        $conn->close();
    }

    public static function get($idProveedor) {
        $conn = (new C_MySQL())->open();
        $sql = "select SQL_CALC_FOUND_ROWS * from proveedor where id = $idProveedor ;";

        $proveedor = C_MySQL::returnListAsoc($conn, $sql)[0];
        $conn->close();
        return $proveedor;
    }


    public static function _list($params, &$count) {
        $conn = (new C_MySQL())->open();
        $banderapag = ($params["top"] > 0 ) ? "limit " . $params['top'] . " offset " . $params['pag'] : "";
        $where = ($params["buscar"] != NULL) ? " and nombres like '%" . $params["buscar"] . "%' or identificacion like '%" . $params["buscar"] . "%' " : "";
        //where estado = 'ACT'
        $sql = "select SQL_CALC_FOUND_ROWS * from cliente where estado = 'ACT' $where  $banderapag ;";

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

} -->
