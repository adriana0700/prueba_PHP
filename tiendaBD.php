<?php

require_once 'conexion.php';

$nombre = $_POST['nombre_tienda'];
$fecha = $_POST['fecha'];

$sql = 'INSERT INTO tienda(Nombre, FechaDeApertura) VALUES($nombre, $fecha)';

$respuesta = ejecutarConsulta($sql);

//($respuesta) ? echo 'El resgistro se inserto correctamente' : 'El registro no se pudo insertar';
if($respuesta){
    echo 'El registro se inserto correctamente';
}else{
    'El registro no se pudo insertar';
}

