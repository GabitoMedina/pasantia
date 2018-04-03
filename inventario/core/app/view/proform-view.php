<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
	<header>
		<div class="btn-group  pull-right">

			<!-- <a href="" class="btn btn-default">IMPRIMIR</a> -->
			<input type="button" name="imprimir" value="Imprimir " onclick="window.print();">
		<div class="btn-group pull-right">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
				<li><a href="pdf/output.php?t=word" target="_blank">Word</a> </li>
				<!-- <a href="output.php?t=word" target="_blank">Word</a> -->
		    <li><a href="report/products-word.php">Word 2007 (.docx)</a></li>
		  </ul>
		</div>
		</div>
		<!-- <center><h1>CgvSoluciones Ecuador</h1></center> -->
		<img src="core/app/img/iconproform.png" alt="Descripción de esta maravillosa imagen " style="width:60px;height:70px;"align="left">
		<h1>    CgvSoluciones Ecuador</h1
		<h2>    @Cgvolucionesfusion</h2>
<hr style="border-color:black;">
	</header>
	<hr style="border-color:black;">
<!-- <hr style="width:75%;"> -->
	<!-- <section class="content-header">
	    <h1>
	        Proforma
	    </h1>
	    <hr class="style8">
	</section> -->
<!-- <section class="content-container-fluid">
<table>
	<th data-field="codigo" class="col-md-1">N° Proforma</th>
	 <th data-field="fecha" class="col-md-2" data-formatter="defaultFecha">Fecha</th>
</table>


</section> -->

<div class="row">
			<div class="col-md-12">

			<br>
				<form class="form-horizontal" method="post" enctype="multipart/form-data" id="addproduct" action="index.php?view=addproduct" role="form">
					<div class="form-group">
				    <label for="inputEmail1" class="col-lg-2 control-label">Proforma Nº</label>

				    <div class="col-md-6">
				      <input name="codigo" type="text" class="form-control" readonly value="0">
				    </div>
				  </div>
					<div class="form-group">
				    <label for="inputEmail1" class="col-lg-2 control-label">Fecha</label>

				    <div class="col-md-6">
				      <input name="codigo" type="text" class="form-control" readonly value="">
				    </div>
				  </div>
					<div class="form-group">
				    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
				    <div class="col-md-6">
				      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre del Producto">
				    </div>
				  </div>
					<!-- <h1>Proforma Nº</h1> -->
		  <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Imagen</label>
		    <div class="col-md-6">
		      <input type="file" name="image" id="image" placeholder="">
		    </div>
		  </div>

		  <!-- <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Codigo de Barras*</label>
		    <div class="col-md-6">
		      <input type="text" name="barcode" id="product_code" class="form-control" id="barcode" placeholder="Codigo de Barras del Producto">
		    </div>
		  </div> -->
		  <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
		    <div class="col-md-6">
		      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre del Producto">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Categoria</label>
		    <div class="col-md-6">
		    <select name="category_id" class="form-control">
		    <option value="">-- NINGUNA --</option>
		    <?php foreach($categories as $category):?>
		      <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
		    <?php endforeach;?>
		      </select>    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
		    <div class="col-md-6">
		      <textarea name="description" class="form-control" id="description" placeholder="Descripcion del Producto"></textarea>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Precio de Entrada*</label>
		    <div class="col-md-6">
		      <input type="text" name="price_in" required class="form-control" id="price_in" placeholder="Precio de entrada">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Precio de Salida*</label>
		    <div class="col-md-6">
		      <input type="text" name="price_out" required class="form-control" id="price_out" placeholder="Precio de salida">
		    </div>
		  </div>
		  <!-- <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Unidad*</label>
		    <div class="col-md-6">
		      <input type="text" name="unit" required class="form-control" id="unit" placeholder="Unidad del Producto">
		    </div>
		  </div> -->

		  <!-- <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Presentacion</label>
		    <div class="col-md-6">
		      <input type="text" name="presentation" class="form-control" id="inputEmail1" placeholder="Presentacion del Producto">
		    </div>
		  </div> -->
		  <!-- <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Minima en inventario:</label>
		    <div class="col-md-6">
		      <input type="text" name="inventary_min" class="form-control" id="inputEmail1" placeholder="Minima en Inventario (Default 10)">
		    </div>
		  </div> -->

		  <!-- <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Inventario inicial:</label>
		    <div class="col-md-6">
		      <input type="text" name="q" class="form-control" id="inputEmail1" placeholder="Inventario inicial">
		    </div>
		  </div> -->

		  <!-- <div class="form-group">
		    <div class="col-lg-offset-2 col-lg-10">
		      <button type="submit" class="btn btn-primary">Agregar Producto</button>
		    </div>
		  </div> -->
		</form>

			</div>
		</div>

</body>
<footer>
	<hr style="border-color:black;">
	<p><h5>Wilson E8-140 y Av. 6 de Diciembre</h5></p>
	<p>Telefon:(02)2547674</p>
	asesoria@vps593.com/administrador@vps.com
</footer>
</html>
