<?php
session_start ();
 include('../modelo/conexion.php');
include('../modelo/clase_estacion.php');
$estacion = new Estacion();

//REGISTRAR
if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {

    $estacion->setNombre($_POST['nombre']);

    $resultado = $estacion->registrarEstacion($estacion->getNombre());

    if (!$resultado) {
        echo "<script>alert('No se pudo registrar la Estacion')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modalEstacionR.php'>";
    } else {
        echo "<script>alert('Estacion registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEstacion.php'>";
    }
}

//MODIFICAR
if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    $estacion->setId($_POST['id']);
    $estacion->setNombre($_POST['nombre']);

    $resultado = $estacion->modificarEstacion($estacion->getId(), $estacion->getNombre());

    if (!$resultado) {
        echo "<script>alert('No se pudo modificar la Estacion')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEstacion.php'>";
    } else {
        echo "<script>alert('Estacion modificada con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEstacion.php'>";
    }
}

// ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM estacion WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

     // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Elimió  Lugar ".$nombre." el día ",$fecha]);

    echo "<script>alert('Estacion Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEstacion.php'>"; 
}