<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_servicio.php");
include("../modelo/clase_recursoAsignado.php");
$servicio = new Servicio();
$recurso = new recursoAsignado();

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

    $datos = $servicio->registrarServicio($servicio->getFecha(), $servicio->getSeccion(), $servicio->getEstacion(), $servicio->getTipoAviso(), $servicio->getSolicitante(), $servicio->getHoraAviso(), $servicio->getHoraSalida(), $servicio->getHoraLlegada(), $servicio->getHoraRegreso(), $servicio->getCausa(), $servicio->getDireccion(),  $servicio->getCIPNB(), $servicio->getCIGNB(), $servicio->getCIINTT(), $servicio->getCIINVITY(), $servicio->getCIPC(), $servicio->getCIOtro(), $servicio->getJefeComision(), $servicio->getJefeGeneral(), $servicio->getJefeSeccion(), $servicio->getComandante(), $servicio->getActa(), $servicio->getObservaciones());

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


    if(!$datos[0]){
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSE.php'>"; 
    }else{
        echo "<script>alert('Servicio Especial Registrado con Éxito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSE.php'>"; 
    }
}

if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   
    $servicio->setId($_POST['id']);
    $servicio->setFecha($_POST['fechaM']);
    $servicio->setSeccion($_POST['seccionM']);
    $servicio->setEstacion($_POST['estacionM']);
    $servicio->setTipoAviso($_POST['tipo_avisoM']);
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
    $servicio->setCIOtro($_POST['ci_otroM']);
    $servicio->setJefeComision($_POST['jefe_comisionM']);
    $servicio->setJefeGeneral($_POST['jefe_generalM']);
    $servicio->setJefeSeccion($_POST['jefe_seccionM']);
    $servicio->setComandante($_POST['comandanteM']);

    $datos = $servicio->modificarservicio($servicio->getId(),$servicio->getFecha(), $servicio->getSeccion(), $servicio->getEstacion(), $servicio->getTipoAviso(), $servicio->getSolicitante(), $servicio->getHoraAviso(), $servicio->getHoraSalida(), $servicio->getHoraLlegada(), $servicio->getHoraRegreso(), $servicio->getCausa(), $servicio->getDireccion(), $servicio->getCIPNB(), $servicio->getCIGNB(), $servicio->getCIINTT(), $servicio->getCIINVITY(), $servicio->getCIPC(), $servicio->getCIOtro(), $servicio->getJefeComision(), $servicio->getJefeGeneral(), $servicio->getJefeSeccion(), $servicio->getComandante(), $servicio->getActa(), $servicio->getObservaciones());

   

    if(!$datos){
        echo "<script>alert('No se pudo Modificar la Representación')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoservicio.php'>"; 
    }else{
        echo "<script>alert('Representación Institucional Modificada con Éxito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoservicio.php'>"; 
    }
}

// ELIMINAR

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM servicio_institucional WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

     // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó  Representación institucional ".$nombre." el día ",$fecha]);

    echo "<script>alert('Representación Institucional Eliminada con Éxito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoservicio.php'>"; 
}
?>