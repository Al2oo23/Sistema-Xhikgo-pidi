<?php
include('../modelo/conexion.php');
require('../modelo/clase_incendio.php');
include("../modelo/clase_efectivo.php");
include("../modelo/clase_recursoAsignado.php");
include("../modelo/clase_unidadAsignada.php");

$incendio = new incendio();
$efectivo = new efectivo();
$recurso = new recursoAsignado();
$unidad = new unidad();

$caso1 = false;
$caso2 = false;
$caso3 = false;

if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {

    $incendio->setFecha($_POST['parte_diaria']);
    $incendio->setSeccion($_POST['seccion']);
    $incendio->setEstacion($_POST['estacion']);
    $incendio->setTipoAviso($_POST['tipo_aviso']);
    $incendio->setSolicitante($_POST['solicitante']);
    $incendio->setReceptor($_POST['receptor']);
    $incendio->setAprobador($_POST['aprobador']);
    $incendio->setHoraAviso($_POST['hora_aviso']);
    $incendio->setHoraSalida($_POST['hora_salida']);
    $incendio->setHoraLlegada($_POST['hora_llegada']);
    $incendio->setHoraRegreso($_POST['hora_regreso']);
    $incendio->setLugar($_POST['lugar']);
    $incendio->setDireccion($_POST['direccion']);
    $incendio->setParedes($_POST['material_paredes']);
    $incendio->setTecho($_POST['material_techo']);
    $incendio->setPiso($_POST['material_piso']);
    $incendio->setVentanas($_POST['material_ventanas']);
    $incendio->setPuertas($_POST['material_puertas']);
    $incendio->setPropietario($_POST['propietario']);
    $incendio->setValorInmueble($_POST['valor_inmueble']);
    $incendio->setNumResidenciados($_POST['residenciados']);
    $incendio->setNinos($_POST['ninos']);
    $incendio->setAdolescentes($_POST['adolescentes']);
    $incendio->setAdultos($_POST['adultos']);
    $incendio->setInfoAdicional($_POST['info_adicional']);
    $incendio->setAsegurado($_POST['asegurado']);
    $incendio->setAseguradora($_POST['aseguradora']);
    $incendio->setNumPoliza($_POST['numero_poliza']);
    $incendio->setValorAsegurado($_POST['valor_asegurado']);
    $incendio->setValorPerdido($_POST['valor_perdido']);
    $incendio->setValorSalvado($_POST['valor_salvado']);
    $incendio->setFuenteIgnicion($_POST['fuente_ignicion']);
    $incendio->setCausaIncendio($_POST['causa_incendio']);
    $incendio->setLugarInicio($_POST['lugar_inicio']);
    $incendio->setLugarFin($_POST['lugar_fin']);
    $incendio->setReignicion($_POST['reignicion']);
    $incendio->setTipoCombustible($_POST['tipo_combustible']);
    $incendio->setDeclaracion($_POST['declaracion']);
    $incendio->setLesionados($_POST['lesion']);
    $incendio->setNumLesionados($_POST['numero_lesionados']);
    $incendio->setCIPnb($_POST['ci_pnb']);
    $incendio->setCIGnb($_POST['ci_gnb']);
    $incendio->setCIIntt($_POST['ci_intt']);
    $incendio->setCIInvity($_POST['ci_invity']);
    $incendio->setCIPc($_POST['ci_pc']);
    $incendio->setCIOtro($_POST['ci_otros']);
    $incendio->setJefeComision($_POST['jefe_comision']);
    $incendio->setJefeGeneral($_POST['jefe_general']);
    $incendio->setJefeSeccion($_POST['jefe_seccion']);
    $incendio->setComandante($_POST['comandante']);
    $incendio->setActa($_POST['acta']);
    $incendio->setObservaciones($_POST['observaciones']);

    if($_POST['aseguradora'] == ''){$incendio->setAseguradora("Ninguno");}
    else{$incendio->setAseguradora($_POST['aseguradora']);}

    if($_POST['numero_poliza'] == ''){$incendio->setNumPoliza("Ninguno");}
    else{$incendio->setNumPoliza($_POST['numero_poliza']);}

    if($_POST['valor_asegurado'] == ''){$incendio->setValorAsegurado("Ninguno");}
    else{$incendio->setValorAsegurado($_POST['valor_asegurado']);}

    if($_POST['numero_lesionados'] == ''){$incendio->setNumLesionados("Ninguno");}
    else{$incendio->setNumLesionados($_POST['numero_lesionados']);}

    if($_POST['ci_pnb'] == ''){$incendio->setCIPnb("Ninguno");}
    else{$incendio->setCIPnb($_POST['ci_pnb']);}
    
    if($_POST['ci_gnb'] == ''){$incendio->setCIGnb("Ninguno");
    }else{$incendio->setCIGnb($_POST['ci_gnb']);}

    if($_POST['ci_intt'] == ''){$incendio->setCIIntt('Ninguno');}
    else{$incendio->setCIIntt($_POST['ci_intt']);}
    
    if($_POST['ci_invity'] == ''){$incendio->setCIInvity("Ninguno");}
    else{$incendio->setCIInvity($_POST['ci_invity']);}

    if($_POST['ci_pc'] == ''){$incendio->setCIPc("Ninguno");}
    else{$incendio->setCIPc($_POST['ci_pc']);}

    if($_POST['ci_otros'] == ''){$incendio->setCIOtro("Ninguno");}
    else{$incendio->setCIOtro($_POST['ci_otros']);}

    $datos = $incendio->registrarIncendio(
        $incendio->getFecha(),
        $incendio->getSeccion(),
        $incendio->getEstacion(),
        $incendio->getTipoAviso(),
        $incendio->getSolicitante(),
        $incendio->getReceptor(),
        $incendio->getAprobador(),
        $incendio->getHoraAviso(),
        $incendio->getHoraSalida(),
        $incendio->getHoraLlegada(),
        $incendio->getHoraRegreso(),
        $incendio->getLugar(),
        $incendio->getDireccion(),
        $incendio->getParedes(),
        $incendio->getTecho(),
        $incendio->getPiso(),
        $incendio->getVentanas(),
        $incendio->getPuertas(),
        $incendio->getPropietario(),
        $incendio->getValorInmueble(),
        $incendio->getNumResidenciados(),
        $incendio->getNinos(),
        $incendio->getAdolescentes(),
        $incendio->getAdultos(),
        $incendio->getInfoAdicional(),
        $incendio->getAsegurado(),
        $incendio->getAseguradora(),
        $incendio->getNumPoliza(),
        $incendio->getValorAsegurado(),
        $incendio->getValorPerdido(),
        $incendio->getValorSalvado(),
        $incendio->getFuenteIgnicion(),
        $incendio->getCausaIncendio(),
        $incendio->getLugarInicio(),
        $incendio->getLugarFin(),
        $incendio->getReignicion(),
        $incendio->getTipoCombustible(),
        $incendio->getDeclaracion(),
        $incendio->getLesionados(),
        $incendio->getNumLesionados(),
        $incendio->getCIPnb(),
        $incendio->getCIGnb(),
        $incendio->getCIIntt(),
        $incendio->getCIInvity(),
        $incendio->getCIPc(),
        $incendio->getCIOtro(),
        $incendio->getJefeComision(), 
        $incendio->getJefeGeneral(), 
        $incendio->getJefeSeccion(), 
        $incendio->getComandante(),
        $incendio->getActa(),
        $incendio->getObservaciones()
    );

   //EFECTIVOS
   foreach ($_POST['efectivos'] as $cedula) {
    //setters efectivo incidente

    $efectivo->setIdIncidente($datos[1]);
    $efectivo->setTipo("Incendio");
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
    $unidad->setTipo("Incendio");
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
    $recurso->setTipo("Incendio");
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

        $incendio->errorRegistro($datos[1]);

        echo "<script>alert('No se pudo registrar el Incidente')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendio.php'>";
    } else {
        echo "<script>alert('Incendio registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendio.php'>";
    }
}

//MODIFICAR
if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    $incendio->setId($_POST['id']);
    $incendio->setFecha($_POST['parte_diaria']);
    $incendio->setSeccion($_POST['seccion']);
    $incendio->setEstacion($_POST['estacion']);
    $incendio->setTipoAviso($_POST['tipo_aviso']);
    $incendio->setSolicitante($_POST['solicitante']);
    $incendio->setReceptor($_POST['receptor']);
    $incendio->setAprobador($_POST['aprobador']);
    $incendio->setHoraAviso($_POST['hora_aviso']);
    $incendio->setHoraSalida($_POST['hora_salida']);
    $incendio->setHoraLlegada($_POST['hora_llegada']);
    $incendio->setHoraRegreso($_POST['hora_regreso']);
    $incendio->setLugar($_POST['lugar']);
    $incendio->setDireccion($_POST['direccion']);
    $incendio->setParedes($_POST['material_paredes']);
    $incendio->setTecho($_POST['material_techo']);
    $incendio->setPiso($_POST['material_piso']);
    $incendio->setVentanas($_POST['material_ventanas']);
    $incendio->setPuertas($_POST['material_puertas']);
    $incendio->setPropietario($_POST['propietario']);
    $incendio->setValorInmueble($_POST['valor_inmueble']);
    $incendio->setNumResidenciados($_POST['residenciados']);
    $incendio->setNinos($_POST['ninos']);
    $incendio->setAdolescentes($_POST['adolescentes']);
    $incendio->setAdultos($_POST['adultos']);
    $incendio->setInfoAdicional($_POST['info_adicional']);
    $incendio->setAsegurado($_POST['asegurado']);
    $incendio->setAseguradora($_POST['aseguradora']);
    $incendio->setNumPoliza($_POST['numero_poliza']);
    $incendio->setValorAsegurado($_POST['valor_asegurado']);
    $incendio->setValorPerdido($_POST['valor_perdido']);
    $incendio->setValorSalvado($_POST['valor_salvado']);
    $incendio->setFuenteIgnicion($_POST['fuente_ignicion']);
    $incendio->setCausaIncendio($_POST['causa_incendio']);
    $incendio->setLugarInicio($_POST['lugar_inicio']);
    $incendio->setLugarFin($_POST['lugar_fin']);
    $incendio->setReignicion($_POST['reignicion']);
    $incendio->setTipoCombustible($_POST['tipo_combustible']);
    $incendio->setDeclaracion($_POST['declaracion']);
    $incendio->setLesionados($_POST['lesion']);
    $incendio->setNumLesionados($_POST['numero_lesionados']);
    $incendio->setCIPnb($_POST['ci_pnb']);
    $incendio->setCIGnb($_POST['ci_gnb']);
    $incendio->setCIIntt($_POST['ci_intt']);
    $incendio->setCIInvity($_POST['ci_invity']);
    $incendio->setCIPc($_POST['ci_pc']);
    $incendio->setCIOtro($_POST['ci_otros']);
    $incendio->setJefeComision($_POST['jefe_comision']);
    $incendio->setJefeGeneral($_POST['jefe_general']);
    $incendio->setJefeSeccion($_POST['jefe_seccion']);
    $incendio->setComandante($_POST['comandante']);
    $incendio->setActa($_POST['acta']);
    $incendio->setObservaciones($_POST['observaciones']);

    if($_POST['aseguradora'] == ''){$incendio->setAseguradora("Ninguno");}
    else{$incendio->setAseguradora($_POST['aseguradora']);}

    if($_POST['numero_poliza'] == ''){$incendio->setNumPoliza("Ninguno");}
    else{$incendio->setNumPoliza($_POST['numero_poliza']);}

    if($_POST['valor_asegurado'] == ''){$incendio->setValorAsegurado("Ninguno");}
    else{$incendio->setValorAsegurado($_POST['valor_asegurado']);}

    if($_POST['numero_lesionados'] == ''){$incendio->setNumLesionados("Ninguno");}
    else{$incendio->setNumLesionados($_POST['numero_lesionados']);}

    if($_POST['ci_pnb'] == ''){$incendio->setCIPnb("Ninguno");}
    else{$incendio->setCIPnb($_POST['ci_pnb']);}
    
    if($_POST['ci_gnb'] == ''){$incendio->setCIGnb("Ninguno");
    }else{$incendio->setCIGnb($_POST['ci_gnb']);}

    if($_POST['ci_intt'] == ''){$incendio->setCIIntt('Ninguno');}
    else{$incendio->setCIIntt($_POST['ci_intt']);}
    
    if($_POST['ci_invity'] == ''){$incendio->setCIInvity("Ninguno");}
    else{$incendio->setCIInvity($_POST['ci_invity']);}

    if($_POST['ci_pc'] == ''){$incendio->setCIPc("Ninguno");}
    else{$incendio->setCIPc($_POST['ci_pc']);}

    if($_POST['ci_otros'] == ''){$incendio->setCIOtro("Ninguno");}
    else{$incendio->setCIOtro($_POST['ci_otros']);}

    $datos = $incendio->modificarIncendio(
        $incendio->getId(),
        $incendio->getFecha(),
        $incendio->getSeccion(),
        $incendio->getEstacion(),
        $incendio->getTipoAviso(),
        $incendio->getSolicitante(),
        $incendio->getReceptor(),
        $incendio->getAprobador(),
        $incendio->getHoraAviso(),
        $incendio->getHoraSalida(),
        $incendio->getHoraLlegada(),
        $incendio->getHoraRegreso(),
        $incendio->getLugar(),
        $incendio->getDireccion(),
        $incendio->getParedes(),
        $incendio->getTecho(),
        $incendio->getPiso(),
        $incendio->getVentanas(),
        $incendio->getPuertas(),
        $incendio->getPropietario(),
        $incendio->getValorInmueble(),
        $incendio->getNumResidenciados(),
        $incendio->getNinos(),
        $incendio->getAdolescentes(),
        $incendio->getAdultos(),
        $incendio->getInfoAdicional(),
        $incendio->getAsegurado(),
        $incendio->getAseguradora(),
        $incendio->getNumPoliza(),
        $incendio->getValorAsegurado(),
        $incendio->getValorPerdido(),
        $incendio->getValorSalvado(),
        $incendio->getFuenteIgnicion(),
        $incendio->getCausaIncendio(),
        $incendio->getLugarInicio(),
        $incendio->getLugarFin(),
        $incendio->getReignicion(),
        $incendio->getTipoCombustible(),
        $incendio->getDeclaracion(),
        $incendio->getLesionados(),
        $incendio->getNumLesionados(),
        $incendio->getCIPnb(),
        $incendio->getCIGnb(),
        $incendio->getCIIntt(),
        $incendio->getCIInvity(),
        $incendio->getCIPc(),
        $incendio->getCIOtro(),
        $incendio->getJefeComision(), 
        $incendio->getJefeGeneral(), 
        $incendio->getJefeSeccion(), 
        $incendio->getComandante(),
        $incendio->getActa(),
        $incendio->getObservaciones()
    );

    //EFECTIVOS
    foreach ($_POST['efectivos'] as $cedula) {
        //setters vehiculo incidente

        $efectivo->setIdIncidente($_POST['id']);
        $efectivo->setTipo("Abejas");
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
        "Incendio"
    );

    $recurso->eliminarRecurso(
         $_POST['id'],
        "Incendio"
    );

    for($i = 0; $i<count($_POST['recurso']);$i++){
        //setters recurso

        $recurso->setIdIncidente($_POST['id']);
        $recurso->setTipo("Incendio");
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

    //UNIDAD
    foreach ($_POST['unidad'] as $niv) {
        //setters vehiculo incidente

        $unidad->setIdIncidente($_POST['id']);
        $unidad->setTipo("Incendio");
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
        echo "<script>alert('No se pudo modificar el Registro de Incendio')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modal/modalIncendioM.php'>";
    } else {
        echo "<script>alert('Registro de incendio modificado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendio.php'>";
    }
}


// ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $datos = $recurso->restauradorRecurso($txtID, 'Incendio');
    $datos2 = $incendio->errorRegistro($txtID);

    echo "<script>alert('Registro de Incendio Eliminado con Exito')</script>";
    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendio.php'>";
}
