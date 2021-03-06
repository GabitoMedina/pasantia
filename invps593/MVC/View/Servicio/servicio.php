<!DOCTYPE html>
<section class="content-header">
    <h1>
        Servicios
    </h1>
    <hr class="style8">
</section>
<section class="content container-fluid">
    <div Listado>
        <div id="toolbar" class="btn-group">
            <button type="button" name="btn_add" class="btn btn-sm btn-success">
                <i class="glyphicon glyphicon-plus"></i> Agregar
            </button>
            <button type="button" name="btn_del" class="btn btn-sm btn-danger">
                <i class="glyphicon glyphicon-trash"></i> Eliminar
            </button>
        </div>
        <table
            class="table table-striped table-bordered table-hover "
            init
            data-toolbar="#toolbar"
            data-ajax="loadProforma"
            data-response-handler="responseHandlerSelect"
            >
            <thead>
                <tr>
                    <th data-field="state" data-checkbox="true" ></th>
                    <th data-field="codigo" class="col-md-1">N° Servicio</th>
                    <th data-field="fecha" class="col-md-2" data-formatter="defaultFecha">Fecha</th>
                    <!--<th data-field="ganancia" class="col-md-1">Ganancia</th>-->
                    <th data-field="nombres">Cliente</th>
                    <th data-field="productos">....</th>
                    <th data-field="accion" class="col-md-1" data-align="center" data-formatter="BtnAccion" data-events="defaultEvent" >Acción</th>
                </tr>
            </thead>
        </table>
    </div>

    <div Registro class="hidden">
        <form save action="servidor/sProforma.php" role="proforma">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="control-label">N° Servicio</label>
                        <input name="codigo" type="text" class="form-control" readonly value="0">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="control-label">Fecha</label>
                        <input tipo="fecha" fecha name="fecha" type="text" class="form-control" readonly required>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="" class="control-label">Cliente</label>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <button type="button" data-toggle="modal" data-target="#modal-find-cliente" class="btn btn-primary"><i class="fa fa-search"></i> </button>
                                    <button type="button" class="btn btn-success" data-url="MVC/View/Client/cliente.php" data-toggle="modal" data-target="#modal-new2"><i class="fa fa-plus"></i> </button>
                                </div>
                                <input type="text" nombres class="form-control" style="width: 70%;" readonly>
                                <input type="text" class="hidden" name="IdCliente" required>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="control-label">Equipo de Empresa</label>
                        <input tipo="text"  name="empresa" type="text" class="form-control" value="no">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="control-label">Producto</label>
                        <input tipo="text"  name="producto" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="control-label">Marca</label>
                        <input tipo="text"  name="marcaE" type="text" class="form-control" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="control-label">Modelo</label>
                        <input tipo="text"  name="modeloE" type="text" class="form-control" >
                    </div>
                </div>
           
                <!--
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="control-label">Producto</label>
                        <div tipo data-fn="loadGarantia" class="row">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary" data-url="MVC/View/Catalog/garantia.php" data-toggle="modal" data-target="#modal-new2"><i class="fa fa-plus"></i> </button>
                                    <button type="button" refresh class="btn btn-success"><i class="fa fa-refresh"></i> </button>
                                </div>
                                <select name="idgarantia" class="selectpicker form-control" data-width="70%"></select>
                            </div>
                        </div>

                    </div>
                </div>-->

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="control-label">Tipo de respaldo</label>
                        <input tipo="text"  name="trespaldo" type="text" class="form-control" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="control-label">Respaldo</label>
                        <input tipo="text"  name="respaldo" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="control-label">Programas</label>
                        <input tipo="text"  name="programas" type="text" class="form-control" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div toolbar id="toolbarDetalle" class="btn-group">
                    <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-new" data-tab="#detalleProforma">-->
                    <button addTable type="button" class="btn btn-success">
                        <i class="fa fa-plus"></i> Agregar
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-find">
                        <i class="fa fa-search"></i> Producto
                    </button>
                    <button type="button" delete_local class="btn btn-danger">
                        <i class="fa fa-trash"></i> Eliminar
                    </button>
                </div>
                <div class="col-md-12">
                    <table
                        id="detalleProforma"
                        data-toolbar="#toolbarDetalle"
                        data-use-row-attr-func="true"
                        data-reorderable-rows="true"

                        detalle>
                        <thead>
                            <tr>
                                <th data-field="state" data-checkbox="true"></th>
                                <th data-formatter="rowCount">N°</th>
                                <th data-field="producto" data-formatter="defaultDescripcion" data-events="event_imask" >Nombre</th>
                                <th data-field="cantidad" class="col-md-1" data-formatter="imask" data-events="event_imask" >Marca</th>
                                <!--<th data-field="precioProveedor" class="col-md-2"  >$ Proveedor</th>-->
                                <th data-field="precioProveedor" class="col-md-1" data-formatter="imask" data-events="event_imask"> Modelo</th>
                                <th data-field="precioComision" class="col-md-1" data-formatter="imask" data-events="event_imask" >N° Serie</th>
                                <!--<th data-field="accion" class="col-md-1" data-align="center" data-formatter="defaultAccion" data-events="editAccion" >Accion</th>-->
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right" style="display: flex; align-items: flex-end;flex-direction: column;">
                        <div class="form-inline">
                            <label class="control-label">Costo</label>
                            <input id="txtSubtotal" readonly type="text" class="form-control input-sm" style="text-align: right;">
                        </div>
                        <div class="form-inline">
                            <label class="control-label">Abono</label>
                            <input tipo="decimal" myDecimal type="text" name='ganancia' class="form-control input-sm" style="text-align: right;">
                        </div>
                        <div class="form-inline">
                            <label class="control-label">Saldo</label>
                            <input id="txtComision" readonly type="text" class="form-control input-sm" style="text-align: right;">
                        </div>
                    </div>
                    <div class="pull-left">
<!--                        <button type="button" id="ActualizarValores" class="btn btn-success"><i class="fa fa-refresh"></i> Refrescar</button>-->
                        <label id="contadorRegistro" class="control-label">Registros: 0</label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <button type="reset" class="btn btn-danger">
                            <i class="fa fa-reply"></i> Cancelar
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i> Guardar
                        </button>
                        <button type="button" id="ActualizarValores" class="btn btn-success">
                            <i class="fa fa-refresh"></i> Refrescar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="modal-new" class="modal fade"   >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Nuevo Items
                    </h4>
                </div>
                <div class="modal-body">
                    <form local data-tb="#detalleProforma" action="action">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nombre</label>
                                    <input name="nombre" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Marca</label>
                                    <input name="marca" type="text" class="form-control" required  style="text-align: right;" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Modelo</label>
                                    <input name="modelo" type="text" class="form-control" required  style="text-align: right;">
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">N° Serie</label>
                                    <input name="serie" type="text" class="form-control" required  style="text-align: right;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <button type="reset" class="btn btn-danger"> <i class="fa fa-reply"></i> Cancelar</button>
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> Añadir </button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <div id="modal-find" class="modal fade"   >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        Buscar Items
                    </h4>
                </div>
                <div class="modal-body">
                    <table
                        find
                        data-ajax="loadProducto"
                        >
                        <thead>
                            <tr>
                                <th data-field="descripcion">Descripcion</th>
                                <th data-formatter="AccSeleccion" data-events="event_find" class="col-md-1" data-align="center">Acción</th>
                            </tr>
                        </thead>
                    </table>


                </div>
            </div>
        </div>

    </div>

    <div id="modal-find-cliente" class="modal fade"   >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        Buscar Cliente
                    </h4>
                </div>
                <div class="modal-body">
                    <table
                        find
                        data-ajax="loadCliente"
                        >
                        <thead>
                            <tr>
                                <th data-field="nombres">Nombre</th>
                                <th data-field="identificacion">Identificación</th>
                                <th data-field="telefono">Teléfono</th>
                                <th data-formatter="AccSeleccion" data-events="event_find_cliente" class="col-md-1" data-align="center">Acción</th>
                            </tr>
                        </thead>
                    </table>


                </div>
            </div>
        </div>
    </div>
    <div id="modal-new2" class="modal fade"   >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nuevo Registro
                    </h4>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>


    <div id="modal-view-detalle" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        Detalle - Servicio
                    </h4>
                </div>
                <div class="modal-body">
                    <table
                        detalle
                        >
                        <thead>
                            <tr>
                                <th data-field="cantidad" class="col-md-1" data-align="center">Nombre</th>
                                <th data-field="producto">Producto</th>
                                <th data-field="precioProveedor" class="col-md-1" data-align="center" >$ Costo</th>
                                <th data-field="precioComision" class="col-md-1" data-align="center">$ Saldo</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="resource/View/Servicio/.js" type="text/javascript"></script>
