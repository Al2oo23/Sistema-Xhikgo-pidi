<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_respaldo.php");
$respaldo = new Respaldo();

$respaldo-> crearRespaldo ();

   
            echo "<script>alert('Respaldo Exitoso')</script>";
            echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/inicio.php'>";



?>