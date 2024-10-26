<?php
session_start();
include('../modelo/conexion.php');
include('../modelo/clase_criterio.php');
$criterio = new criterio();

//REGISTRAR
if (isset($_POST['agregar']) && $_POST['agregar'] == 'agregar') {

    $criterio->setTabla($_POST["tabla"]);
    $criterio->setOrden($_POST["orden"]);
    $criterio->setCampo($_POST["campo"]);
    $criterio->setCriterio($_POST["criterio"]);
    $criterio->setValor($_POST["valor"]);  

    $datos = $criterio->aplicarCriterio(
        $criterio->getTabla(),
        $criterio->getOrden(),
        $criterio->getCampo(),
        $criterio->getCriterio(),
        $criterio->getValor()
    );
   
    if (empty($datos)){
        echo "<script>alert('Criterio Fallido')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoUsuario.php'>";
    } else {
        echo "<script>alert('Criterio Aplicado!')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoUsuario.php'>";
    }
}
