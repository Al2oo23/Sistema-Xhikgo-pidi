<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_Taviso.php");
$aviso = new aviso();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){
    
    $aviso->setAviso($_POST['aviso']);
 
    $datos = $aviso->agregarAviso($aviso->getAviso());

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar el Tipo de Aviso')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTaviso.php'>"; 
    }else{
        echo "<script>alert('Tipo de Aviso registrado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTaviso.php'>"; 
    }

}

//Modificar
if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

    $aviso->setId($_POST['id']);
    $aviso->setAviso($_POST['aviso']);
    
 
    $datos = $aviso->modificarAviso($aviso->getId(), $aviso->getAviso());

    if(empty($datos)){
        echo "<script>alert('No se pudo Modificar el Tipo de Aviso')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTaviso.php'>"; 
    }else{
        echo "<script>alert('Tipo de Aviso Modificado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTaviso.php'>"; 
    }
}

//ELIMINAR
if (isset($_GET['txtID'])){
    $aviso->setId($_GET['txtID']);

    $resultado = $aviso->eliminarAviso($aviso->getId());


    if (empty($resultado)) {
        echo "<script>alert('No se pudo eliminar el Tipo de Aviso')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTaviso.php'>";
    } else {
        echo "<script>alert('Tipo de Aviso eliminado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTaviso.php'>";
    } 
}