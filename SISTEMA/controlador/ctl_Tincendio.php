<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_Tincendio.php");
$incendio = new incendio();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){
    
    $incendio->setIncendio($_POST['incendio']);
 
    $datos = $incendio->agregarIncendio($incendio->getIncendio());

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar el Tipo de Incendio')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincendio.php'>"; 
    }else{
        echo "<script>alert('Tipo de Incendio registrado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincendio.php'>"; 
    }

}

//Modificar
 if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

     $incendio->setId($_POST['id']);
     $incendio->setIncendio($_POST['incendio']);
    
 
   $datos = $incendio->modificarIncendio($incendio->getId(), $incendio->getIncendio());

  if(empty($datos)){
      echo "<script>alert('No se pudo Modificar el Tipo de Incendio')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincendio.php'>"; 
 }else{
        echo "<script>alert('Tipo de Incendio Modificado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincendio.php'>"; 
    }
}

//ELIMINAR
if (isset($_GET['txtID'])){
    $incendio->setId($_GET['txtID']);

    $resultado = $incendio->eliminarIncendio($incendio->getId());


    if (empty($resultado)) {
        echo "<script>alert('No se pudo eliminar el Tipo de Incendio')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincendio.php'>";
    } else {
        echo "<script>alert('Tipo de Incendio eliminado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincendio.php'>";
    } 
}