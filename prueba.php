<?php

require('util/system/conexionMySql.php');
include("util/system/funciones.php");

$conexion = new DBManager();
$conexion->DBConectar();
$datos = $conexion->DBConsulta("

    select * from sys_parametros;

");
print_r($datos);
?>