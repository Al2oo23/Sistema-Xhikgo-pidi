<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_Tvehiculo.php");
$vehiculo = new vehiculo();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){
    
    $vehiculo->setVehiculo($_POST['vehiculo']);
 
    $datos = $vehiculo->agregarVehiculo($vehiculo->getVehiculo());

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar el Tipo de Vehiculo')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTvehiculo.php'>"; 
    }else{
        echo "<script>alert('Tipo de Vehiculo registrado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTvehiculo.php'>"; 
    }

}

//Modificar
 if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

     $vehiculo->setId($_POST['id']);
     $vehiculo->setVehiculo($_POST['vehiculo']);
    
 
   $datos = $vehiculo->modificarVehiculo($vehiculo->getId(), $vehiculo->getVehiculo());

  if(empty($datos)){
      echo "<script>alert('No se pudo Modificar el Tipo de Vehiculo')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTvehiculo.php'>"; 
 }else{
        echo "<script>alert('Tipo de Vehiculo Modificado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTvehiculo.php'>"; 
    }
}

//ELIMINAR
if (isset($_GET['txtID'])){
    $vehiculo->setId($_GET['txtID']);

    $resultado = $vehiculo->eliminarVehiculo($vehiculo->getId());


    if (empty($resultado)) {
        echo "<script>alert('No se pudo eliminar el Tipo de Vehiculo')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTvehiculo.php'>";
    } else {
        echo "<script>alert('Tipo de Vehiculo eliminado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTvehiculo.php'>";
    } 
}