<?php include ("conexion.php"); ?>

<?php include ("includes/header.php"); ?>
<div>
    <div class="row">
        <div class= "col-md-9">
            <div>
                <form method="POST" action="save_producto.php">
                
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="nombre_producto">

                    <label for="Sku">SKU</label>
                    <input type="number" name="sku">

                    <label for="Descripcion">Descripcion</label>
                    <input type="text" name="descripcion">

                    <label for="Valor">Valor</label>
                    <input type="int" name="valor">

                    <label for="img">Imagen</label>
                    <input type="text" name="imagen">
                   
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
                        <th>SKU</th>
                        <th>Descripcion</th>
                        <th>Valor</th>
                        <th>Imagen</th>
            
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //consulta para insertar 
                    $query = "SELECT *FROM producto";
                    $resultado_producto = mysqli_query($conexion, $query);

                    //mysql_fetch_array — Recupera una fila de resultados como un array 
                    while ($row = mysqli_fetch_array($resultado_producto) ){?>
                        <tr>
                            <td><?php echo $row['Nombre']?></td>
                            <td><?php echo $row['SKU']?></td>
                            <td><?php echo $row['Descripcion']?></td>
                            <td><?php echo $row['Valor']?></td>
                            <td><?php echo $row['Imagen']?></td>
                            <td>
                                <a href="edit_producto.php?id=<?php echo $row['Nombre']?>">Editar</a>
                                <a href="delete_producto.php?id=<?php echo $row['Nombre']?>">Eliminar</a>
                            </td>
                    
                        </tr>
                     <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


<?php include ("includes/footer.php") ?>   
