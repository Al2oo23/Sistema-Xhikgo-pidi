<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_modelo.php");
$modelo = new modelo();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){

    $modelo->setMarca($_POST['marca']);
    $modelo->setNombre($_POST['nombre']);
    

    $datos = $modelo->agregarModelo( $modelo->getMarca(), $modelo->getNombre());

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar el Modelo')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>"; 
    }else{
        echo "<script>alert('Modelo registrado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>"; 
    }
}

if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   

    $modelo->setId($_POST['id']);
    $modelo->setMarca($_POST['marca']);
    $modelo->setNombre($_POST['nombre']);
    
    $datos = $modelo->modificarModelo($modelo->getId(), $modelo->getMarca(),$modelo->getNombre());


    if(empty($datos)){
        echo "<script>alert('No se pudo Modificar el modelo')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>"; 
    }else{
        echo "<script>alert('Modelo Modificado con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>"; 
    }
}

// ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM modelo WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    // Fecha y hora actual
    $fecha = date('Y-m-d H:i:s');
            
    // Preparar la consulta SQL
    $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
    $resultado2 = $conexion->prepare($sql);

    // Ejecutar la consulta
    $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó Modelo".$txtID, $fecha]);

    // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó  Modelo con el txtID ".$txtID." el día ",$fecha]);
                
    echo "<script>alert('Modelo Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>"; 
}
?>
