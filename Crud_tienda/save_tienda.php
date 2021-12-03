<?php
include ("conexion.php");
    //recibir datos y almacenarlos por variables
    $nombre_tienda = $_POST["nombre_tienda"];
    $fecha = $_POST["fecha"];
    //consulta para insertar
    $query = "INSERT INTO  tienda (Nombre, FechaDeApertura) VALUES ('$nombre_tienda', '$fecha')";
   
    //EJECUTAR CONSULTA
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado){
        die("query fallida");
    }
    header ("location: index_tienda.php");
  

?>