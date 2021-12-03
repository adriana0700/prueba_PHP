<?php
include ("conexion.php");
    //recibir datos y almacenarlos por variables
    $nombre_producto = $_POST["nombre_producto"];
    $sku = $_POST["sku"];
    $descripcion = $_POST["descripcion"];
    $valor = $_POST["valor"];
    $img= $_POST["imagen"];

    //consulta para insertar
    $query = "INSERT INTO  producto (Nombre, SKU, Descripcion, Valor, Imagen) VALUES ('$nombre_tienda', '$fecha')";
   
    //EJECUTAR CONSULTA
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado){
        die("query fallida");
    }
    header ("location: index_producto.php");
  

?>