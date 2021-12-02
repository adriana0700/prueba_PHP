<?php

include 'global.php';
$conexion = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
// $conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);


if (mysqli_connect_errno()){
    echo 'fallo de conexion: %s\n', mysqli_connect_errno();

}else{
    echo 'conexion exitosa';
}



