<?php
include ("conexion.php");
$nombre_producto = $_POST["nombre_producto"];
$sku = $_POST["sku"];
$descripcion = $_POST["descripcion"];
$valor = $_POST["valor"];
$img= $_POST["imagen"];

$query = "UPDATE producto SET Nombre=$nombre_producto, SKU=$sku, Descripcion=$descripcion, 
Valor=$valor, Imagen=$imagne, WHERE Nombre = '$Nombre'";
$resultado = mysqli_query($conexion, $query);
    if ($resultado){
        header ("location: index_producto.php");
    }
?>