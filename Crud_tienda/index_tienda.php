<?php include ("conexion.php"); ?>

<?php include ("includes/header.php"); ?>
<div>
    <div class="row">
        <div class= "col-md-9">
            <div>
                <form method="POST" action="save_tienda.php">
                    
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre_tienda">

                    <label for="fecha">Fecha Apertura</label>
                    <input type="date" name="fecha">
                    <button type="submit">Enviar</button>
                    <br>
                </form>
            </div>

        </div>
        <div >
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //consulta para insertar 
                    $query = "SELECT *FROM tienda";
                    $resultado_tienda = mysqli_query($conexion, $query);

                    //mysql_fetch_array — Recupera una fila de resultados como un array 
                    while ($row = mysqli_fetch_array($resultado_tienda) ){?>
                        <tr>

                            <td><?php echo $row['Nombre']?></td>
                            <td><?php echo $row['FechaDeApertura']?></td>
                            <td>
                                <a href="edit_tienda.php?id=<?php echo $row['Nombre']?>">Editar</a>
                                <a href="delete_tienda.php?id=<?php echo $row['Nombre']?>">Eliminar</a>
                            </td>
                        

                        </tr>
                     <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


<?php include ("includes/footer.php") ?>   
