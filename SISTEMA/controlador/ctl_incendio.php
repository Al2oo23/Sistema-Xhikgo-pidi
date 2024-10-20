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

if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {

    $incendio->setFecha($_POST['parte_diaria']); //---> revisado
    $incendio->setSeccion($_POST['seccion']); //---> revisado
    $incendio->setEstacion($_POST['estacion']); //---> revisado
    $incendio->setTipoAviso($_POST['tipo_aviso']); //---> revisado
    $incendio->setSolicitante($_POST['solicitante']); //---> revisado
    $incendio->setReceptor($_POST['receptor']); //---> revisado
    $incendio->setAprobador($_POST['aprobador']); //---> revisado
    $incendio->setHoraAviso($_POST['hora_aviso']); //---> revisado
    $incendio->setHoraSalida($_POST['hora_salida']); //---> revisado
    $incendio->setHoraLlegada($_POST['hora_llegada']); //---> revisado
    $incendio->setHoraRegreso($_POST['hora_regreso']); //---> revisado
    $incendio->setMunicipio($_POST['municipio']); //---> revisado
    $incendio->setLocalidad($_POST['localidad']); //---> revisado
    $incendio->setDireccion($_POST['direccion']); //---> revisado
    $incendio->setParedes($_POST['material_paredes']); //---> revisado
    $incendio->setTecho($_POST['material_techo']); //---> revisado
    $incendio->setPiso($_POST['material_piso']); //---> revisado
    $incendio->setVentanas($_POST['material_ventanas']); //---> revisado
    $incendio->setPuertas($_POST['material_puertas']); //---> revisado
    $incendio->setOtrosMateriales($_POST['otros_materiales']); //---> revisado
    $incendio->setPropietario($_POST['propietario']); //---> revisado
    $incendio->setValorInmueble($_POST['valor_inmueble']); //---> revisado
    $incendio->setNumResidenciados($_POST['residenciados']); //---> revisado
    $incendio->setNinos($_POST['ninos']); //---> revisado
    $incendio->setAdolescentes($_POST['adolescentes']); //---> revisado
    $incendio->setAdultos($_POST['adultos']); //---> revisado
    $incendio->setInfoAdicional($_POST['info_adicional']); //---> revisado
    $incendio->setAsegurado($_POST['asegurado']); //---> revisado
    $incendio->setAseguradora($_POST['aseguradora']); //---> revisado
    $incendio->setNumPoliza($_POST['numero_poliza']); //---> revisado
    $incendio->setValorAsegurado($_POST['valor_asegurado']); //---> revisado
    $incendio->setValorPerdido($_POST['valor_perdido']); //---> revisado
    $incendio->setValorSalvado($_POST['valor_salvado']); //---> revisado
    $incendio->setFuenteIgnicion($_POST['fuente_ignicion']); //---> revisado
    $incendio->setCausaIncendio($_POST['causa_incendio']); //---> revisado
    $incendio->setLugarInicio($_POST['lugar_inicio']); //---> revisado
    $incendio->setLugarFin($_POST['lugar_fin']); //---> revisado
    $incendio->setReignicion($_POST['reignicion']); //---> revisado
    $incendio->setTipoCombustible($_POST['tipo_combustible']); //---> revisado
    $incendio->setDeclaracion($_POST['declaracion']); //---> revisado
    $incendio->setLesionados($_POST['lesion']); //---> revisado
    $incendio->setNumLesionados($_POST['numero_lesionados']); //---> revisado
    $incendio->setDatosLesionados($_POST['cedula_lesionado']); //---> revisado
    $incendio->setJefeComision($_POST['jefe_comision']); //---> revisado
    $incendio->setCIPnb($_POST['ci_pnb']); //---> revisado
    $incendio->setCIGnb($_POST['ci_gnb']); //---> revisado
    $incendio->setCIIntt($_POST['ci_intt']); //---> revisado
    $incendio->setCIInvity($_POST['ci_invity']); //---> revisado
    $incendio->setCIPc($_POST['ci_pc']); //---> revisado
    $incendio->setCIOtro($_POST['ci_otros']); //---> revisado
    $incendio->setObservaciones($_POST['observaciones']); //---> revisado

    $datos = $incendio->registrarIncendio(
        $incendio->getFecha(), //---> revisado
        $incendio->getSeccion(), //---> revisado
        $incendio->getEstacion(), //---> revisado
        $incendio->getTipoAviso(), //---> revisado
        $incendio->getSolicitante(), //---> revisado
        $incendio->getReceptor(), //---> revisado
        $incendio->getAprobador(), //---> revisado
        $incendio->getHoraAviso(), //---> revisado
        $incendio->getHoraSalida(), //---> revisado
        $incendio->getHoraLlegada(), //---> revisado
        $incendio->getHoraRegreso(), //---> revisado
        $incendio->getMunicipio(), //---> revisado
        $incendio->getLocalidad(), //---> revisado
        $incendio->getDireccion(), //---> revisado
        $incendio->getParedes(), //---> revisado
        $incendio->getTecho(), //---> revisado
        $incendio->getPiso(), //---> revisado
        $incendio->getVentanas(), //---> revisado
        $incendio->getPuertas(), //---> revisado
        $incendio->getOtrosMateriales(), //---> revisado
        $incendio->getPropietario(), //---> revisado
        $incendio->getValorInmueble(), //---> revisado
        $incendio->getNumResidenciados(), //---> revisado
        $incendio->getNinos(), //---> revisado
        $incendio->getAdolescentes(), //---> revisado
        $incendio->getAdultos(), //---> revisado
        $incendio->getInfoAdicional(), //---> revisado
        $incendio->getAsegurado(), //---> revisado
        $incendio->getAseguradora(), //---> revisado
        $incendio->getNumPoliza(), //---> revisado
        $incendio->getValorAsegurado(), //---> revisado
        $incendio->getValorPerdido(), //---> revisado
        $incendio->getValorSalvado(), //---> revisado
        $incendio->getFuenteIgnicion(), //---> revisado
        $incendio->getCausaIncendio(), //---> revisado
        $incendio->getLugarInicio(), //---> revisado
        $incendio->getLugarFin(), //---> revisado
        $incendio->getReignicion(), //---> revisado
        $incendio->getTipoCombustible(), //---> revisado
        $incendio->getDeclaracion(), //---> revisado
        $incendio->getLesionados(), //---> revisado
        $incendio->getNumLesionados(), //---> revisado
        $incendio->getDatosLesionados(), //---> revisado
        $incendio->getJefeComision(), //---> revisado
        $incendio->getCIPnb(), //---> revisado
        $incendio->getCIGnb(), //---> revisado
        $incendio->getCIIntt(), //---> revisado
        $incendio->getCIInvity(), //---> revisado
        $incendio->getCIPc(), //---> revisado
        $incendio->getCIOtro(), //---> revisado
        $incendio->getObservaciones() //---> revisado
    );

    //EFECTIVOS
    foreach ($_POST['efectivos'] as $cedula) {
        //setters vehiculo incidente

        $efectivo->setIdIncidente($datos[1]);
        $efectivo->setTipo("Incendio");
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
        $recurso->setTipo("Incendio");
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
        $unidad->setTipo("Incendio");
        $unidad->setNiv($niv);

        //getters vehiculo incidente

        $resultadoUnidad = $unidad->agregarUnidad(
            $unidad->getIdIncidente(),
            $unidad->getTipo(),
            $unidad->getNiv()
        );
    }


    if (!$datos) {
        echo "<script>alert('No se pudo registrat el Incendio')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendio.php'>";
    } else {
        echo "<script>alert('Incendio registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendio.php'>";
    }
}

//MODIFICAR
if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    $incendio->setId($_POST['id']); //---> revisado
    $incendio->setFecha($_POST['parte_diaria']); //---> revisado
    $incendio->setSeccion($_POST['seccion']); //---> revisado
    $incendio->setEstacion($_POST['estacion']); //---> revisado
    $incendio->setTipoAviso($_POST['tipo_aviso']); //---> revisado
    $incendio->setSolicitante($_POST['solicitante']); //---> revisado
    $incendio->setReceptor($_POST['receptor']); //---> revisado
    $incendio->setAprobador($_POST['aprobador']); //---> revisado
    $incendio->setHoraAviso($_POST['hora_aviso']); //---> revisado
    $incendio->setHoraSalida($_POST['hora_salida']); //---> revisado
    $incendio->setHoraLlegada($_POST['hora_llegada']); //---> revisado
    $incendio->setHoraRegreso($_POST['hora_regreso']); //---> revisado
    $incendio->setMunicipio($_POST['municipio']); //---> revisado
    $incendio->setLocalidad($_POST['localidad']); //---> revisado
    $incendio->setDireccion($_POST['direccion']); //---> revisado
    $incendio->setParedes($_POST['material_paredes']); //---> revisado
    $incendio->setTecho($_POST['material_techo']); //---> revisado
    $incendio->setPiso($_POST['material_piso']); //---> revisado
    $incendio->setVentanas($_POST['material_ventanas']); //---> revisado
    $incendio->setPuertas($_POST['material_puertas']); //---> revisado
    $incendio->setOtrosMateriales($_POST['otros_materiales']); //---> revisado
    $incendio->setPropietario($_POST['propietario']); //---> revisado
    $incendio->setValorInmueble($_POST['valor_inmueble']); //---> revisado
    $incendio->setNumResidenciados($_POST['residenciados']); //---> revisado
    $incendio->setNinos($_POST['ninos']); //---> revisado
    $incendio->setAdolescentes($_POST['adolescentes']); //---> revisado
    $incendio->setAdultos($_POST['adultos']); //---> revisado
    $incendio->setInfoAdicional($_POST['info_adicional']); //---> revisado
    $incendio->setAsegurado($_POST['asegurado']); //---> revisado
    $incendio->setAseguradora($_POST['aseguradora']); //---> revisado
    $incendio->setNumPoliza($_POST['numero_poliza']); //---> revisado
    $incendio->setValorAsegurado($_POST['valor_asegurado']); //---> revisado
    $incendio->setValorPerdido($_POST['valor_perdido']); //---> revisado
    $incendio->setValorSalvado($_POST['valor_salvado']); //---> revisado
    $incendio->setFuenteIgnicion($_POST['fuente_ignicion']); //---> revisado
    $incendio->setCausaIncendio($_POST['causa_incendio']); //---> revisado
    $incendio->setLugarInicio($_POST['lugar_inicio']); //---> revisado
    $incendio->setLugarFin($_POST['lugar_fin']); //---> revisado
    $incendio->setReignicion($_POST['reignicion']); //---> revisado
    $incendio->setTipoCombustible($_POST['tipo_combustible']); //---> revisado
    $incendio->setDeclaracion($_POST['declaracion']); //---> revisado
    $incendio->setLesionados($_POST['lesion']); //---> revisado
    $incendio->setNumLesionados($_POST['numero_lesionados']); //---> revisado
    $incendio->setDatosLesionados($_POST['cedula_lesionado']); //---> revisado
    $incendio->setJefeComision($_POST['jefe_comision']); //---> revisado
    $incendio->setCIPnb($_POST['ci_pnb']); //---> revisado
    $incendio->setCIGnb($_POST['ci_gnb']); //---> revisado
    $incendio->setCIIntt($_POST['ci_intt']); //---> revisado
    $incendio->setCIInvity($_POST['ci_invity']); //---> revisado
    $incendio->setCIPc($_POST['ci_pc']); //---> revisado
    $incendio->setCIOtro($_POST['ci_otros']); //---> revisado
    $incendio->setObservaciones($_POST['observaciones']); //---> revisado

    $datos = $incendio->modificarIncedio(
        $incendio->getId(), //---> revisado
        $incendio->getFecha(), //---> revisado
        $incendio->getSeccion(), //---> revisado
        $incendio->getEstacion(), //---> revisado
        $incendio->getTipoAviso(), //---> revisado
        $incendio->getSolicitante(), //---> revisado
        $incendio->getReceptor(), //---> revisado
        $incendio->getAprobador(), //---> revisado
        $incendio->getHoraAviso(), //---> revisado
        $incendio->getHoraSalida(), //---> revisado
        $incendio->getHoraLlegada(), //---> revisado
        $incendio->getHoraRegreso(), //---> revisado
        $incendio->getMunicipio(), //---> revisado
        $incendio->getLocalidad(), //---> revisado
        $incendio->getDireccion(), //---> revisado
        $incendio->getParedes(), //---> revisado
        $incendio->getTecho(), //---> revisado
        $incendio->getPiso(), //---> revisado
        $incendio->getVentanas(), //---> revisado
        $incendio->getPuertas(), //---> revisado
        $incendio->getOtrosMateriales(), //---> revisado
        $incendio->getPropietario(), //---> revisado
        $incendio->getValorInmueble(), //---> revisado
        $incendio->getNumResidenciados(), //---> revisado
        $incendio->getNinos(), //---> revisado
        $incendio->getAdolescentes(), //---> revisado
        $incendio->getAdultos(), //---> revisado
        $incendio->getInfoAdicional(), //---> revisado
        $incendio->getAsegurado(), //---> revisado
        $incendio->getAseguradora(), //---> revisado
        $incendio->getNumPoliza(), //---> revisado
        $incendio->getValorAsegurado(), //---> revisado
        $incendio->getValorPerdido(), //---> revisado
        $incendio->getValorSalvado(), //---> revisado
        $incendio->getFuenteIgnicion(), //---> revisado
        $incendio->getCausaIncendio(), //---> revisado
        $incendio->getLugarInicio(), //---> revisado
        $incendio->getLugarFin(), //---> revisado
        $incendio->getReignicion(), //---> revisado
        $incendio->getTipoCombustible(), //---> revisado
        $incendio->getDeclaracion(), //---> revisado
        $incendio->getLesionados(), //---> revisado
        $incendio->getNumLesionados(), //---> revisado
        $incendio->getDatosLesionados(), //---> revisado
        $incendio->getJefeComision(), //---> revisado
        $incendio->getCIPnb(), //---> revisado
        $incendio->getCIGnb(), //---> revisado
        $incendio->getCIIntt(), //---> revisado
        $incendio->getCIInvity(), //---> revisado
        $incendio->getCIPc(), //---> revisado
        $incendio->getCIOtro(), //---> revisado
        $incendio->getObservaciones() //---> revisado
    );

    //EFECTIVOS
    foreach ($_POST['efectivos'] as $cedula) {
        //setters vehiculo incidente

        $efectivo->setIdIncidente($_POST['id']);
        $efectivo->setTipo("Incendio");
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
    for($i = 0; $i<count($_POST['recurso']);$i++){
        //setters vehiculo incidente

    $recurso->setIdIncidente($_POST['id']);
        $recurso->setTipo("Incendio");
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


//ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM incendio WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

     // BITACORA
                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó Incendio", $fecha]);


    echo "<script>alert('Registro de Incendio Eliminado con Exito')</script>";
    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendio.php'>";
}
