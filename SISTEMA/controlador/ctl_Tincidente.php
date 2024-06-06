<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_Tincidente.php");
$incidente = new incidente();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){
    
    $incidente->setIncidente($_POST['incidente']);
 
    $datos = $incidente->agregarIncidente($incidente->getIncidente());

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar el Tipo de Incidente')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincidente.php'>"; 
    }else{
        echo "<script>alert('Tipo de Incidente registrado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincidente.php'>"; 
    }

}

//Modificar
 if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

     $incidente->setId($_POST['id']);
     $incidente->setIncidente($_POST['incidente']);
    
 
   $datos = $incidente->modificarIncidente($incidente->getId(), $incidente->getIncidente());

  if(empty($datos)){
      echo "<script>alert('No se pudo Modificar el Tipo de Incidente')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincidente.php'>"; 
 }else{
        echo "<script>alert('Tipo de Incidente Modificado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincidente.php'>"; 
    }
}

//ELIMINAR
if (isset($_GET['txtID'])){
    $incidente->setId($_GET['txtID']);

    $resultado = $incidente->eliminarIncidente($incidente->getId());


    if (empty($resultado)) {
        echo "<script>alert('No se pudo eliminar el Tipo de Aviso')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincidente.php'>";
    } else {
        echo "<script>alert('Tipo de Aviso eliminado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincidente.php'>";
    } 
}