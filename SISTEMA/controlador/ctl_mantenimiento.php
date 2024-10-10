<?php
session_start();
include("../modelo/conexion.php");

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';
    $sql="delete from unidad_asignada where id=?"; 
    $preparado= $conexion->prepare($sql);
    $preparado->execute([$txtID]);

   echo "<script>alert('Mantenimiento Realizado con Exito')</script>";
     echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMantenimiento.php'>"; 
  
}

?>