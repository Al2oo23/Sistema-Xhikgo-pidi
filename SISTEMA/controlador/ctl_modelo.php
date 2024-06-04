<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_modelo.php");
$modelo = new modelo();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){
    
    $modelo->setNombre($_POST['nombre']);
    $modelo->setMarca($_POST['marca']);

    $datos = $modelo->agregarModelo($modelo->getNombre(), $modelo->getMarca());

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar el Modelo')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>"; 
    }else{
        echo "<script>alert('Modelo registrado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>"; 
    }
}

if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

    $modelo->setId($_POST['id']);
    $modelo->setNombre($_POST['nombre']);
    $modelo->setMarca($_POST['marca']);
 
    
    $datos = $modelo->modificarModelo($modelo->getId(), $modelo->getNombre(), $modelo->getMarca());


    if(empty($datos)){
        echo "<script>alert('No se pudo Modificar el modelo')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>"; 
    }else{
        echo "<script>alert('Modelo Modificado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>"; 
    }
}

// ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM modelo WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    echo "<script>alert('Modelo Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>"; 
}
?>
