<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_municipio.php");
$municipio = new municipio();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){
    
    $municipio->setNombre($_POST['nombre']);
    $municipio->setCodigo($_POST['codigo']);

    $datos = $municipio->agregarMunicipio($municipio->getNombre(), $municipio->getCodigo());

    if(!$datos){
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMunicipio.php'>"; 
    }else{
        echo "<script>alert('Municipio registrado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMunicipio.php'>"; 
    }
}

if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

    $municipio->setId($_POST['id']);
    $municipio->setNombre($_POST['nombre']);
    $municipio->setCodigo($_POST['codigo']);
 
    $datos = $municipio->modificarMunicipio($municipio->getId(), $municipio->getNombre(), $municipio->getCodigo());

    if(!$datos){
        echo "<script>alert('No se pudo Modificar el municipio')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMunicipio.php'>"; 
    }else{
        echo "<script>alert('Municipio Modificado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMunicipio.php'>"; 
    }
}

// ELIMINAR

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM municipio WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

     // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó  Lugar ".$nombre." el día ",$fecha]);

    echo "<script>alert('Municipio Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMunicipio.php'>"; 
}
?>