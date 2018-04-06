<!DOCTYPE html>
<section class="content-header">
    <h1>
        Abastecimiento de productos
    </h1>
    <hr class="style8">
</section>
<div class="row">
	<div class="col-md-12">
	<h1>Reabastecer Inventario</h1>
	<p><b>Buscar productoo por nombre o por codigo:</b></p>
		<form>
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" name="view" value="re">
				<input type="text" name="producto" class="form-control">
			</div>
			<div class="col-md-3">
			<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Buscar</button>
			</div>
		</div>
		</form>
	</div>

<?php if(isset($_GET["productooo"])):?>
	<?php
$productos = productoData::getLike($_GET["producto"]);
if(count($productos)>0){
	?>
<h3>Resultados de la Busqueda</h3>
<table class="table table-bordered table-hover">
	<thead>
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Unidad</th>
		<th>Precio unitario</th>
		<th>En inventario</th>
		<th>Cantidad</th>
		<th style="width:100px;"></th>
	</thead>
	<?php
$productos_in_cero=0;
	 foreach($productos as $producto):
$q= OperationData::getQYesF($producto->id);
	?>
		<form method="post" action="index.php?view=addtore">
	<tr class="<?php if($q<=$producto->inventary_min){ echo "danger"; }?>">
		<td style="width:80px;"><?php echo $producto->id; ?></td>
		<td><?php echo $producto->name; ?></td>
		<td><?php echo $producto->unit; ?></td>
		<td><b>$<?php echo $producto->price_in; ?></b></td>
		<td>
			<?php echo $q; ?>
		</td>
		<td>
		<input type="hidden" name="producto_id" value="<?php echo $producto->id; ?>">
		<input type="" class="form-control" required name="q" placeholder="Cantidad de productoo ..."></td>
		<td style="width:100px;">
		<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-refresh"></i> Agregar</button>
		</td>
	</tr>
	</form>
	<?php endforeach;?>
</table>

	<?php
}
?>
<br><hr>
<hr><br>
<?php else:
?>

<?php endif; ?>

<?php if(isset($_SESSION["errors"])):?>
<h2>Errores</h2>
<p></p>
<table class="table table-bordered table-hover">
<tr class="danger">
	<th>Codigo</th>
	<th>productoo</th>
	<th>Mensaje</th>
</tr>
<?php foreach ($_SESSION["errors"]  as $error):
$producto = productoData::getById($error["producto_id"]);
?>
<tr class="danger">
	<td><?php echo $producto->id; ?></td>
	<td><?php echo $producto->name; ?></td>
	<td><b><?php echo $error["message"]; ?></b></td>
</tr>

<?php endforeach; ?>
</table>
<?php
unset($_SESSION["errors"]);
 endif; ?>


<!--- Carrito de compras :) -->
<?php if(isset($_SESSION["reabastecer"])):
$total = 0;
?>
<h2>Lista de Reabastecimiento</h2>
<table class="table table-bordered table-hover">
<thead>
	<th style="width:30px;">Codigo</th>
	<th style="width:30px;">Cantidad</th>
	<th style="width:30px;">Unidad</th>
	<th>productoo</th>
	<th style="width:30px;">Precio Unitario</th>
	<th style="width:30px;">Precio Total</th>
	<th ></th>
</thead>
<?php foreach($_SESSION["reabastecer"] as $p):
$producto = productoData::getById($p["producto_id"]);
?>
<tr >
	<td><?php echo $producto->id; ?></td>
	<td ><?php echo $p["q"]; ?></td>
	<td><?php echo $producto->unit; ?></td>
	<td><?php echo $producto->name; ?></td>
	<td><b>$ <?php echo number_format($producto->price_in); ?></b></td>
	<td><b>$ <?php  $pt = $producto->price_in*$p["q"]; $total +=$pt; echo number_format($pt); ?></b></td>
	<td style="width:30px;"><a href="index.php?view=clearre&producto_id=<?php echo $producto->id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></td>
</tr>

<?php endforeach; ?>
</table>
<form method="post" class="form-horizontal" id="processsell" action="index.php?view=processre">
<h2>Resumen</h2>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Proveedor</label>
    <div class="col-lg-10">
    <?php
$clients = PersonData::getProviders();
    ?>
    <select name="client_id" class="form-control">
    <option value="">-- NINGUNO --</option>
    <?php foreach($clients as $client):?>
    	<option value="<?php echo $client->id;?>"><?php echo $client->name." ".$client->lastname;?></option>
    <?php endforeach;?>
    	</select>
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Efectivo</label>
    <div class="col-lg-10">
      <input type="text" name="money" required class="form-control" id="money" placeholder="Efectivo">
    </div>
  </div>
  <div class="row">
<div class="col-md-6 col-md-offset-6">
<table class="table table-bordered">
<tr>
	<td><p>Subtotal</p></td>
	<td><p><b>$ <?php echo number_format($total*.84); ?></b></p></td>
</tr>
<tr>
	<td><p>IVA</p></td>
	<td><p><b>$ <?php echo number_format($total*.16); ?></b></p></td>
</tr>
<tr>
	<td><p>Total</p></td>
	<td><p><b>$ <?php echo number_format($total); ?></b></p></td>
</tr>

</table>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
          <input name="is_oficial" type="hidden" value="1">
        </label>
      </div>
    </div>
  </div>
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
		<a href="index.php?view=clearre" class="btn btn-lg btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
        <button class="btn btn-lg btn-primary"><i class="fa fa-refresh"></i> Procesar Reabastecimiento</button>
        </label>
      </div>
    </div>
  </div>
</form>
<script>
	$("#processsell").submit(function(e){
		money = $("#money").val();
		if(money<<?php echo $total;?>){
			alert("No se puede efectuar la operacion");
			e.preventDefault();
		}else{
			go = confirm("Cambio: $"+(money-<?php echo $total;?>));
			if(go){}
				else{e.preventDefault();}
		}
	});
</script>
</div>
</div>

<br><br><br><br><br>
<?php endif; ?>

</div>
