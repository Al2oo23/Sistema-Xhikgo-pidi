<?php
session_start();
include('../modelo/conexion.php');
include('../modelo/clase_usuario.php');
$usuario = new usuario();

//REGISTRAR
if (isset($_POST['agregar']) && $_POST['agregar'] == 'agregar') {

    $usuario->setCedula($_SESSION["datosUsuarioR"]["cedula"]);
    $usuario->setNombre($_SESSION["datosUsuarioR"]["nombre"]);
    $usuario->setClave($_SESSION["datosUsuarioR"]["clave"]);
    $usuario->setPregunta($_POST["pregunta"]);
    $usuario->setRespuesta($_POST["respuesta"]);



    $resultado = $usuario->agregarUsuario($usuario->getCedula(), $usuario->getNombre(), $usuario->getClave(), "A",$usuario->getPregunta(), $usuario->getRespuesta());

    if (empty($resultado)){
        echo "<script>alert('Registro Fallido')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoUsuario.php'>";
    } else {
        echo "<script>alert('Registro Exitoso!')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoUsuario.php'>";
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
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modal/modalTpersonaM.php'>";
    } else {
        echo "<script>alert('Tipo de Persona modificada con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>";
    }
}

//ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM tipo_persona WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    echo "<script>alert('Tipo de Persona Eliminada con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>"; 
}
