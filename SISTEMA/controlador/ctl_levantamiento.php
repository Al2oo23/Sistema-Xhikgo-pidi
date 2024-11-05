<?php
session_start();
include ('../modelo/conexion.php');
include ("../modelo/clase_levantamiento.php");

$levantamiento = new Levantamiento();

// REGISTRAR LEVANTAMIENTO -------------------------------------------

if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {
    
    $levantamiento->setFecha($_POST['fecha']);
    $levantamiento->setDireccion($_POST['direccion']);
    $levantamiento->setMunicipio($_POST['municipio']);
    $levantamiento->setLugar($_POST['lugar']);
    $levantamiento->setEstadoEncontrado($_POST['estado_encontrado']);
    $levantamiento->setCausa($_POST['causa']);
    
    $datos = $levantamiento->registrarLevantamiento(
        $levantamiento->getFecha(),
        $levantamiento->getDireccion(),
        $levantamiento->getMunicipio(),
        $levantamiento->getLugar(),
        $levantamiento->getEstadoEncontrado(),
        $levantamiento->getCausa()
    );


    if (empty($datos[0])) {
        echo "<script>alert('No se pudo registrar el Incidente')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLevantamiento.php'>";
    } else {
        echo "<script>alert('Incidente registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLevantamiento.php'>";
    }   
}



// // MODIFICAR INCIDENTE DE Levantamiento -------------------------------------------

// if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

//     // print_r($_POST);
    
//     $levantamiento->setFecha($_POST['fecha']);
//     $levantamiento->setDireccion($_POST['direccion']);
//     $levantamiento->setLugar($_POST['lugar']);
//     $levantamiento->setEstado_encontrado($_POST['estado_encontrado']);
//     $levantamiento->setDesmembrado($_POST['desmembrado']);
//     $levantamiento->setCausa($_POST['Causa']);
//     $levantamiento->setPutrefacto($_POST['putrefacto']);


//     $datos = $levantamiento->modificarlevantamiento(
//         $levantamiento->getFecha(),
//         $levantamiento->getDireccion(),
//         $levantamiento->getLugar(),
//         $levantamiento->getEstado_encontrado(),
//         $levantamiento->getDesmembrado(),
//         $levantamiento->getCausa(),
//         $levantamiento->getPutrefacto()
//     );
// }




// // ELIMINAR
// if (isset($_GET['txtID'])) {

//     $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

//     $sentencia = $conexion->prepare("DELETE FROM levantamiento WHERE id = ?");
//     $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
//     $sentencia->execute();

//     //  // BITACORA
//     //             // Fecha y hora actual
//     //             $fecha = date('Y-m-d H:i:s');
            
//     //             // Preparar la consulta SQL
//     //             $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
//     //             $resultado2 = $conexion->prepare($sql);

//     //             // Ejecutar la consulta
//     //             $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Elimino levantamiento", $fecha]);


//     echo "<script>alert('Incidente Eliminado con Exito')</script>";
// 	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLevantamiento.php'>"; 
// }

// // GENERAR REPORTE INDIVIDUAL
// if (isset($_GET['txtIDreporte'])) {

//     $txtID = $_GET['txtIDreporte'];

//     $resultado = $levantamiento->reporte($txtID);

//     $_SESSION['reporte'] = $txtID;

//     print_r($resultado);

//      echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/reportes/reporte_levantamientoEsp.php?ID=$txtID'>";
// }

