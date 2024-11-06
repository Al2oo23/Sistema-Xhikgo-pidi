<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_servicio.php");
include("../modelo/clase_efectivo.php");
include("../modelo/clase_recursoAsignado.php");
include("../modelo/clase_unidadAsignada.php");

$servicio = new Servicio();
$efectivo = new efectivo();
$recurso = new recursoAsignado();
$unidad = new unidad();

$caso1 = false;
$caso2 = false;
$caso3 = false;

if(isset($_POST['registrar']) && $_POST['registrar'] == "registrar"){
    
    $servicio->setFecha($_POST['fecha']);
    $servicio->setSeccion($_POST['seccion']);
    $servicio->setEstacion($_POST['estacion']);
    $servicio->setTipoAviso($_POST['tipo_aviso']);
    $servicio->setSolicitante($_POST['solicitante']);
    $servicio->setHoraAviso($_POST['hora_aviso']);
    $servicio->setHoraSalida($_POST['hora_salida']);
    $servicio->setHoraLlegada($_POST['hora_llegada']);
    $servicio->setHoraRegreso($_POST['hora_regreso']);
    $servicio->setCausa($_POST['causa']);
    $servicio->setDireccion($_POST['direccion']);
    $servicio->setCIPnb($_POST['ci_pnb']);
    $servicio->setCIGnb($_POST['ci_gnb']);
    $servicio->setCIIntt($_POST['ci_intt']);
    $servicio->setCIInvity($_POST['ci_invity']);
    $servicio->setCIPc($_POST['ci_pc']);
    $servicio->setCIOtro($_POST['ci_otros']);
    $servicio->setJefeComision($_POST['jefe_comision']);
    $servicio->setJefeGeneral($_POST['jefe_general']);
    $servicio->setJefeSeccion($_POST['jefe_seccion']);
    $servicio->setComandante($_POST['comandante']);
    $servicio->setActa($_POST['acta']);
    $servicio->setObservaciones($_POST['observaciones']);

    if($_POST['ci_pnb'] == ''){$servicio->setCIPnb("Ninguno");}
    else{$servicio->setCIPnb($_POST['ci_pnb']);}
    
    if($_POST['ci_gnb'] == ''){$servicio->setCIGnb("Ninguno");
    }else{$servicio->setCIGnb($_POST['ci_gnb']);}

    if($_POST['ci_intt'] == ''){$servicio->setCIIntt('Ninguno');}
    else{$servicio->setCIIntt($_POST['ci_intt']);}
    
    if($_POST['ci_invity'] == ''){$servicio->setCIInvity("Ninguno");}
    else{$servicio->setCIInvity($_POST['ci_invity']);}

    if($_POST['ci_pc'] == ''){$servicio->setCIPc("Ninguno");}
    else{$servicio->setCIPc($_POST['ci_pc']);}

    if($_POST['ci_otros'] == ''){$servicio->setCIOtro("Ninguno");}
    else{$servicio->setCIOtro($_POST['ci_otros']);}

    $datos = $servicio->registrarServicio($servicio->getFecha(), $servicio->getSeccion(), $servicio->getEstacion(), $servicio->getTipoAviso(), $servicio->getSolicitante(), $servicio->getHoraAviso(), $servicio->getHoraSalida(), $servicio->getHoraLlegada(), $servicio->getHoraRegreso(), $servicio->getCausa(), $servicio->getDireccion(),  $servicio->getCIPNB(), $servicio->getCIGNB(), $servicio->getCIINTT(), $servicio->getCIINVITY(), $servicio->getCIPC(), $servicio->getCIOtro(), $servicio->getJefeComision(), $servicio->getJefeGeneral(), $servicio->getJefeSeccion(), $servicio->getComandante(), $servicio->getActa(), $servicio->getObservaciones());

     //EFECTIVOS
     foreach ($_POST['efectivos'] as $cedula) {
        //setters efectivo incidente

        $efectivo->setIdIncidente($datos[1]);
        $efectivo->setTipo("S.E");
        $efectivo->setCedula($cedula);

        //getters efectivo incidente
       
            $caso1 = $efectivo->agregarEfectivo(
            $efectivo->getIdIncidente(),
            $efectivo->getTipo(),
            $efectivo->getCedula()
        );
    }

    //UNIDAD
    foreach ($_POST['unidad'] as $niv) {
        //setters vehiculo incidente

        $unidad->setIdIncidente($datos[1]);
        $unidad->setTipo("S.E");
        $unidad->setNiv($niv);

        //getters vehiculo incidente

            $caso2 = $unidad->agregarUnidad(
            $unidad->getIdIncidente(),
            $unidad->getTipo(),
            $unidad->getNiv()
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

            $caso3 = $recurso->agregarRecurso(
            $recurso->getIdIncidente(),
            $recurso->getTipo(),
            $recurso->getIdRecurso(),
            $recurso->getCantidad()
        );
    }

    if (empty($datos[0]) || !$caso1 || !$caso2 || !$caso3) {

        $abejas->errorRegistro($datos[1]);

        echo "<script>alert('No se pudo registrar el Incidente')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSE.php'>"; 
    }else{
        echo "<script>alert('Incidente Registrado con Éxito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSE.php'>"; 
    }
}

if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   
    $servicio->setid($_POST['id']);
    $servicio->setFecha($_POST['fechaM']);
    $servicio->setSeccion($_POST['seccionM']);
    $servicio->setEstacion($_POST['estacionM']);
    $servicio->setTipoAviso($_POST['tipo_avisoM']);
    $servicio->setSolicitante($_POST['solicitanteM']);
    $servicio->setHoraAviso($_POST['hora_avisoM']);
    $servicio->setHoraSalida($_POST['hora_salidaM']);
    $servicio->setHoraLlegada($_POST['hora_llegadaM']);
    $servicio->setHoraRegreso($_POST['hora_regresoM']);
    $servicio->setCausa($_POST['causaM']);
    $servicio->setDireccion($_POST['direccionM']);
    $servicio->setCIPnb($_POST['ci_pnbM']);
    $servicio->setCIGnb($_POST['ci_gnbM']);
    $servicio->setCIIntt($_POST['ci_inttM']);
    $servicio->setCIInvity($_POST['ci_invityM']);
    $servicio->setCIPc($_POST['ci_pcM']);
    $servicio->setCIOtro($_POST['ci_otrosM']);
    $servicio->setJefeComision($_POST['jefe_comisionM']);
    $servicio->setJefeGeneral($_POST['jefe_generalM']);
    $servicio->setJefeSeccion($_POST['jefe_seccionM']);
    $servicio->setComandante($_POST['comandanteM']);
    $servicio->setActa($_POST['actaM']);
    $servicio->setObservaciones($_POST['observacionesM']);

    if($_POST['ci_pnbM'] == ''){$servicio->setCIPnb("Ninguno");}
    else{$servicio->setCIPnb($_POST['ci_pnbM']);}
    
    if($_POST['ci_gnbM'] == ''){$servicio->setCIGnb("Ninguno");
    }else{$servicio->setCIGnb($_POST['ci_gnbM']);}

    if($_POST['ci_inttM'] == ''){$servicio->setCIIntt('Ninguno');}
    else{$servicio->setCIIntt($_POST['ci_inttM']);}
    
    if($_POST['ci_invityM'] == ''){$servicio->setCIInvity("Ninguno");}
    else{$servicio->setCIInvity($_POST['ci_invityM']);}

    if($_POST['ci_pcM'] == ''){$servicio->setCIPc("Ninguno");}
    else{$servicio->setCIPc($_POST['ci_pcM']);}

    if($_POST['ci_otrosM'] == ''){$servicio->setCIOtro("Ninguno");}
    else{$servicio->setCIOtro($_POST['ci_otrosM']);}

    $datos = $servicio->modificarServicio($servicio->getId(), $servicio->getFecha(), $servicio->getSeccion(), $servicio->getEstacion(), $servicio->getTipoAviso(), $servicio->getSolicitante(), $servicio->getHoraAviso(), $servicio->getHoraSalida(), $servicio->getHoraLlegada(), $servicio->getHoraRegreso(), $servicio->getCausa(), $servicio->getDireccion(),  $servicio->getCIPNB(), $servicio->getCIGNB(), $servicio->getCIINTT(), $servicio->getCIINVITY(), $servicio->getCIPC(), $servicio->getCIOtro(), $servicio->getJefeComision(), $servicio->getJefeGeneral(), $servicio->getJefeSeccion(), $servicio->getComandante(), $servicio->getActa(), $servicio->getObservaciones());

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

        print_r($_POST['recurso']);
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
   
    // if(!$datos){
    //     echo "<script>alert('No se pudo Modificar el Incidente')</script>";
	// 	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSE.php'>"; 
    // }else{
    //     echo "<script>alert('Incidente Modificado con Éxito')</script>";
	// 	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSE.php'>"; 
    // }
}

// ELIMINAR

if (isset($_POST['eliminar']) && $_POST['eliminar'] == "eliminar") {

    $servicio->errorRegistro($datos[1]);

    echo "<script>alert('Servicio Eliminado con Éxito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSE.php'>"; 
}
?>