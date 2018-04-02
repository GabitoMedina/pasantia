<!DOCTYPE html>
<section class="content-header">
    <h1>
        Producto
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
            class="table table-striped table-bordered table-hover"
            init
            data-toolbar="#toolbar"
            data-ajax="loadProducto"
            data-response-handler="responseHandlerSelect"
            >
            <thead>
                <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="codigo">Codigo</th>
                    <th data-field="descripcion">Descripción</th>
                    <th data-field="observacion">Observación</th>
                    <th data-field="pvpin">PVP. Entrada</th>
                    <th data-field="pvpout">PVP. Salida</th>
                    <th data-field="pvpdist">PVP. Distribuidor</th>
                    <th data-field="estado" data-formatter="getEstado">Estado</th>
                    <th data-field="accion" class="col-md-1" data-align="center" data-formatter="defaultBtnAccion" data-events="defaultEvent" >Acción</th>
                </tr>
            </thead>
        </table>
    </div>


  

    <div Registro class="hidden">
        <form save action="servidor/sProducto.php" role="producto">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Codigo</label>
                        <input name="serie" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Descripción</label>
                        <input name="descripcion" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">PVP. Entrada</label>
                        <input name="pvpin" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">PVP. Salida</label>
                        <input name="pvpout" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Estado</label>
                        <select name="estado" class="form-control selectpicker" required>
                            <option value="ACT">Activo</option>
                            <option value="INA">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Observación</label>
                        <textarea class="form-control" name="observacion" cols="30" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">PVP. Distribuidor</label>
                        <input name="pvpdist" type="text" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <button type="reset" class="btn btn-danger">
                            <i class="fa fa-reply"></i> Cancelar
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i> Guardar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</section>

<script src="resource/View/Product/producto.js" type="text/javascript"></script>
