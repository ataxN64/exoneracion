<?php include_once "mood/header.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="codigo">Código de barras:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

		<label for="articulo">Descripción:</label>
		<textarea required id="articulo" name="articulo" cols="30" rows="5" class="form-control"></textarea>


		<label for="precioCompra">Precio de compra:</label>
		<input class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

		<label for="existencia">Cantidad:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-success" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "mood/footer.php" ?>