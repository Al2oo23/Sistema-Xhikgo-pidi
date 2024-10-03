<?php
session_start();
include('../modelo/conexion.php');
require('../modelo/clase_abejas.php');
include("../modelo/clase_efectivo.php");
include("../modelo/clase_recursoAsignado.php");
include("../modelo/clase_unidadAsignada.php");

$abejas = new Abejas();
$efectivo = new efectivo();
$recurso = new recursoAsignado();
$unidad = new unidad();

// REGISTRAR INCIDENTE DE ABEJAS -------------------------------------------

if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {

    $abejas->setFecha($_POST['fecha']);
    $abejas->setSeccion($_POST['seccion']);
    $abejas->setEstacion($_POST['estacion']);
    $abejas->setTipoAviso($_POST['tipo_aviso']);
    $abejas->setHaviso($_POST['hora_aviso']);
    $abejas->setHsalida($_POST['hora_salida']);
    $abejas->setHllegada($_POST['hora_llegada']);
    $abejas->setHregreso($_POST['hora_regreso']);
    $abejas->setPanal($_POST['panal']);
    $abejas->setDireccion($_POST['direccion']);
    $abejas->setLugar($_POST['lugar']);
    $abejas->setInmueble($_POST['inmueble']);
    $abejas->setJefe($_POST['jefe']);
    $abejas->setCi_pnb($_POST['ci_pnb']);
    $abejas->setCi_gnb($_POST['ci_gnb']);
    $abejas->setCi_intt($_POST['ci_intt']);
    $abejas->setCi_invity($_POST['ci_invity']);
    $abejas->setCi_pc($_POST['ci_pc']);
    $abejas->setCi_otro($_POST['ci_otro']);
    
    $datos = $abejas->registrarAbejas(
        $abejas->getFecha(),
        $abejas->getSeccion(),
        $abejas->getEstacion(),
        $abejas->getTipoAviso(),
        $abejas->getHaviso(),
        $abejas->getHsalida(),
        $abejas->getHllegada(),
        $abejas->getHregreso(),
        $abejas->getPanal(),
        $abejas->getDireccion(),
        $abejas->getLugar(),
        $abejas->getInmueble(),
        $abejas->getJefe(),
        $abejas->getCi_pnb(),
        $abejas->getCi_gnb(),
        $abejas->getCi_intt(),
        $abejas->getCi_invity(),
        $abejas->getCi_pc(),
        $abejas->getCi_otro()
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
        $unidad->setTipo("S.E");
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
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAbejas.php'>";
    } else {
        echo "<script>alert('Incidente registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAbejas.php'>";
    }   
}



// MODIFICAR INCIDENTE DE ABEJAS -------------------------------------------

if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    // print_r($_POST);
    
    $abejas->setId($_POST['id']);
    $abejas->setFecha($_POST['fecha']);
    $abejas->setSeccion($_POST['seccion']);
    $abejas->setEstacion($_POST['estacion']);
    $abejas->setTipoAviso($_POST['tipo_aviso']);
    $abejas->setHaviso($_POST['hora_aviso']);
    $abejas->setHsalida($_POST['hora_salida']);
    $abejas->setHllegada($_POST['hora_llegada']);
    $abejas->setHregreso($_POST['hora_regreso']);
    $abejas->setPanal($_POST['panal']);
    $abejas->setDireccion($_POST['direccion']);
    $abejas->setLugar($_POST['lugar']);
    $abejas->setInmueble($_POST['inmueble']);
    $abejas->setJefe($_POST['jefe']);
    $abejas->setCi_pnb($_POST['ci_pnb']);
    $abejas->setCi_gnb($_POST['ci_gnb']);
    $abejas->setCi_intt($_POST['ci_intt']);
    $abejas->setCi_invity($_POST['ci_invity']);
    $abejas->setCi_pc($_POST['ci_pc']);
    $abejas->setCi_otro($_POST['ci_otro']);
    
    $datos = $abejas->modificarAbejas(
        $abejas->getId(),
        $abejas->getFecha(),
        $abejas->getSeccion(),
        $abejas->getEstacion(),
        $abejas->getTipoAviso(),
        $abejas->getHaviso(),
        $abejas->getHsalida(),
        $abejas->getHllegada(),
        $abejas->getHregreso(),
        $abejas->getPanal(),
        $abejas->getDireccion(),
        $abejas->getLugar(),
        $abejas->getInmueble(),
        $abejas->getJefe(),
        $abejas->getCi_pnb(),
        $abejas->getCi_gnb(),
        $abejas->getCi_intt(),
        $abejas->getCi_invity(),
        $abejas->getCi_pc(),
        $abejas->getCi_otro()
    );

     //EFECTIVOS
     foreach ($_POST['efectivos'] as $cedula) {
        //setters vehiculo incidente

        $efectivo->setIdIncidente($_POST['id']);
        $efectivo->setTipo("S.E");
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
        $recurso->setTipo("S.E");
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
        $unidad->setTipo("S.E");
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
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAbejas.php'>";
    } else {
        echo "<script>alert('Incidente modificado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAbejas.php'>";
    }   
}

// ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM abejas WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    echo "<script>alert('Incidente Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAbejas.php'>"; 
}







