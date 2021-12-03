<?php include ("conexion.php"); 
 $Nombre= $_GET['Nombre'];
 $query = "DELETE FROM  tienda WHERE Nombre = '$Nombre'";
  
    $resultado = mysqli_query($conexion, $query);
    if ($resultado){
        header ("location: index_tienda.php");
    }
    
?>