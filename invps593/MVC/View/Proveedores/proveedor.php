<!DOCTYPE html>
<section class="content-header">
    <h1>
        Proveedores
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
            data-ajax="loadProveedor"
            data-response-handler="responseHandlerSelect"
            >
            <thead>
                <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="nombres">Nombres</th>
                    <th data-field="identificacion">Identificación</th>
                    <th data-field="empresa">Empresa</th>
                    <th data-field="telefono">Teléfono</th>
                    <th data-field="celular">Celular</th>
                    <th data-field="email">Email</th>
                    <th data-field="direccion">Dirección</th>
                    <th data-field="accion" class="col-md-1" data-align="center" data-formatter="defaultBtnAccion" data-events="defaultEvent" >Acción</th>
                </tr>
            </thead>
        </table>
    </div>
    <div Registro class="hidden">
        <form save action="servidor/sProveedor.php" role="proveedor">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tipo Identificación</label>
                        <select name="tipoidentificacion" class="form-control selectpicker" required>
                            <option value="1">Cedúla</option>
                            <option value="2">RUC</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Identificación</label>
                        <input name="identificacion" type="text" class="form-control" maxlength="13" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Nombres</label>
                        <input name="nombres" type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="" class="control-label">Empresa</label>
                      <input name="nombres" type="text" class="form-control" required>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Teléfono</label>
                                <input name="telefono" type="text" class="form-control" maxlength="10">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Celular</label>
                                <input name="celular" type="text" class="form-control" maxlength="10">
                            </div>
                        </div>
                    </div>





                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input name="email" type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Dirección</label>
                        <textarea name="direccion" cols="30" class="form-control" rows="2"></textarea>
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

<script src="resource/View/Proveedores/proveedor.js" type="text/javascript"></script>
