<?php
include('../modelo/conexion.php');
include('../modelo/clase_recurso.php');
$recurso = new recurso();

//REGISTRAR
if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {

    $recurso->setNombre($_POST['nombre_recurso']);
    $recurso->setTipo($_POST['tipo_recurso']);

    $resultado = $recurso->registrarRecurso($recurso->getNombre(), $recurso->getTipo(), 0);

    if (!$resultado) {
        echo "<script>alert('No se pudo registrar el Recurso')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modalRecursoR.php'>";
    } else {
        echo "<script>alert('Recurso registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRecursos.php'>";
    }
}

//MODIFICAR
if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    $recurso->setId($_POST['id']);
    $recurso->setNombre($_POST['nombre_recurso']);
    $recurso->setTipo($_POST['tipo_recurso']);

    $resultado = $recurso->modificarRecurso($recurso->getId(), $recurso->getNombre(), $recurso->getTipo());

    if (!$resultado) {
        echo "<script>alert('No se pudo modificar el Recurso')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRecursos.php'>";
    } else {
        echo "<script>alert('Recurso modificado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRecursos.php'>";
    }
}

//ELIMINAR
if (isset($_GET['txtID'])){
    $recurso->setId($_GET['txtID']);

    $resultado = $recurso->eliminarRecurso($recurso->getId());


    if (empty($resultado)) {
        echo "<script>alert('No se pudo eliminar el Recurso')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRecursos.php'>";
    } else {
        echo "<script>alert('Recurso eliminado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRecursos.php'>";
    }
}