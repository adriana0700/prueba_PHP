<?php
include ("conexion.php");
$nombre_tienda = $_POST["nombre_tienda"];
$fecha = $_POST["fecha"];

$query = "UPDATE tienda SET Nombre=$nombre_tienda, FechaDeApertura=$fecha, WHERE Nombre = '$Nombre'";
$resultado = mysqli_query($conexion, $query);
    if ($resultado){
        header ("location: index_tienda.php");
    }
?>