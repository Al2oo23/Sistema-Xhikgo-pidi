<?php
session_start();
include('../modelo/conexion.php');
include('../modelo/clase_privilegio.php');
$privilegio = new privilegio();

//REGISTRAR
if (isset($_POST['agregar']) && $_POST['agregar'] == 'agregar') {

    $privilegio->setCedula($_POST['cedula']);

    if(isset($_POST['insti'])){
        $privilegio->setInsti("si");
    }else{
        $privilegio->setInsti("no");
    }
    if(isset($_POST['confi'])){
        $privilegio->setConfi("si");
    }else{
        $privilegio->setConfi("no");
    }
    if(isset($_POST['municipio'])){
        $privilegio->setMunicipio("si");
    }else{
        $privilegio->setMunicipio("no");
    }
    if(isset($_POST['lugar'])){
        $privilegio->setlugar("si");
    }else{
        $privilegio->setLugar("no");
    }
    if(isset($_POST['estacion'])){
        $privilegio->setEstacion("si");
    }else{
        $privilegio->setEstacion("no");
    }
    if(isset($_POST['seccion'])){
        $privilegio->setSeccion("si");
    }else{
        $privilegio->setSeccion("no");
    }
    if(isset($_POST['tipoPersona'])){
        $privilegio->setTipoPersona("si");
    }else{
        $privilegio->setTipoPersona("no");
    }
    if(isset($_POST['cargo'])){
        $privilegio->setCargo("si");
    }else{
        $privilegio->setCargo("no");
    }
    if(isset($_POST['persona'])){
        $privilegio->setPersona("si");
    }else{
        $privilegio->setPersona("no");
    }
    if(isset($_POST['usuario'])){
        $privilegio->setUsuario("si");
    }else{
        $privilegio->setUsuario("no");
    }
    if(isset($_POST['aseguradora'])){
        $privilegio->setAseguradora("si");
    }else{
        $privilegio->setAseguradora("no");
    }
    if(isset($_POST['marcas'])){
        $privilegio->setMarca("si");
    }else{
        $privilegio->setMarca("no");
    }
    if(isset($_POST['modelo'])){
        $privilegio->setModelo("si");
    }else{
        $privilegio->setModelo("no");
    }
    if(isset($_POST['vehiculo'])){
        $privilegio->setVehiculo("si");
    }else{
        $privilegio->setVehiculo("no");
    }
    if(isset($_POST['mantenimiento'])){
        $privilegio->setMantenimiento("si");
    }else{
        $privilegio->setMantenimiento("no");
    }
    if(isset($_POST['recurso'])){
        $privilegio->setRecurso("si");
    }else{
        $privilegio->setRecurso("no");
    }
    if(isset($_POST['incidente'])){
        $privilegio->setIncidente("si");
    }else{
        $privilegio->setIncidente("no");
    }

    $resultado = $privilegio->modificarPriv(
        $privilegio->getCedula(),
        $privilegio->getInsti(),
        $privilegio->getConfi(),
        $privilegio->getMunicipio(),
        $privilegio->getLugar(),
        $privilegio->getEstacion(),
        $privilegio->getSeccion(),
        $privilegio->getTipoPersona(),
        $privilegio->getCargo(),
        $privilegio->getPersona(),
        $privilegio->getUsuario(),
        $privilegio->getAseguradora(),
        $privilegio->getMarca(),
        $privilegio->getModelo(),
        $privilegio->getVehiculo(),
        $privilegio->getMantenimiento(),
        $privilegio->getRecurso(),
        $privilegio->getIncidente()
    );

    if(empty($resultado)){
        echo "<script>alert('Registro Fallido')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/privilegios.php'>";
    } else {
        echo "<script>alert('Registro Exitoso!')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/privilegios.php'>";
    }
}
