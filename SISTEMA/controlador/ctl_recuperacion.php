<?php
session_start();
include('../modelo/conexion.php');
include('../modelo/clase_recuperacion.php');
$recuperacion = new recuperacion();

//REGISTRAR
if (isset($_POST['buscar']) && $_POST['buscar'] == 'buscar') {

    $recuperacion->setCedula($_POST['cedula']);

    $resultado = $recuperacion->recuperacion($recuperacion->getCedula());

    if (!$resultado) {
        echo "<script>alert('No se pudo encontrar la cedula')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../index.php'>";
    } else {
        $_SESSION['recuperacion'] = $resultado;
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/cedula2.php'>";
    }
}

if (isset($_POST['consultar']) && $_POST['consultar'] == 'consultar') {
    
    if($_SESSION['recuperacion']['respuesta'] == $_POST['respuesta']){
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/cedula3.php'>";
    } else {
        echo "<script>alert('Respuesta Incorrecta')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../index.php'>";
    }
}

if (isset($_POST['actualizar']) && $_POST['actualizar'] == 'actualizar') {
    
    $recuperacion->setCedula($_SESSION['recuperacion']['cedula']);
    $recuperacion->setClave($_POST['clave']);

    $resultado = $recuperacion->nuevaClave($recuperacion->getCedula(),$recuperacion->getClave());

    if (!$resultado) {
        echo "<script>alert('No se pudo actualizar la clave')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../index.php'>";
    } else {
        echo "<script>alert('Clave Actualizada correctamente')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../index.php'>";
    }
}