<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_transito.php");
include("../modelo/clase_vehiculoAsignado.php");
include("../modelo/clase_efectivo.php");
include("../modelo/clase_recursoAsignado.php");
include("../modelo/clase_unidadAsignada.php");

$transito = new transito();
$vehiculoAsignado = new vehiculoAsignado();
$efectivo = new efectivo();
$recurso = new recursoAsignado();
$unidad = new unidad();

if(isset($_POST['agregar']) && $_POST['agregar'] == "agregar"){

    //print_r($_POST);
    
    //setter transito
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
    $transito->setLesionados($_POST['lesionados']);
    $transito->setOccisos($_POST['occisos']);
    $transito->setObservaciones($_POST['observaciones']);
    $transito->setIncendio($_POST['incendio']);
    $transito->setJefe($_POST['jefe']);
    $transito->setPnb($_POST['pnb']);
    $transito->setGnb($_POST['gnb']);
    $transito->setIntt($_POST['intt']);
    $transito->setInvity($_POST['invity']);
    $transito->setPc($_POST['pc']);
    $transito->setOtro($_POST['otro']);
 
    //getter transito
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
        $transito->getLesionados(),
        $transito->getOccisos(),
        $transito->getObservaciones(),
        $transito->getIncendio(),
        $transito->getJefe(),
        $transito->getPnb(),
        $transito->getGnb(),
        $transito->getIntt(),
        $transito->getInvity(),
        $transito->getPc(),
        $transito->getOtro());

        //VEHICULO
        foreach ($_POST['niv'] as $vehiculo) {
            //setters vehiculo incidente

            $vehiculoAsignado->setIdIncidente($datos[1]);
            $vehiculoAsignado->setNiv($vehiculo);

            //getters vehiculo incidente

            $resultadoVehiculos = $vehiculoAsignado->agregarVehiculoAsignado(
                $vehiculoAsignado->getIdIncidente(),
                $vehiculoAsignado->getNiv()
            );
        }

        //EFECTIVOS
        foreach ($_POST['efectivos'] as $cedula) {
            //setters vehiculo incidente

            $efectivo->setIdIncidente($datos[1]);
            $efectivo->setTipo("Transito");
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
            $recurso->setTipo("Transito");
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
            $unidad->setTipo("Transito");
            $unidad->setNiv($niv);

            //getters vehiculo incidente

            $resultadoUnidad = $unidad->agregarUnidad(
                $unidad->getIdIncidente(),
                $unidad->getTipo(),
                $unidad->getNiv()
            );
        }
      
    if(empty($datos[0])){
        echo "<script>alert('Registro Fallido')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTransito.php'>"; 
    }else{
        echo "<script>alert('Registro Exitoso')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTransito.php'>"; 
    }

}

//Modificar
if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   
    print_r($_POST);
    
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
    $transito->setLesionados($_POST['lesionados']);
    $transito->setOccisos($_POST['occisos']);
    $transito->setObservaciones($_POST['observaciones']);
    $transito->setIncendio($_POST['incendio']);
    $transito->setJefe($_POST['jefe']);
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

        $transito->getLesionados(),
        $transito->getOccisos(),
        $transito->getObservaciones(),
        $transito->getIncendio(),
       
        $transito->getJefe(),
       
        $transito->getPnb(),
        $transito->getGnb(),
        $transito->getIntt(),
        $transito->getInvity(),
        $transito->getPc(),
        $transito->getOtro());

        //VEHICULO
        foreach ($_POST['niv'] as $vehiculo) {
            //setters vehiculo incidente

            $vehiculoAsignado->eliminarVehiculoAsignado(
                $vehiculoAsignado->getIdIncidente()
            );

            $vehiculoAsignado->setIdIncidente($_POST['id']);
            $vehiculoAsignado->setNiv($vehiculo);

            //getters vehiculo incidente

            $resultadoVehiculos = $vehiculoAsignado->agregarVehiculoAsignado(
                $vehiculoAsignado->getIdIncidente(),
                $vehiculoAsignado->getNiv()
            );
        }

        //EFECTIVOS
        foreach ($_POST['efectivos'] as $cedula) {
            //setters vehiculo incidente

            $efectivo->setIdIncidente($_POST['id']);
            $efectivo->setTipo("Transito");
            $efectivo->setCedula($cedula);

            //getters vehiculo incidente

            $efectivo->eliminarEfectivo($efectivo->getIdIncidente());

            $resultadoEfectivo = $efectivo->agregarEfectivo(
                $efectivo->getIdIncidente(),
                $efectivo->getTipo(),
                $efectivo->getCedula()
            );
        }

        //RECURSOS
        for($i = 0; $i<count($_POST['recurso']);$i++){
            //setters vehiculo incidente

        $recurso->setIdIncidente($_POST['id']);
            $recurso->setTipo("Transito");
            $recurso->setIdRecurso($_POST['recurso'][$i]);
            $recurso->setCantidad($_POST['cantidad'][$i]);

            //getters vehiculo incidente

            $recurso->eliminarRecurso(
                $recurso->getIdIncidente()
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
            $unidad->setTipo("Transito");
            $unidad->setNiv($niv);

            //getters vehiculo incidente

            $unidad->eliminarUnidad(
                $unidad->getIdIncidente()
            );

            $resultadoUnidad = $unidad->agregarUnidad(
                $unidad->getIdIncidente(),
                $unidad->getTipo(),
                $unidad->getNiv()
            );
        }
    
        if(empty($datos)){
            echo "<script>alert('Modificación Fallida')</script>";
            echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTransito.php'>"; 
        }else{
            echo "<script>alert('Modificación Exitosa')</script>";
            echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTransito.php'>"; 
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