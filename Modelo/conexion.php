<?php

$servidor = "localhost";
$usuario = "sytpro_Santiago";
$contrasena = "Attenea2016-";
$baseDeDatos = "sytpro_cvypresupuesto";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $baseDeDatos);

if (!$conexion) {
    echo("Conexion fallida");
}else {
    echo("Bienvenido");
}
?>