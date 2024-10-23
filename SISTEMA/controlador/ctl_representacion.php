<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_representacion.php");
$representacion = new representacion();

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
    $representacion->setNumEfectivos($_POST['num_efectivos']);
    $representacion->setMaletin($_POST['maletin']);
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

    $datos = $representacion->registrarRepresentacion($representacion->getFecha(), $representacion->getSeccion(), $representacion->getEstacion(), $representacion->getTipoAviso(), $representacion->getHoraAviso(), $representacion->getHoraSalida(), $representacion->getHoraLlegada(), $representacion->getHoraRegreso(), $representacion->getCausa(), $representacion->getDireccion(), $representacion->getNumEfectivos(), $representacion->getMaletin(), $representacion->getExplicacion(), $representacion->getCIPNB(), $representacion->getCIGNB(), $representacion->getCIINTT(), $representacion->getCIINVITY(), $representacion->getCIPC(), $representacion->getCIOtro(), $representacion->getJefeComision(), $representacion->getJefeGeneral(), $representacion->getJefeSeccion(), $representacion->getComandante());

    if(!$datos){
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
    $representacion->setNumEfectivos($_POST['num_efectivosM']);
    $representacion->setMaletin($_POST['maletinM']);
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

    $datos = $representacion->modificarRepresentacion($representacion->getId(), $representacion->getFecha(), $representacion->getSeccion(), $representacion->getEstacion(), $representacion->getTipoAviso(), $representacion->getHoraAviso(), $representacion->getHoraSalida(), $representacion->getHoraLlegada(), $representacion->getHoraRegreso(), $representacion->getCausa(), $representacion->getDireccion(), $representacion->getNumEfectivos(), $representacion->getMaletin(), $representacion->getExplicacion(), $representacion->getCIPNB(), $representacion->getCIGNB(), $representacion->getCIINTT(), $representacion->getCIINVITY(), $representacion->getCIPC(), $representacion->getCIOtro(), $representacion->getJefeComision(), $representacion->getJefeGeneral(), $representacion->getJefeSeccion(), $representacion->getComandante());

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

    $sentencia = $conexion->prepare("DELETE FROM representacion_institucional WHERE id = ?");
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
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogorepresentacion.php'>"; 
}
?>