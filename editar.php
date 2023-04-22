<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "mood/header.php";
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM ordenes WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();


}

?>
<?php  ?>
	<div class="col-xs-12">
		<h1>Editar orden de compra No.<?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="codigo">Código de barras:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

			<label for="articulo">Descripción:</label>
			<textarea required id="articulo" name="articulo" cols="30" rows="5" class="form-control"><?php echo $producto->articulo ?></textarea>


			<label for="precioCompra">Precio de compra:</label>
			<input value="<?php echo $producto->precioCompra ?>" class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

			<label for="existencia">Cantidad:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
			<br><br><input class="btn btn-success" type="submit" value="Guardar">
			<a class="btn btn-danger" href="./index.php">Cancelar</a>
		</form>
	</div>
<?php include_once "mood/footer.php" ?>
