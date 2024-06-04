<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_lugar.php");
$lugar = new lugar();

if (isset($_POST['agregar']) && $_POST['agregar'] == "agregar") {

    $lugar->setMunicipio($_POST['municipio']);
    $lugar->setNombre($_POST['nombre']);
    $lugar->setDistancia($_POST['distancia']);

    $datos = $lugar->agregarLugar($lugar->getNombre(), $lugar->getMunicipio(), $lugar->getDistancia());

    if (empty($datos)) {
        echo "<script>alert('No se pudo registrar la lugar')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>";
    } else {
        echo "<script>alert('Lugar registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>";
    }
}

if (isset($_POST['modificar']) && $_POST['modificar'] == "modificar") {

    $lugar->setId($_POST['id']);
    $lugar->setMunicipio($_POST['municipio']);
    $lugar->setNombre($_POST['nombre']);
    $lugar->setDistancia($_POST['distancia']);

    $datos = $lugar->modificarLugar($lugar->getId(), $lugar->getNombre(), $lugar->getMunicipio(), $lugar->getDistancia());

    if (empty($datos)) {
        echo "<script>alert('No se pudo Modificar la lugar')</script>";
        //echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>"; 
    } else {
        echo "<script>alert('Lugar Modificado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>";
    }
}

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM lugar WHERE id = ?");

    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    echo "<script>alert('Lugar Eliminado con exito')</script>";
    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>";
}
