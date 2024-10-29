<?php
session_start();
include('../modelo/conexion.php');
include('../modelo/clase_cargo.php');
$cargo = new Cargo();

//REGISTRAR
if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {

    $cargo->setNombre($_POST['nombre']);

    $resultado = $cargo->registrarCargo($cargo->getNombre());

    if (!$resultado) {
        echo "<script>alert('No se pudo registrar el cargo')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modalCargoR.php'>";
    } else {
        echo "<script>alert('Cargo registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoCargo.php'>";
    }
}

//MODIFICAR
if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    $cargo->setId($_POST['id']);
    $cargo->setNombre($_POST['nombre']);

    $resultado = $cargo->modificarCargo($cargo->getId(), $cargo->getNombre());

    if (!$resultado) {
        echo "<script>alert('No se pudo modificar la cargo')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoCargo.php'>";
    } else {
        echo "<script>alert('cargo modificada con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoCargo.php'>";
    }
}

// ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM cargo WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();


    echo "<script>alert('Cargo Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoCargo.php'>"; 
}