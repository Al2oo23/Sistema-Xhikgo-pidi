<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_marca.php");
$marca = new marca();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){
    
    $marca->setNombre($_POST['nombre']);
 
    $datos = $marca->agregarMarca($marca->getNombre());

    if(empty($datos)){
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMarca.php'>"; 
    }else{
       echo "<script>alert('Marca registrada con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMarca.php'>"; 
    }
}


if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

    $marca->setId($_POST['id']);
    $marca->setNombre($_POST['nombre']);
    
 
    $datos = $marca->modificarMarca($marca->getId(), $marca->getNombre());

    if(empty($datos)){
        echo "<script>alert('No se pudo Modificar la Marca')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMarca.php'>"; 
    }else{
        echo "<script>alert('Marca Modificada con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMarca.php'>"; 
    }
}

// ELIMINAR

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM marca WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

     // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó  Marca con el txtID ".$txtID." el día ",$fecha]);

    echo "<script>alert('Marca Eliminada con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMarca.php'>"; 
}
?>

