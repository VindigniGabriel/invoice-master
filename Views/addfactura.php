<?php 

$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

if (empty($descripcion[0])||empty($cantidad[0])||empty($precio[0])) {
	echo "si";
}else{
	$total = $cantidad[0] * $precio[0];
	echo $total; 
}

 ?>