<?php
include('../modelo/conexion.php');
require('../modelo/clase_abejas.php');

$abejas = new Abejas();

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
    $abejas->setRecurso($_POST['recurso']);
    $abejas->setCantidad($_POST['cantidad_recurso']);
    $abejas->setEfectivo($_POST['efectivo']);
    $abejas->setUnidad($_POST['unidad']);
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
        $abejas->getRecurso(),
        $abejas->getCantidad(),
        $abejas->getEfectivo(),
        $abejas->getUnidad(),
        $abejas->getCi_pnb(),
        $abejas->getCi_gnb(),
        $abejas->getCi_intt(),
        $abejas->getCi_invity(),
        $abejas->getCi_pc(),
        $abejas->getCi_otro()
    );


    if (!$datos) {
        echo "<script>alert('No se pudo registrar el Incidente')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAbejas.php'>";
    } else {
        echo "<script>alert('Incidente registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAbejas.php'>";
    }   
}



// MODIFICAR INCIDENTE DE ABEJAS -------------------------------------------

if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    print_r($_POST);
    
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
    $abejas->setRecurso($_POST['recurso']);
    $abejas->setCantidad($_POST['cantidad_recurso']);
    $abejas->setEfectivo($_POST['efectivo']);
    $abejas->setUnidad($_POST['unidad']);
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
        $abejas->getRecurso(),
        $abejas->getCantidad(),
        $abejas->getEfectivo(),
        $abejas->getUnidad(),
        $abejas->getCi_pnb(),
        $abejas->getCi_gnb(),
        $abejas->getCi_intt(),
        $abejas->getCi_invity(),
        $abejas->getCi_pc(),
        $abejas->getCi_otro()
    );



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







