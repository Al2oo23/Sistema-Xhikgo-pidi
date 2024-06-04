<?php
include('../modelo/conexion.php');
include('../modelo/clase_Tpersona.php');
$Tpersona = new Tpersona();

//REGISTRAR
if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {
    $Tpersona->setTipo($_POST['tipo']);
    $Tpersona->setDescripcion($_POST['descripcion']);

    $resultado = $Tpersona->registrarTpersona($Tpersona->getTipo(), $Tpersona->getDescripcion());

    if (!$resultado) {
        echo "<script>alert('No se pudo registrar el Tipo de Persona')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modalTpersonaR.php'>";
    } else {
        echo "<script>alert('Tipo de Persona registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>";
    }
}


//MODIFICAR
if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    $Tpersona->setId($_POST['id']);
    $Tpersona->setTipo($_POST['tipo_persona']);
    $Tpersona->setDescripcion($_POST['descripcion']);

    $resultado = $Tpersona->modificarTpersona($Tpersona->getId(), $Tpersona->getTipo(), $Tpersona->getDescripcion());

    if (!$resultado) {
        echo "<script>alert('No se pudo modificar el Tipo de Persona')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modalTpersonaM.php'>";
    } else {
        echo "<script>alert('Tipo de Persona modificada con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>";
    }
}

//ELIMINAR
if (isset($_GET['txtID'])){
    $Tpersona->setId($_GET['txtID']);

    $resultado = $Tpersona->eliminarTpersona($Tpersona->getId());


    if (empty($resultado)) {
        echo "<script>alert('No se pudo eliminar el Tipo de Persona')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>";
    } else {
        echo "<script>alert('Tipo de Persona eliminada con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>";
    }
}
