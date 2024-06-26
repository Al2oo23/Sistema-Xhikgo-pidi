<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_transito.php");

$transito = new transito();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){
    
    $transito->setFecha($_POST['fecha']);      
    $transito->setSeccion($_POST['seccion']);   
    $transito->setEstacion($_POST['estacion']);
    $transito->setEmergencia($_POST['emergencia']);
    $transito->setInspeccion($_POST['inspeccion']);
    $transito->setIncidente($_POST['incidente']);
    $transito->setTaviso($_POST['taviso']);
    $transito->setSolicitante($_POST['solicitante']);
    $transito->setRecibidor($_POST['recibido']);
    $transito->setAviso($_POST['aviso']);
    $transito->setSalida($_POST['salida']);
    $transito->setLlegada($_POST['llegada']);
    $transito->setRegreso($_POST['regreso']);
    $transito->setNiv($_POST['niv']);
    $transito->setLesionados($_POST['lesionados']);
    $transito->setOccisos($_POST['occisos']);
    $transito->setObservaciones($_POST['observaciones']);
    $transito->setIncendio($_POST['incendio']);
    $transito->setRecursos($_POST['recurso']);
    $transito->setCantidad($_POST['cantidad']);
    $transito->setJefe($_POST['jefe']);
    $transito->setEfectivos($_POST['efectivos']);
    $transito->setUnidad($_POST['unidad']);
    $transito->setPnb($_POST['pnb']);
    $transito->setGnb($_POST['gnb']);
    $transito->setIntt($_POST['intt']);
    $transito->setInvity($_POST['invity']);
    $transito->setPc($_POST['pc']);
    $transito->setOtro($_POST['otro']);
 
    $datos = $transito->agregarTransito(
        $transito->getFecha(),
        $transito->getSeccion(),
        $transito->getEstacion(),
        $transito->getEmergencia(),
        $transito->getInspeccion(),
        $transito->getIncidente(),
        $transito->getTaviso(),
        $transito->getSolicitante(),
        $transito->getRecibidor(),
        $transito->getAviso(),
        $transito->getSalida(),
        $transito->getLlegada(),
        $transito->getRegreso(),
        $transito->getNiv(),
        $transito->getLesionados(),
        $transito->getOccisos(),
        $transito->getObservaciones(),
        $transito->getIncendio(),
        $transito->getRecursos(),
        $transito->getCantidad(),
        $transito->getJefe(),
        $transito->getEfectivos(),
        $transito->getUnidad(),
        $transito->getPnb(),
        $transito->getGnb(),
        $transito->getIntt(),
        $transito->getInvity(),
        $transito->getPc(),
        $transito->getOtro());

    if(empty($datos)){
        echo "<script>alert('Registro Fallido')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/transito.php'>"; 
    }else{
        echo "<script>alert('Registro Exitoso')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/transito.php'>"; 
    }

}

//Modificar
if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   
    $transito->setId($_POST['id']);      
    $transito->setFecha($_POST['fecha']);      
    $transito->setSeccion($_POST['seccion']);   
    $transito->setEstacion($_POST['estacion']);
    $transito->setEmergencia($_POST['emergencia']);
    $transito->setInspeccion($_POST['inspeccion']);
    $transito->setIncidente($_POST['incidente']);
    $transito->setTaviso($_POST['taviso']);
    $transito->setSolicitante($_POST['solicitante']);
    $transito->setRecibidor($_POST['recibido']);
    $transito->setAviso($_POST['aviso']);
    $transito->setSalida($_POST['salida']);
    $transito->setLlegada($_POST['llegada']);
    $transito->setRegreso($_POST['regreso']);
    $transito->setNiv($_POST['niv']);
    $transito->setLesionados($_POST['lesionados']);
    $transito->setOccisos($_POST['occisos']);
    $transito->setObservaciones($_POST['observaciones']);
    $transito->setIncendio($_POST['incendio']);
    $transito->setRecursos($_POST['recurso']);
    $transito->setCantidad($_POST['cantidad']);
    $transito->setJefe($_POST['jefe']);
    $transito->setEfectivos($_POST['efectivos']);
    $transito->setUnidad($_POST['unidad']);
    $transito->setPnb($_POST['pnb']);
    $transito->setGnb($_POST['gnb']);
    $transito->setIntt($_POST['intt']);
    $transito->setInvity($_POST['invity']);
    $transito->setPc($_POST['pc']);
    $transito->setOtro($_POST['otro']);

    $datos = $transito->modificarTransito(
        $transito->getId(),
        $transito->getFecha(),
        $transito->getSeccion(),
        $transito->getEstacion(),
        $transito->getEmergencia(),
        $transito->getInspeccion(),
        $transito->getIncidente(),
        $transito->getTaviso(),
        $transito->getSolicitante(),
        $transito->getRecibidor(),
        $transito->getAviso(),
        $transito->getSalida(),
        $transito->getLlegada(),
        $transito->getRegreso(),
        $transito->getNiv(),
        $transito->getLesionados(),
        $transito->getOccisos(),
        $transito->getObservaciones(),
        $transito->getIncendio(),
        $transito->getRecursos(),
        $transito->getCantidad(),
        $transito->getJefe(),
        $transito->getEfectivos(),
        $transito->getUnidad(),
        $transito->getPnb(),
        $transito->getGnb(),
        $transito->getIntt(),
        $transito->getInvity(),
        $transito->getPc(),
        $transito->getOtro());
    
        if(empty($datos)){
            echo "<script>alert('Modificación Fallida')</script>";
            echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/transito.php'>"; 
        }else{
            echo "<script>alert('Modificación Exitosa')</script>";
            echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/transito.php'>"; 
        }
}

//ELIMINAR
if (isset($_GET['txtID'])){
    $transito->setId($_GET['txtID']);

    $resultado = $transito->eliminarTransito($transito->getId());


    if (empty($resultado)) {
        echo "<script>alert('No se pudo eliminar el Incidente')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/transito.php'>";
    } else {
        echo "<script>alert('Incidente eliminado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/transito.php'>";
    } 
}