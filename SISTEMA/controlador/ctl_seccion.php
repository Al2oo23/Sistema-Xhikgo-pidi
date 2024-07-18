<?php
include('../modelo/conexion.php');
include('../modelo/clase_seccion.php');
$seccion = new seccion();

//REGISTRAR
if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {

    $seccion->setNumero($_POST['numero_seccion']);

    $resultado = $seccion->registrarSeccion($seccion->getNumero());

    if (!$resultado) {
        echo "<script>alert('No se pudo registrar la Seccion')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modalSeccionR.php'>";
    } else {
        echo "<script>alert('Seccion registrada con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSeccion.php'>";
    }
}


if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

    $seccion->setId($_POST['id']);
    $seccion->setNumero($_POST['numero']);
    
 
    $datos = $seccion->modificarSeccion($seccion->getId(), $seccion->getNumero());
    if(empty($datos)){
        echo "<script>alert('No se pudo Modificar la Sección')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSeccion.php'>"; 
    }else{
        echo "<script>alert('Sección Modificada con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSeccion.php'>"; 
    } 
}

//ELIMINAR
if (isset($_GET['txtID'])){
    $seccion->setId($_GET['txtID']);

    $resultado = $seccion->eliminarSeccion($seccion->getId());


    if (empty($resultado)) {
        echo "<script>alert('No se pudo eliminar la Seccion')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSeccion.php'>";
    } else {
        echo "<script>alert('Seccion eliminada con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSeccion.php'>";
    } 
}

