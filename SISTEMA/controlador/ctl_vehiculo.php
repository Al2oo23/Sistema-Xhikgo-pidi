<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_vehiculo.php");
$vehiculo = new Vehiculo();

if(isset($_POST['registrar']) && $_POST['registrar'] == "registrar"){
    
    $vehiculo->setNiv($_POST['niv']);
    $vehiculo->setTipo($_POST['tipo']);
    $vehiculo->setUnidad($_POST['unidad']);
    $vehiculo->setMarca($_POST['marca']);
    $vehiculo->setModelo($_POST['modelo']);
    $vehiculo->setSerial($_POST['serial']);
    $vehiculo->setCilindrada($_POST['cilindrada']);
    $vehiculo->setCarburante($_POST['carburante']);
    $vehiculo->setSeguro($_POST['seguro']);
    $vehiculo->setPropietario($_POST['propietario']);
 
    $datos = $vehiculo->registrarVehiculo(
    $vehiculo->getNiv(),
    $vehiculo->getTipo(),
    $vehiculo->getUnidad(),
    $vehiculo->getMarca(),
    $vehiculo->getModelo(),
    $vehiculo->getSerial(),
    $vehiculo->getCilindrada(),
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
    $vehiculo->setMarca($_POST['marca']);
    $vehiculo->setModelo($_POST['modelo']);
    $vehiculo->setSerial($_POST['serial']);
    $vehiculo->setCilindrada($_POST['cilindrada']);
    $vehiculo->setCarburante($_POST['carburante']);
    $vehiculo->setSeguro($_POST['seguro']);
    $vehiculo->setPropietario($_POST['propietario']);
 
    $datos = $vehiculo->modificarVehiculo(
    $vehiculo->getNiv(),
    $vehiculo->getTipo(),
    $vehiculo->getUnidad(),
    $vehiculo->getMarca(),
    $vehiculo->getModelo(),
    $vehiculo->getSerial(),
    $vehiculo->getCilindrada(),
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

    
    // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó  Vehiculo txtID ".$txtID." el día ",$fecha]);

    echo "<script>alert('Vehiculo Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVehiculo.php'>"; 
}
