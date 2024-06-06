<?php
include('../modelo/conexion.php');
require('../modelo/clase_incendio.php');

$incendio = new incendio();

print_r($_POST);


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
    $incendio->setMunicipio($_POST['municipio']);
    $incendio->setLocalidad($_POST['localidad']);
    $incendio->setDireccion($_POST['direccion']);
    $incendio->setParedes($_POST['material_paredes']);
    $incendio->setTecho($_POST['material_techo']);
    $incendio->setPiso($_POST['material_piso']);
    $incendio->setVentanas($_POST['material_ventanas']);
    $incendio->setPuertas($_POST['material_puertas']);
    $incendio->setOtrosMateriales($_POST['otros_materiales']);
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
    $incendio->setRecursoUtilizado($_POST['recurso_utilizado']);
    $incendio->setCantidadRecursoUsado($_POST['cantidad_recurso']);
    $incendio->setUnidad($_POST['unidad']);
    $incendio->setJefeComision($_POST['jefe_comision']);
    $incendio->setEfectivo($_POST['efectivo']);
    $incendio->setCIPnb($_POST['ci_pnb']);
    $incendio->setCIGnb($_POST['ci_gnb']);
    $incendio->setCIIntt($_POST['ci_intt']);
    $incendio->setCIInvity($_POST['ci_invity']);
    $incendio->setCIPc($_POST['ci_pc']);
    $incendio->setCIOtro($_POST['ci_otros']);
    $incendio->setObservaciones($_POST['observaciones']);

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
        $incendio->getMunicipio(),
        $incendio->getLocalidad(),
        $incendio->getDireccion(),
        $incendio->getParedes(),
        $incendio->getTecho(),
        $incendio->getPiso(),
        $incendio->getVentanas(),
        $incendio->getPuertas(),
        $incendio->getOtrosMateriales(),
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
        $incendio->getDatosLesionados(),
        $incendio->getRecursoUtilizado(),
        $incendio->getCantidadRecursoUsado(),
        $incendio->getUnidad(),
        $incendio->getJefeComision(),
        $incendio->getEfectivo(),
        $incendio->getCIPnb(),
        $incendio->getCIGnb(),
        $incendio->getCIIntt(),
        $incendio->getCIInvity(),
        $incendio->getCIPc(),
        $incendio->getCIOtro(),
        $incendio->getObservaciones()
    );


    if (!$datos) {
        echo "<script>alert('No se pudo registrat el Incendio')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendio.php'>";
    } else {
        echo "<script>alert('Recurso modificado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendio.php'>";
    }
}
