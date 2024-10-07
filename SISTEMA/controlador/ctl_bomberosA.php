<?php
session_start();
include("../modelo/conexion.php");

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("SELECT * FROM bomberos WHERE id=?");
    $sentencia->execute([$txtID]);
    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC)[0];


    $preparado = $conexion->prepare("INSERT INTO  bomberos VALUES (?,?,?,?)");
    $preparado->execute([NULL, $resultado["cedula"], $resultado["nombre"], $resultado["incidente"], $resultado]);
    

    echo "<script>alert('Mantenimiento Realizado con Exito')</script>";
     echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoHM.php'>";
  
}

?>