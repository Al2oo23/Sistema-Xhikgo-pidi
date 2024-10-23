<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_leva.php");
include("../modelo/clase_efectivo.php");
include("../modelo/clase_recursoAsignado.php");
include("../modelo/clase_unidadAsignada.php");
$leva = new leva();
$efectivo = new efectivo();
$recurso = new recursoAsignado();
$unidad = new unidad();

if (isset($_POST['registrar']) && $_POST['registrar'] == "registrar") {

    print_r($_POST);

    $leva->setFecha($_POST['fecha']);
    $leva->setSeccion($_POST['seccion']);
    $leva->setEstacion($_POST['estacion']);
    $leva->setTaviso($_POST['tipo_aviso']);
    $leva->setSolicitante($_POST['solicitante']);
    $leva->setRecibidor($_POST['recibidor']);
    $leva->setAviso($_POST['hora_aviso']);
    $leva->setsalida($_POST['hora_salida']);
    $leva->setLlegada($_POST['hora_llegada']);
    $leva->setRegreso($_POST['hora_regreso']);
    $leva->setDireccion($_POST['direccion']);
    $leva->setMunicipio($_POST['municipio']);
    $leva->setLugar($_POST['lugar']);
    $leva->setEstado($_POST['estado']);
    $leva->setJefe($_POST['jefe']);
    $leva->setOcciso($_POST['occiso']);
    $leva->setEstadoEncontrado($_POST['estadoEncontrado']);
    $leva->setDesmembrado($_POST['desmembrado']);
    $leva->setPartes($_POST['partes']);
    $leva->setCausa($_POST['causa']);
    $leva->setPutrefacto($_POST['putrefacto']);
    $leva->setAutorizador($_POST['autorizador']);
    $leva->setNorte($_POST['norte']);
    $leva->setSur($_POST['sur']);
    $leva->setEste($_POST['este']);
    $leva->setOeste($_POST['oeste']);
    $leva->setClima($_POST['lluvia']);
    $leva->setPavimento($_POST['pavimento']);
    $leva->setActa($_POST['acta']);
    $leva->setObservacion($_POST['observacion']);
    $leva->setJefeGeneral($_POST['general']);
    $leva->setJefeSeccion($_POST['jefe_seccion']);
    $leva->setComandante($_POST['comandante']);
    if($_POST['ci_pnb'] == ''){
        $leva->setPnb("Ninguno");
    }else{
        $leva->setPnb($_POST['ci_pnb']);
    }
    if($_POST['ci_gnb'] == ''){
        $leva->setGnb("Ninguno");
    }else{
        $leva->setGnb($_POST['ci_gnb']);
    }
    if($_POST['ci_intt'] == ''){
        $leva->setIntt('Ninguno');
    }else{
        $leva->setIntt($_POST['ci_intt']);
    }
    if($_POST['ci_invity'] == ''){
        $leva->setInvity("Ninguno");
    }else{
        $leva->setInvity($_POST['ci_invity']);
    }
    if($_POST['ci_pc'] == ''){
        $leva->setPc("Ninguno");
    }else{
        $leva->setPc($_POST['ci_pc']);
    }
    if($_POST['ci_otro'] == ''){
        $leva->setOtro("Ninguno");
    }else{
        $leva->setOtro($_POST['ci_otro']);
    }
    

    $datos = $leva->agregarLeva(

        $leva->getFecha(),
        $leva->getSeccion(),
        $leva->getEstacion(),
        $leva->getTaviso(),
        $leva->getSolicitante(),
        $leva->getRecibidor(),
        $leva->getAviso(),
        $leva->getSalida(),
        $leva->getLlegada(),
        $leva->getRegreso(),
        $leva->getDireccion(),
        $leva->getMunicipio(),
        $leva->getLugar(),
        $leva->getEstado(),
        $leva->getJefe(),
        $leva->getOcciso(),
        $leva->getEstadoEncontrado(),
        $leva->getDesmembrado(),
        $leva->getPartes(),
        $leva->getCausa(),
        $leva->getPutrefacto(),
        $leva->getAutorizador(),
        $leva->getNorte(),
        $leva->getSur(),
        $leva->getEste(),
        $leva->getOeste(),
        $leva->getClima(),
        $leva->getPavimento(),
        $leva->getActa(),
        $leva->getObservacion(),
        $leva->getPnb(),
        $leva->getGnb(),
        $leva->getIntt(),
        $leva->getInvity(),
        $leva->getPc(),
        $leva->getOtro(),
        $leva->getJefeGeneral(),
        $leva->getJefeSeccion(),
        $leva->getComandante()
        
    );

    //EFECTIVOS
    foreach ($_POST['efectivos'] as $cedula) {
        //setters efectivo incidente

        $efectivo->setIdIncidente($datos[1]);
        $efectivo->setTipo("Levantamiento");
        $efectivo->setCedula($cedula);

        //getters efectivo incidente

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
        $recurso->setTipo("Levantamiento");
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
        $unidad->setTipo("Levantamiento");
        $unidad->setNiv($niv);

        //getters vehiculo incidente

        $resultadoUnidad = $unidad->agregarUnidad(
            $unidad->getIdIncidente(),
            $unidad->getTipo(),
            $unidad->getNiv()
        );
    }

    /*if (empty($datos[0])) {
        echo "<script>alert('No se pudo registrar la lugar')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>";
    } else {
        echo "<script>alert('Lugar registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>";
    }*/
}

if (isset($_POST['modificar']) && $_POST['modificar'] == "modificar") {

    $lugar->setId($_POST['id']);
    $lugar->setNombre($_POST['nombre']);
    $lugar->setMunicipio($_POST['municipio']);
    $lugar->setDistancia($_POST['distancia']);

    $datos = $lugar->modificarLugar($lugar->getId(), $lugar->getNombre(), $lugar->getMunicipio(), $lugar->getDistancia());

    if (empty($datos)) {
        echo "<script>alert('No se pudo Modificar la lugar')</script>";
        //echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>"; 
    } else {
        echo "<script>alert('Lugar Modificado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>";
    }
}

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM lugar WHERE id = ?");

    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

     // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Elimino  Lugar ".$nombre." el día ",$fecha]);

    echo "<script>alert('Lugar Eliminado con exito')</script>";
    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>";
}

