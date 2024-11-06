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

    // Inicializar $cedula con el valor de la sesión
    $cedula = $_SESSION["datosUsuarioR"]["cedula"];

    $sql = "SELECT * FROM persona WHERE cedula = :cedula";
    $preparado = $conexion->prepare($sql);
    $preparado->bindParam(':cedula', $cedula, PDO::PARAM_STR);
    $preparado->execute();

    $persona = $preparado->fetch(PDO::FETCH_ASSOC);

    if(!$persona){
        echo "<script>alert('Esta persona no está registrada')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoUsuario.php'>";
    }else{
        $resultado = $usuario->agregarUsuario($usuario->getCedula(), $usuario->getNombre(), $usuario->getClave(), "A",$usuario->getPregunta(), $usuario->getRespuesta());
        if (empty($resultado)){
            echo "<script>alert('Registro Fallido')</script>";
            echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoUsuario.php'>";
        } else {
            echo "<script>alert('Registro Exitoso!')</script>";
            echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoUsuario.php'>";
        }
    }
}


//MODIFICAR
if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    $usuario->setCedula($_POST["cedula"]);
    $usuario->setNombre($_POST["nombre"]);
    $usuario->setClave($_POST["clave"]);
    $usuario->setEstado($_POST["estado"]);
    $usuario->setPregunta($_POST["pregunta"]);
    $usuario->setRespuesta($_POST["respuesta"]);

    $resultado = $usuario->modificarUsuario($usuario->getNombre(), $usuario->getClave(), $usuario->getEstado(), $usuario->getPregunta(), $usuario->getRespuesta(), $usuario->getCedula());

    if (empty($resultado)){
        echo "<script>alert('No se pudo modificar el Usuario')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modal/catalogoUsuario.php'>";
    } else {

        
        echo "<script>alert('Usuario modificado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoUsuario.php'>";
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
