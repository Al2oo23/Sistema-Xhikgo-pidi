<?php
session_start();
include("../modelo/conexion.php");

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("SELECT * FROM historial WHERE id=?");
    $sentencia->execute([$txtID]);
    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC)[0];


    $preparado = $conexion->prepare("INSERT INTO  mantenimiento VALUES (?,?,?,?,?)");
    $preparado->execute([NULL, $resultado["unidad"], $resultado["incidente"], $resultado["fecha"], "pendiente"]);
    
    $sentencia = $conexion->prepare("DELETE FROM historial WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    echo "<script>alert('Registro de Mantenimiento Eliminado con Exito')</script>";
     echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMantenimiento.php'>";
  
}

?>