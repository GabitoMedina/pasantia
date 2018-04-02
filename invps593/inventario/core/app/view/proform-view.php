<div class="row">
	<div class="col-md-12">
	<h1>Proforma Nº</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addproform" role="form">

      <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label">Cliente</label>
          <div class="col-lg-10">
          <?php
      $clients = PersonData::getClients();
          ?>
          <select name="client_id" class="form-control">
          <option value="">consumidor final</option>
          <?php foreach($clients as $client):?>
          	<option value="<?php echo $client->id;?>"><?php echo $client->name." ".$client->lastname;?></option>
          <?php endforeach;?>
          	</select>
          </div>
        </div>

        <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Producto</label>
            <div class="col-lg-10">
            <?php
        $product = ProductData::getProducts();
            ?>
            <select name="produc_id" class="form-control">
            <option value="">co</option>
            <?php foreach($products as $product):?>
            	<option value="<?php echo $product->id;?>"><?php echo $product->name;?></option>
            <?php endforeach;?>
            	</select>
            </div>
          </div>

			<div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Cedula o RUc*</label>
		    <div class="col-md-6">
		      <input type="text" name="identificacion" class="form-control" id="name" placeholder="Nombre">
		    </div>
		  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" required class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
	<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Empresa*</label>
    <div class="col-md-6">
      <input type="text" name="company" required class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="address1" class="form-control" required id="address1" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email1" class="form-control" id="email1" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="phone1" class="form-control" id="phone1" placeholder="Telefono">
    </div>
  </div>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">celular*</label>
		<div class="col-md-6">
			<input type="text" name="phone2" class="form-control" id="phone2" placeholder="Telefono">
		</div>
	</div>


  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Proveedor</button>
    </div>
  </div>
</form>
	</div>
</div>
