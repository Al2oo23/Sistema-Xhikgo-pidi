<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_vehiculo.php");
$vehiculo = new Vehiculo();

if(isset($_POST['registrar']) && $_POST['registrar'] == "registrar"){
    
    $vehiculo->setNiv($_POST['niv']);
    $vehiculo->setTipo($_POST['tipo']);
    $vehiculo->setUnidad($_POST['unidad']);
    $vehiculo->setPropiedad($_POST['propiedad']);
    $vehiculo->setMarca($_POST['marca']);
    $vehiculo->setModelo($_POST['modelo']);
    $vehiculo->setCarburante($_POST['carburante']);
    $vehiculo->setSeguro($_POST['seguro']);
    $vehiculo->setPropietario($_POST['propietario']);
 
    $datos = $vehiculo->registrarVehiculo(
    $vehiculo->getNiv(),
    $vehiculo->getTipo(),
    $vehiculo->getUnidad(),
    $vehiculo->getPropiedad(),
    $vehiculo->getMarca(),
    $vehiculo->getModelo(),
    $vehiculo->getCarburante(),
    $vehiculo->getSeguro(),
    $vehiculo->getPropietario()
    );

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar el Vehiculo')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVehiculo.php'>"; 
    }else{
        echo "<script>alert('Vehiculo registrado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVehiculo.php'>"; 
    }
}

// MODIFICAR VEHICULO ---------------------------------------------------

if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
    
    $vehiculo->setNiv($_POST['niv']);
    $vehiculo->setTipo($_POST['tipo']);
    $vehiculo->setUnidad($_POST['unidad']);
    $vehiculo->setPropiedad($_POST['propiedad']);
    $vehiculo->setMarca($_POST['marca']);
    $vehiculo->setModelo($_POST['modelo']);
    $vehiculo->setCarburante($_POST['carburante']);
    $vehiculo->setSeguro($_POST['seguro']);
    $vehiculo->setPropietario($_POST['propietario']);
 
    $datos = $vehiculo->modificarVehiculo(
    $vehiculo->getNiv(),
    $vehiculo->getTipo(),
    $vehiculo->getUnidad(),
    $vehiculo->getPropiedad(),
    $vehiculo->getMarca(),
    $vehiculo->getModelo(),
    $vehiculo->getCarburante(),
    $vehiculo->getSeguro(),
    $vehiculo->getPropietario()
    );

    if(empty($datos)){
        echo "<script>alert('No se pudo modificar el Vehiculo')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVehiculo.php'>"; 
    }else{
        echo "<script>alert('Vehiculo modificado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVehiculo.php'>"; 
    }
}

//ELIMINAR VEHICULO ---------------------------------------
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM vehiculo WHERE niv = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    echo "<script>alert('Vehiculo Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVehiculo.php'>"; 
}
