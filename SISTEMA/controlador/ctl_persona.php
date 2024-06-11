<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_persona.php");
$persona = new Persona();

if(isset($_POST['registrar']) && $_POST['registrar'] == "registrar"){
    
    $persona->setCedula($_POST['cedula']);
    $persona->setNombre($_POST['nombre']);
    $persona->setEdad($_POST['edad']);
    $persona->setCorreo($_POST['correo']);
    $persona->setTelefono($_POST['telefono']);
    $persona->setDireccion($_POST['direccion']);
    $persona->setGenero($_POST['genero']);
    $persona->setTpersona($_POST['tipo_persona']);
    $persona->setCargo($_POST['cargo']);
    $persona->setSeccion($_POST['seccion']);
    $persona->setEstacion($_POST['estacion']);
 
    $datos = $persona->registrarPersona(
        $persona->getCedula(), 
        $persona->getNombre(),
        $persona->getEdad(),
        $persona->getCorreo(),
        $persona->getTelefono(),
        $persona->getDireccion(),
        $persona->getGenero(),
        $persona->getTpersona(),
        $persona->getCargo(),
        $persona->getSeccion(),
        $persona->getEstacion()
    );

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar a la Persona')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoPersona.php'>"; 
    }else{
        echo "<script>alert('Persona registrada con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoPersona.php'>"; 
    }
}

if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

    $persona->setCedula($_POST['cedula']);
    $persona->setNombre($_POST['nombre']);
    $persona->setEdad($_POST['edad']);
    $persona->setCorreo($_POST['correo']);
    $persona->setTelefono($_POST['telefono']);
    $persona->setDireccion($_POST['direccion']);
    $persona->setGenero($_POST['genero']);
    $persona->setTpersona($_POST['tipo_persona']);
    $persona->setCargo($_POST['cargo']);
    $persona->setSeccion($_POST['seccion']);
    $persona->setEstacion($_POST['estacion']);
    
 
    $datos = $persona->modificarPersona(
        $persona->getCedula(), 
        $persona->getNombre(),
        $persona->getEdad(),
        $persona->getCorreo(),
        $persona->getTelefono(),
        $persona->getDireccion(),
        $persona->getGenero(),
        $persona->getTpersona(),
        $persona->getCargo(),
        $persona->getSeccion(),
        $persona->getEstacion()
    );

    if(empty($datos)){
        echo "<script>alert('No se pudo Modificar a la Persona')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoPersona.php'>"; 
    }else{
        echo "<script>alert('Persona Modificada con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoPersona.php'>"; 
    }
}

// ELIMINAR

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM persona WHERE cedula = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    echo "<script>alert('Persona Eliminada con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoPersona.php'>"; 
}
?>

