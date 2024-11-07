<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_representacion.php");
include("../modelo/clase_efectivo.php");
include("../modelo/clase_recursoAsignado.php");

$representacion = new Representacion();
$efectivo = new efectivo();
$recurso = new recursoAsignado();

$caso1 = false;
$caso2 = false;

if(isset($_POST['registrar']) && $_POST['registrar'] == "registrar"){
    
    $representacion->setFecha($_POST['fecha']);
    $representacion->setSeccion($_POST['seccion']);
    $representacion->setEstacion($_POST['estacion']);
    $representacion->setTipoAviso($_POST['tipo_aviso']);
    $representacion->setHoraAviso($_POST['hora_aviso']);
    $representacion->setHoraSalida($_POST['hora_salida']);
    $representacion->setHoraLlegada($_POST['hora_llegada']);
    $representacion->setHoraRegreso($_POST['hora_regreso']);
    $representacion->setCausa($_POST['causa']);
    $representacion->setDireccion($_POST['direccion']);
    $representacion->setExplicacion($_POST['explicacion']);
    $representacion->setCIPnb($_POST['ci_pnb']);
    $representacion->setCIGnb($_POST['ci_gnb']);
    $representacion->setCIIntt($_POST['ci_intt']);
    $representacion->setCIInvity($_POST['ci_invity']);
    $representacion->setCIPc($_POST['ci_pc']);
    $representacion->setCIOtro($_POST['ci_otros']);
    $representacion->setJefeComision($_POST['jefe_comision']);
    $representacion->setJefeGeneral($_POST['jefe_general']);
    $representacion->setJefeSeccion($_POST['jefe_seccion']);
    $representacion->setComandante($_POST['comandante']);
    $representacion->setActa($_POST['acta']);

    if($_POST['ci_pnb'] == ''){$representacion->setCIPnb("Ninguno");}
    else{$representacion->setCIPnb($_POST['ci_pnb']);}
    
    if($_POST['ci_gnb'] == ''){$representacion->setCIGnb("Ninguno");
    }else{$representacion->setCIGnb($_POST['ci_gnb']);}

    if($_POST['ci_intt'] == ''){$representacion->setCIIntt('Ninguno');}
    else{$representacion->setCIIntt($_POST['ci_intt']);}
    
    if($_POST['ci_invity'] == ''){$representacion->setCIInvity("Ninguno");}
    else{$representacion->setCIInvity($_POST['ci_invity']);}

    if($_POST['ci_pc'] == ''){$representacion->setCIPc("Ninguno");}
    else{$representacion->setCIPc($_POST['ci_pc']);}

    if($_POST['ci_otros'] == ''){$representacion->setCIOtro("Ninguno");}
    else{$representacion->setCIOtro($_POST['ci_otros']);}

    $datos = $representacion->registrarRepresentacion($representacion->getFecha(), $representacion->getSeccion(), $representacion->getEstacion(), $representacion->getTipoAviso(), $representacion->getHoraAviso(), $representacion->getHoraSalida(), $representacion->getHoraLlegada(), $representacion->getHoraRegreso(), $representacion->getCausa(), $representacion->getDireccion(), $representacion->getExplicacion(), $representacion->getCIPNB(), $representacion->getCIGNB(), $representacion->getCIINTT(), $representacion->getCIINVITY(), $representacion->getCIPC(), $representacion->getCIOtro(), $representacion->getJefeComision(), $representacion->getJefeGeneral(), $representacion->getJefeSeccion(), $representacion->getComandante(), $representacion->getActa());

     //EFECTIVOS
     foreach ($_POST['efectivos'] as $cedula) {
        //setters efectivo incidente

        $efectivo->setIdIncidente($datos[1]);
        $efectivo->setTipo("Representacion");
        $efectivo->setCedula($cedula);

        //getters efectivo incidente
       
            $caso1 = $efectivo->agregarEfectivo(
            $efectivo->getIdIncidente(),
            $efectivo->getTipo(),
            $efectivo->getCedula()
        );
    }

    //RECURSOS
    for($i = 0; $i<count($_POST['recurso']);$i++){
        //setters vehiculo incidente

        $recurso->setIdIncidente($datos[1]);
        $recurso->setTipo("Representacion");
        $recurso->setIdRecurso($_POST['recurso'][$i]);
        $recurso->setCantidad($_POST['cantidad'][$i]);

        //getters vehiculo incidente

            $caso2 = $recurso->agregarRecurso(
            $recurso->getIdIncidente(),
            $recurso->getTipo(),
            $recurso->getIdRecurso(),
            $recurso->getCantidad()
        );
    }

    if(empty($datos[0]) || !$caso1 || !$caso2){
        
        $representacion->errorRegistro($datos[1]);

        echo "<script>alert('No se pudo registrar el Incidente')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRepresentacion.php'>"; 
    }else{
        echo "<script>alert('Representación Institucional Registrada con Éxito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRepresentacion.php'>"; 
    }
}

if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   
    $representacion->setId($_POST['id']);
    $representacion->setFecha($_POST['fechaM']);
    $representacion->setSeccion($_POST['seccionM']);
    $representacion->setEstacion($_POST['estacionM']);
    $representacion->setTipoAviso($_POST['tipo_avisoM']);
    $representacion->setHoraAviso($_POST['hora_avisoM']);
    $representacion->setHoraSalida($_POST['hora_salidaM']);
    $representacion->setHoraLlegada($_POST['hora_llegadaM']);
    $representacion->setHoraRegreso($_POST['hora_regresoM']);
    $representacion->setCausa($_POST['causaM']);
    $representacion->setDireccion($_POST['direccionM']);
    $representacion->setExplicacion($_POST['explicacionM']);
    $representacion->setCIPnb($_POST['ci_pnbM']);
    $representacion->setCIGnb($_POST['ci_gnbM']);
    $representacion->setCIIntt($_POST['ci_inttM']);
    $representacion->setCIInvity($_POST['ci_invityM']);
    $representacion->setCIPc($_POST['ci_pcM']);
    $representacion->setCIOtro($_POST['ci_otroM']);
    $representacion->setJefeComision($_POST['jefe_comisionM']);
    $representacion->setJefeGeneral($_POST['jefe_generalM']);
    $representacion->setJefeSeccion($_POST['jefe_seccionM']);
    $representacion->setComandante($_POST['comandanteM']);

    $datos = $representacion->modificarRepresentacion($representacion->getId(), $representacion->getFecha(), $representacion->getSeccion(), $representacion->getEstacion(), $representacion->getTipoAviso(), $representacion->getHoraAviso(), $representacion->getHoraSalida(), $representacion->getHoraLlegada(), $representacion->getHoraRegreso(), $representacion->getCausa(), $representacion->getDireccion(), $representacion->getExplicacion(), $representacion->getCIPNB(), $representacion->getCIGNB(), $representacion->getCIINTT(), $representacion->getCIINVITY(), $representacion->getCIPC(), $representacion->getCIOtro(), $representacion->getJefeComision(), $representacion->getJefeGeneral(), $representacion->getJefeSeccion(), $representacion->getComandante(), $representacion->getActa());

    //EFECTIVOS
    foreach ($_POST['efectivos'] as $cedula) {
        //setters vehiculo incidente

        $efectivo->setIdIncidente($_POST['id']);
        $efectivo->setTipo("Representacion");
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
        "Representacion"
    );

    $recurso->eliminarRecurso(
         $_POST['id'],
        "Representacion"
    );

    for($i = 0; $i<count($_POST['recurso']);$i++){
        //setters recurso

        $recurso->setIdIncidente($_POST['id']);
        $recurso->setTipo("Representacion");
        $recurso->setIdRecurso($_POST['recurso'][$i]);
        $recurso->setCantidad($_POST['cantidad'][$i]);
        
        // getters recurso

        $resultadoRecurso = $recurso->agregarRecurso(
            $recurso->getIdIncidente(),
            $recurso->getTipo(),
            $recurso->getIdRecurso(),
            $recurso->getCantidad()
        );
    }

    if(!$datos){
        echo "<script>alert('No se pudo Modificar la Representación')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRepresentacion.php'>"; 
    }else{
        echo "<script>alert('Representación Institucional Modificada con Éxito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRepresentacion.php'>"; 
    }
}

// ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $datos = $recurso->restauradorRecurso($txtID, 'Representacion');
    $datos2 = $representacion->errorRegistro($txtID);

    echo "<script>alert('Incidente Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRepresentacion.php'>"; 
}
?>