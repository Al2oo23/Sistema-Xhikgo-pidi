<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_aseguradora.php");
$aseguradora = new Aseguradora();

if(isset($_POST['registrar']) && $_POST['registrar'] == "registrar"){
    
    $aseguradora->setNombre($_POST['nombre']);
    $aseguradora->setTipo($_POST['tipo_aseguradora']);

    $datos = $aseguradora->registrarAseguradora($aseguradora->getNombre(), $aseguradora->getTipo());

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar la Aseguradora')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAseguradora.php'>"; 
    }else{
        echo "<script>alert('Aseguradora registrada con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAseguradora.php'>"; 
    }
}

if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

    $aseguradora->setId($_POST['id']);
    $aseguradora->setNombre($_POST['nombre']);
    $aseguradora->setTipo($_POST['tipo_aseguradora']);
 
    $datos = $aseguradora->modificarAseguradora($aseguradora->getId(), $aseguradora->getNombre(), $aseguradora->getTipo());

    if(empty($datos)){
        echo "<script>alert('No se pudo Modificar la Aseguradora')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAseguradora.php'>"; 
    }else{
        echo "<script>alert('Aseguradora Modificada con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAseguradora.php'>"; 
    }
}

// ELIMINAR

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM seguro WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

     // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó  Aseguradora con el txtID ".$txtID." el día ",$fecha]);

    echo "<script>alert('Aseguradora Eliminada con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAseguradora.php'>"; 
}
?>