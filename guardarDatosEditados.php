<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["codigo"]) || 
	!isset($_POST["articulo"]) || 
	!isset($_POST["precioCompra"]) || 
	!isset($_POST["existencia"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$articulo = $_POST["articulo"];
$precioCompra = $_POST["precioCompra"];
$existencia = $_POST["existencia"];

$sentencia = $base_de_datos->prepare("UPDATE ordenes SET codigo = ?, articulo = ?, precioCompra = ?,  existencia = ? WHERE id = ?;");
$resultado = $sentencia->execute([$codigo, $articulo, $precioCompra, $existencia, $id]);

if($resultado === TRUE){
	header("Location: ./index.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>