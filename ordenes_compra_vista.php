<?php 
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM ordenes;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
include_once "mood/header.php" 
?>

<!--inicio de la vista-->
	<div class="col-xs-12">
		<center><h1><b>Ordenes de compra</b></h1></center>
		
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<!--<th>ID</th>-->
					<th>Código</th>
					<th>Articulo</th>
					<th>Precio de compra</th>
					<th>Cantidad</th>
					<th></th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<!--<td><?php echo $producto->id ?></td>-->
					<td><?php echo $producto->codigo ?></td>
					<td><?php echo $producto->articulo ?></td>
					<td>Q <?php echo $producto->precioCompra ?></td>
					<td><?php echo $producto->existencia ?></td>
					<td>
						<a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a>
						<a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a>


					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div style="text-align: right;">
			<a class="btn btn-success" href="./formulario.php"><i class="fa fa-plus"></i> Agregar Nueva orden de compra</a>
		</div>
	</div>
<?php include_once "mood/footer.php" ?>