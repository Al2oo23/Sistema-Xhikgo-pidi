<?php
session_start();
include('../modelo/conexion.php');
require('../modelo/clase_vegetacion.php');
include("../modelo/clase_efectivo.php");
include("../modelo/clase_recursoAsignado.php");
include("../modelo/clase_unidadAsignada.php");

$vegetacion = new Vegetacion();
$efectivo = new efectivo();
$recurso = new recursoAsignado();
$unidad = new unidad();

// REGISTRAR INCIDENTE DE vegetacion -------------------------------------------

if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {

    $vegetacion->setFecha($_POST['fecha']);
    $vegetacion->setSeccion($_POST['seccion']);
    $vegetacion->setEstacion($_POST['estacion']);
    $vegetacion->setTipoAviso($_POST['tipo_aviso']);
    $vegetacion->setHaviso($_POST['hora_aviso']);
    $vegetacion->setHsalida($_POST['hora_salida']);
    $vegetacion->setHllegada($_POST['hora_llegada']);
    $vegetacion->setHregreso($_POST['hora_regreso']);
    $vegetacion->setIncendio($_POST['incendio']);
    $vegetacion->setNorte($_POST['norte']);
    $vegetacion->setSur($_POST['sur']);
    $vegetacion->setEste($_POST['este']);
    $vegetacion->setOeste($_POST['oeste']);
    $vegetacion->setDireccion($_POST['direccion']);
    $vegetacion->setLugar($_POST['lugar']);
    $vegetacion->setJefe($_POST['jefe']);
    $vegetacion->setActa($_POST['acta']);
    $vegetacion->setObservaciones($_POST['observaciones']);
    $vegetacion->setGral_servicios($_POST['gral_servicios']);
    $vegetacion->setJefe_deseccion($_POST['jefe_deseccion']);
    $vegetacion->setComandante($_POST['comandante']);
    $vegetacion->setCi_pnb($_POST['ci_pnb']);
    $vegetacion->setCi_gnb($_POST['ci_gnb']);
    $vegetacion->setCi_intt($_POST['ci_intt']);
    $vegetacion->setCi_invity($_POST['ci_invity']);
    $vegetacion->setCi_pc($_POST['ci_pc']);
    $vegetacion->setCi_otro($_POST['ci_otro']);
    
    $datos = $vegetacion->registrarVegetacion(
        $vegetacion->getFecha(),
        $vegetacion->getSeccion(),
        $vegetacion->getEstacion(),
        $vegetacion->getTipoAviso(),
        $vegetacion->getHaviso(),
        $vegetacion->getHsalida(),
        $vegetacion->getHllegada(),
        $vegetacion->getHregreso(),
        $vegetacion->getIncendio(),
        $vegetacion->getNorte(),
        $vegetacion->getSur(),
        $vegetacion->getEste(),
        $vegetacion->getOeste(),
        $vegetacion->getDireccion(),
        $vegetacion->getLugar(),
        $vegetacion->getJefe(),
        $vegetacion->getActa(),
        $vegetacion->getObservaciones(),
        $vegetacion->getGral_servicios(),
        $vegetacion->getJefe_deseccion(),
        $vegetacion->getComandante(),
        $vegetacion->getCi_pnb(),
        $vegetacion->getCi_gnb(),
        $vegetacion->getCi_intt(),
        $vegetacion->getCi_invity(),
        $vegetacion->getCi_pc(),
        $vegetacion->getCi_otro()
    );
     //EFECTIVOS
     foreach ($_POST['efectivos'] as $cedula) {
        //setters vehiculo incidente

        $efectivo->setIdIncidente($datos[1]);
        $efectivo->setTipo("S.E");
        $efectivo->setCedula($cedula);

        //getters vehiculo incidente

        $resultadoEfectivo = $efectivo->agregarEfectivo(
            $efectivo->getIdIncidente(),
            $efectivo->getTipo(),
            $efectivo->getCedula()
        );


    }

    //RECURSOS
    for($i = 0; $i<count($_POST['recurso']);$i++){
        //setters vehiculo incidente

    $recurso->setIdIncidente($datos[1]);
        $recurso->setTipo("S.E");
        $recurso->setIdRecurso($_POST['recurso'][$i]);
        $recurso->setCantidad($_POST['cantidad'][$i]);

        //getters vehiculo incidente

        $resultadoRecurso = $recurso->agregarRecurso(
            $recurso->getIdIncidente(),
            $recurso->getTipo(),
            $recurso->getIdRecurso(),
            $recurso->getCantidad()
        );
    }

    //UNIDAD
    foreach ($_POST['unidad'] as $niv) {
        //setters vehiculo incidente

        $unidad->setIdIncidente($datos[1]);
        $unidad->setTipo("vegetacion");
        $unidad->setNiv($niv);

        //getters vehiculo incidente

        $resultadoUnidad = $unidad->agregarUnidad(
            $unidad->getIdIncidente(),
            $unidad->getTipo(),
            $unidad->getNiv()
        );
    }


    if (empty($datos[0])) {
        echo "<script>alert('No se pudo registrar el Incidente')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVegetacion.php'>";
    } else {
        echo "<script>alert('Incidente registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVegetacion.php'>";
    }   
}



// MODIFICAR INCIDENTE DE Vegetacion-------------------------------------------

if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    // print_r($_POST);

        // print_r($_POST);
        
        $vegetacion->setId($_POST['id']);
        $vegetacion->setFecha($_POST['fecha']);
        $vegetacion->setSeccion($_POST['seccion']);
        $vegetacion->setEstacion($_POST['estacion']);
        $vegetacion->setTipoAviso($_POST['tipo_aviso']);
        $vegetacion->setHaviso($_POST['hora_aviso']);
        $vegetacion->setHsalida($_POST['hora_salida']);
        $vegetacion->setHllegada($_POST['hora_llegada']);
        $vegetacion->setHregreso($_POST['hora_regreso']);
        $vegetacion->setIncendio($_POST['incendio']);
        $vegetacion->setNorte($_POST['norte']);
        $vegetacion->setSur($_POST['sur']);
        $vegetacion->setEste($_POST['este']);
        $vegetacion->setOeste($_POST['oeste']);
        $vegetacion->setDireccion($_POST['direccion']);
        $vegetacion->setLugar($_POST['lugar']);
        $vegetacion->setJefe($_POST['jefe']);
        $vegetacion->setActa($_POST['acta']);
        $vegetacion->setObservaciones($_POST['observaciones']);
        $vegetacion->setGral_servicios($_POST['gral_servicios']);
        $vegetacion->setJefe_deseccion($_POST['jefe_deseccion']);
        $vegetacion->setComandante($_POST['comandante']);
        $vegetacion->setCi_pnb($_POST['ci_pnb']);
        $vegetacion->setCi_gnb($_POST['ci_gnb']);
        $vegetacion->setCi_intt($_POST['ci_intt']);
        $vegetacion->setCi_invity($_POST['ci_invity']);
        $vegetacion->setCi_pc($_POST['ci_pc']);
        $vegetacion->setCi_otro($_POST['ci_otro']);
        
        $datos = $vegetacion->modificarVegetacion(
        $vegetacion->getId(),
        $vegetacion->getFecha(),
        $vegetacion->getSeccion(),
        $vegetacion->getEstacion(),
        $vegetacion->getTipoAviso(),
        $vegetacion->getHaviso(),
        $vegetacion->getHsalida(),
        $vegetacion->getHllegada(),
        $vegetacion->getHregreso(),
        $vegetacion->getIncendio(),
        $vegetacion->getNorte(),
        $vegetacion->getSur(),
        $vegetacion->getEste(),
        $vegetacion->getOeste(),
        $vegetacion->getDireccion(),
        $vegetacion->getLugar(),
        $vegetacion->getJefe(),
        $vegetacion->getActa(),
        $vegetacion->getObservaciones(),
        $vegetacion->getGral_servicios(),
        $vegetacion->getJefe_deseccion(),
        $vegetacion->getComandante(),
        $vegetacion->getCi_pnb(),
        $vegetacion->getCi_gnb(),
        $vegetacion->getCi_intt(),
        $vegetacion->getCi_invity(),
        $vegetacion->getCi_pc(),
        $vegetacion->getCi_otro()
        );

     //EFECTIVOS
     foreach ($_POST['efectivos'] as $cedula) {
        //setters vehiculo incidente

        $efectivo->setIdIncidente($_POST['id']);
        $efectivo->setTipo("Vegetacion");
        $efectivo->setCedula($cedula);

        //getters vehiculo incidente

        $efectivo->eliminarEfectivo($efectivo->getIdIncidente(), $efectivo->getTipo());

        $resultadoEfectivo = $efectivo->agregarEfectivo(
            $efectivo->getIdIncidente(),
            $efectivo->getTipo(),
            $efectivo->getCedula()
        );
    }

    //RECURSOS

    $recurso->restauradorRecurso(
        $_POST['id'],
        "S.E"
    );

    for($i = 0; $i<count($_POST['recurso']);$i++){
        //setters vehiculo incidente

    $recurso->setIdIncidente($_POST['id']);
        $recurso->setTipo("Vegetacion");
        $recurso->setIdRecurso($_POST['recurso'][$i]);
        $recurso->setCantidad($_POST['cantidad'][$i]);

        // getters vehiculo incidente

        $recurso->eliminarRecurso(
            $recurso->getIdIncidente(),
            $recurso->getTipo("S.E")
        );

        $resultadoRecurso = $recurso->agregarRecurso(
            $recurso->getIdIncidente(),
            $recurso->getTipo(),
            $recurso->getIdRecurso(),
            $recurso->getCantidad()
        );
    }

    //UNIDAD
    foreach ($_POST['unidad'] as $niv) {
        //setters vehiculo incidente

        $unidad->setIdIncidente($_POST['id']);
        $unidad->setTipo("Vegetacion");
        $unidad->setNiv($niv);

        //getters vehiculo incidente

        $unidad->eliminarUnidad(
            $unidad->getIdIncidente(),
            $unidad->getTipo()
        );

        $resultadoUnidad = $unidad->agregarUnidad(
            $unidad->getIdIncidente(),
            $unidad->getTipo(),
            $unidad->getNiv()
        );
    }



    if (!$datos) {
        echo "<script>alert('No se pudo modificar el Incidente')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVegetacion.php'>";
    } else {
        echo "<script>alert('Incidente modificado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVegetacion.php'>";
    }   
}



// ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM vegetacion WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    //  // BITACORA
    //             // Fecha y hora actual
    //             $fecha = date('Y-m-d H:i:s');
            
    //             // Preparar la consulta SQL
    //             $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
    //             $resultado2 = $conexion->prepare($sql);

    //             // Ejecutar la consulta
    //             $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Elimino Abejas", $fecha]);


    echo "<script>alert('Incidente Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoVegetacion.php'>"; 
}

// GENERAR REPORTE INDIVIDUAL
if (isset($_GET['txtIDreporte'])) {

    $txtID = $_GET['txtIDreporte'];

    $resultado = $vegetacion->reporte($txtID);

    $_SESSION['reporte'] = $txtID;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/reportes/reporte_vegetacionEsp.php?ID=$txtID'>";
}






