<?php
session_start();
include('../modelo/conexion.php');
require('../modelo/clase_incendioVehiculo.php');
include("../modelo/clase_efectivo.php");
include("../modelo/clase_recursoAsignado.php");
include("../modelo/clase_unidadAsignada.php");

$incendio_vehiculo = new Incendio_vehiculo();
$efectivo = new efectivo();
$recurso = new recursoAsignado();
$unidad = new unidad();

// REGISTRAR INCIDENTE DE vehiculo -------------------------------------------

if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {

    $incendio_vehiculo->setFecha($_POST['fecha']);
    $incendio_vehiculo->setSeccion($_POST['seccion']);
    $incendio_vehiculo->setEstacion($_POST['estacion']);
    $incendio_vehiculo->setTipoAviso($_POST['tipo_aviso']);
    $incendio_vehiculo->setHaviso($_POST['hora_aviso']);
    $incendio_vehiculo->setHsalida($_POST['hora_salida']);
    $incendio_vehiculo->setHllegada($_POST['hora_llegada']);
    $incendio_vehiculo->setHregreso($_POST['hora_regreso']);
    $incendio_vehiculo->setLugar($_POST['lugar']);
    $incendio_vehiculo->setDireccion($_POST['direccion']);
    $incendio_vehiculo->setModelo($_POST['modelo']);
    $incendio_vehiculo->setMarca($_POST['marca']);
    $incendio_vehiculo->setAño($_POST['año']);
    $incendio_vehiculo->setPlaca($_POST['placa']);
    $incendio_vehiculo->setSerial($_POST['serial']);
    $incendio_vehiculo->setColor($_POST['color']);
    $incendio_vehiculo->setPuestos($_POST['puestos']);
    $incendio_vehiculo->setPropietario($_POST['propietario']);
    $incendio_vehiculo->setCi_propietario($_POST['ci_propietario']);
    $incendio_vehiculo->setValor($_POST['valor']);
    $incendio_vehiculo->setConductor($_POST['conductor']);
    $incendio_vehiculo->setCi_conductor($_POST['ci_conductor']);
    $incendio_vehiculo->setAseguradora($_POST['aseguradora']);
    $incendio_vehiculo->setVigencia($_POST['vigencia']);
    $incendio_vehiculo->setInicio($_POST['inicio']);
    $incendio_vehiculo->setIgnicion($_POST['ignicion']);
    $incendio_vehiculo->setCulmino($_POST['culmino']);
    $incendio_vehiculo->setCausa($_POST['causa']);
    $incendio_vehiculo->setH_reignicion($_POST['h_reignicion']);
    $incendio_vehiculo->setClase($_POST['clase']);
    $incendio_vehiculo->setDeclaracion($_POST['declaracion']);
    $incendio_vehiculo->setH_lesionados($_POST['h_lesionados']);
    $incendio_vehiculo->setLesionados($_POST['lesionados']);
    $incendio_vehiculo->setActa($_POST['acta']);
    $incendio_vehiculo->setObservaciones($_POST['observaciones']);
    $incendio_vehiculo->setJefe($_POST['jefe']);
    $incendio_vehiculo->setGral_servicios($_POST['gral_servicios']);
    $incendio_vehiculo->setJefe_deseccion($_POST['jefe_deseccion']);
    $incendio_vehiculo->setComandante($_POST['comandante']);
    $incendio_vehiculo->setCi_pnb($_POST['ci_pnb']);
    $incendio_vehiculo->setCi_gnb($_POST['ci_gnb']);
    $incendio_vehiculo->setCi_intt($_POST['ci_intt']);
    $incendio_vehiculo->setCi_invity($_POST['ci_invity']);
    $incendio_vehiculo->setCi_pc($_POST['ci_pc']);
    $incendio_vehiculo->setCi_otro($_POST['ci_otro']);
    
    $datos = $incendio_vehiculo->registrarIncendio_vehiculo(
        $incendio_vehiculo->getFecha(),
        $incendio_vehiculo->getSeccion(),
        $incendio_vehiculo->getEstacion(),
        $incendio_vehiculo->getTipoAviso(),
        $incendio_vehiculo->getHaviso(),
        $incendio_vehiculo->getHsalida(),
        $incendio_vehiculo->getHllegada(),
        $incendio_vehiculo->getHregreso(),
        $incendio_vehiculo->getLugar(),
        $incendio_vehiculo->getDireccion(),
        $incendio_vehiculo->getModelo(),
        $incendio_vehiculo->getMarca(),
        $incendio_vehiculo->getAño(),
        $incendio_vehiculo->getPlaca(),
        $incendio_vehiculo->getSerial(),
        $incendio_vehiculo->getColor(),
        $incendio_vehiculo->getPuestos(),
        $incendio_vehiculo->getPropietario(),
        $incendio_vehiculo->getCi_propietario(),
        $incendio_vehiculo->getValor(),
        $incendio_vehiculo->getConductor(),
        $incendio_vehiculo->getCi_conductor(),
        $incendio_vehiculo->getAseguradora(),
        $incendio_vehiculo->getVigencia(),
        $incendio_vehiculo->getInicio(),
        $incendio_vehiculo->getIgnicion(),
        $incendio_vehiculo->getCulmino(),
        $incendio_vehiculo->getCausa(),
        $incendio_vehiculo->getH_reignicion(),
        $incendio_vehiculo->getClase(),
        $incendio_vehiculo->getDeclaracion(),
        $incendio_vehiculo->getH_lesionados(),
        $incendio_vehiculo->getLesionados(),
        $incendio_vehiculo->getActa(),
        $incendio_vehiculo->getObservaciones(),
        $incendio_vehiculo->getJefe(),
        $incendio_vehiculo->getGral_servicios(),
        $incendio_vehiculo->getJefe_deseccion(),
        $incendio_vehiculo->getComandante(),
        $incendio_vehiculo->getCi_pnb(),
        $incendio_vehiculo->getCi_gnb(),
        $incendio_vehiculo->getCi_intt(),
        $incendio_vehiculo->getCi_invity(),
        $incendio_vehiculo->getCi_pc(),
        $incendio_vehiculo->getCi_otro()
    );
     //EFECTIVOS
     foreach ($_POST['efectivos'] as $cedula) {
        //setters vehiculo incidente

        $efectivo->setIdIncidente($datos[1]);
        $efectivo->setTipo("Incendio Vehiculo");
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

    //UNIDAD
    foreach ($_POST['unidad'] as $niv) {
        //setters vehiculo incidente

        $unidad->setIdIncidente($datos[1]);
        $unidad->setTipo("incendio vehiculo");
        $unidad->setNiv($niv);

        //getters vehiculo incidente

        $resultadoUnidad = $unidad->agregarUnidad(
            $unidad->getIdIncidente(),
            $unidad->getTipo(),
            $unidad->getNiv()
        );
    }


    if (empty($datos[0])) {
        echo "<script>alert('No se pudo registrar el Incidente')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendioVehiculo.php'>";
    } else {
        echo "<script>alert('Incidente registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendioVehiculo.php'>";
    }   
}



// MODIFICAR INCIDENTE DE incendio Vehiculo------------------------------------------

if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    $incendio_vehiculo->setId($_POST['id']);
    $incendio_vehiculo->setFecha($_POST['fecha']);
    $incendio_vehiculo->setSeccion($_POST['seccion']);
    $incendio_vehiculo->setEstacion($_POST['estacion']);
    $incendio_vehiculo->setTipoAviso($_POST['tipo_aviso']);
    $incendio_vehiculo->setHaviso($_POST['hora_aviso']);
    $incendio_vehiculo->setHsalida($_POST['hora_salida']);
    $incendio_vehiculo->setHllegada($_POST['hora_llegada']);
    $incendio_vehiculo->setHregreso($_POST['hora_regreso']);
    $incendio_vehiculo->setLugar($_POST['lugar']);
    $incendio_vehiculo->setDireccion($_POST['direccion']);
    $incendio_vehiculo->setModelo($_POST['modelo']);
    $incendio_vehiculo->setMarca($_POST['marca']);
    $incendio_vehiculo->setAño($_POST['año']);
    $incendio_vehiculo->setPlaca($_POST['placa']);
    $incendio_vehiculo->setSerial($_POST['serial']);
    $incendio_vehiculo->setColor($_POST['color']);
    $incendio_vehiculo->setPuestos($_POST['puestos']);
    $incendio_vehiculo->setPropietario($_POST['propietario']);
    $incendio_vehiculo->setCi_propietario($_POST['ci_propietario']);
    $incendio_vehiculo->setValor($_POST['valor']);
    $incendio_vehiculo->setConductor($_POST['conductor']);
    $incendio_vehiculo->setCi_conductor($_POST['ci_conductor']);
    $incendio_vehiculo->setAseguradora($_POST['aseguradora']);
    $incendio_vehiculo->setVigencia($_POST['vigencia']);
    $incendio_vehiculo->setInicio($_POST['inicio']);
    $incendio_vehiculo->setIgnicion($_POST['ignicion']);
    $incendio_vehiculo->setCulmino($_POST['culmino']);
    $incendio_vehiculo->setCausa($_POST['causa']);
    $incendio_vehiculo->setH_reignicion($_POST['h_reignicion']);
    $incendio_vehiculo->setClase($_POST['clase']);
    $incendio_vehiculo->setDeclaracion($_POST['declaracion']);
    $incendio_vehiculo->setH_lesionados($_POST['h_lesionados']);
    $incendio_vehiculo->setLesionados($_POST['lesionados']);
    $incendio_vehiculo->setActa($_POST['acta']);
    $incendio_vehiculo->setObservaciones($_POST['observaciones']);
    $incendio_vehiculo->setJefe($_POST['jefe']);
    $incendio_vehiculo->setGral_servicios($_POST['gral_servicios']);
    $incendio_vehiculo->setJefe_deseccion($_POST['jefe_deseccion']);
    $incendio_vehiculo->setComandante($_POST['comandante']);
    $incendio_vehiculo->setCi_pnb($_POST['ci_pnb']);
    $incendio_vehiculo->setCi_gnb($_POST['ci_gnb']);
    $incendio_vehiculo->setCi_intt($_POST['ci_intt']);
    $incendio_vehiculo->setCi_invity($_POST['ci_invity']);
    $incendio_vehiculo->setCi_pc($_POST['ci_pc']);
    $incendio_vehiculo->setCi_otro($_POST['ci_otro']);
    
    $datos = $incendio_vehiculo->modificarIncendio_vehiculo(
        $incendio_vehiculo->getId(),
        $incendio_vehiculo->getFecha(),
        $incendio_vehiculo->getSeccion(),
        $incendio_vehiculo->getEstacion(),
        $incendio_vehiculo->getTipoAviso(),
        $incendio_vehiculo->getHaviso(),
        $incendio_vehiculo->getHsalida(),
        $incendio_vehiculo->getHllegada(),
        $incendio_vehiculo->getHregreso(),
        $incendio_vehiculo->getLugar(),
        $incendio_vehiculo->getDireccion(),
        $incendio_vehiculo->getModelo(),
        $incendio_vehiculo->getMarca(),
        $incendio_vehiculo->getAño(),
        $incendio_vehiculo->getPlaca(),
        $incendio_vehiculo->getSerial(),
        $incendio_vehiculo->getColor(),
        $incendio_vehiculo->getPuestos(),
        $incendio_vehiculo->getPropietario(),
        $incendio_vehiculo->getCi_propietario(),
        $incendio_vehiculo->getValor(),
        $incendio_vehiculo->getConductor(),
        $incendio_vehiculo->getCi_conductor(),
        $incendio_vehiculo->getAseguradora(),
        $incendio_vehiculo->getVigencia(),
        $incendio_vehiculo->getInicio(),
        $incendio_vehiculo->getIgnicion(),
        $incendio_vehiculo->getCulmino(),
        $incendio_vehiculo->getCausa(),
        $incendio_vehiculo->getH_reignicion(),
        $incendio_vehiculo->getClase(),
        $incendio_vehiculo->getDeclaracion(),
        $incendio_vehiculo->getH_lesionados(),
        $incendio_vehiculo->getLesionados(),
        $incendio_vehiculo->getActa(),
        $incendio_vehiculo->getObservaciones(),
        $incendio_vehiculo->getJefe(),
        $incendio_vehiculo->getGral_servicios(),
        $incendio_vehiculo->getJefe_deseccion(),
        $incendio_vehiculo->getComandante(),
        $incendio_vehiculo->getCi_pnb(),
        $incendio_vehiculo->getCi_gnb(),
        $incendio_vehiculo->getCi_intt(),
        $incendio_vehiculo->getCi_invity(),
        $incendio_vehiculo->getCi_pc(),
        $incendio_vehiculo->getCi_otro()
    );
   
       //EFECTIVOS
       foreach ($_POST['efectivos'] as $cedula) {
        //setters vehiculo incidente

        $efectivo->setIdIncidente($_POST['id']);
        $efectivo->setTipo("incendio_vehiculo");
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
        "Incendio_vehiculo"
    );

    for($i = 0; $i<count($_POST['recurso']);$i++){
        //setters vehiculo incidente

    $recurso->setIdIncidente($_POST['id']);
        $recurso->setTipo("incendio_vehiculo");
        $recurso->setIdRecurso($_POST['recurso'][$i]);
        $recurso->setCantidad($_POST['cantidad'][$i]);

        // getters vehiculo incidente

        $recurso->eliminarRecurso(
            $recurso->getIdIncidente(),
            $recurso->getTipo("Incendio_vehiculo")
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
        $unidad->setTipo("incendio_vehiculo");
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
        echo "<script>alert('No se pudo modificar el Incidente')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendioVehiculo.php'>";
    } else {
        echo "<script>alert('Incidente modificado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendioVehiculo.php'>";
    }   
}




// ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM incendio_vehiculo WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    echo "<script>alert('Incidente Eliminado con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoIncendioVehiculo.php'>"; 
}
