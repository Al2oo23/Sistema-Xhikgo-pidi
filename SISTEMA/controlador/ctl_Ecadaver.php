<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_Ecadaver.php");
$cadaver = new cadaver();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){
    
    $cadaver->setCadaver($_POST['cadaver']);
 
    $datos = $cadaver->agregarCadaver($cadaver->getCadaver());

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar el Estado del Cadaver')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEcadaver.php'>"; 
    }else{
        echo "<script>alert('Estadp del Cadaver registrado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEcadaver.php'>"; 
    }

}

//Modificar
 if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

     $cadaver->setId($_POST['id']);
     $cadaver->setCadaver($_POST['cadaver']);
    
 
   $datos = $cadaver->modificarCadaver($cadaver->getId(), $cadaver->getCadaver());

  if(empty($datos)){
      echo "<script>alert('No se pudo Modificar el Estado del Cadaver')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEcadaver.php'>"; 
 }else{
        echo "<script>alert('Estado del Cadaver Modificado con exito ')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEcadaver.php'>"; 
    }
}

//ELIMINAR
if (isset($_GET['txtID'])){
    $cadaver->setId($_GET['txtID']);

    $resultado = $cadaver->eliminarCadaver($cadaver->getId());


    if (empty($resultado)) {
        echo "<script>alert('No se pudo eliminar el Estado del Cadaver ')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEcadaver.php'>";
    } else {
        echo "<script>alert('Estado del Cadaver eliminado con exito ')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEcadaver.php'>";
    } 
}