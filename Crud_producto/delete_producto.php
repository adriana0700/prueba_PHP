<?php include ("conexion.php"); 
 $Nombre= $_GET['Nombre'];
 $query = "DELETE FROM  producto WHERE Nombre = '$Nombre'";
  
    $resultado = mysqli_query($conexion, $query);
    if ($resultado){
        header ("location: index_producto.php");
    }
    
?>