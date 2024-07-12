<?php
session_start();
include ("../modelo/conexion.php");
include ("../modelo/clase_institucion.php");
$institucion = new Institucion();

if (isset($_POST['registrar']) && $_POST['registrar'] == "registrar") {

    $institucion->setNombre($_POST['nombre']);
    $institucion->setRif($_POST['rif']);
    $institucion->setDescripcion($_POST['descripcion']);

    $firma = '';
    $logo = '';
    if (isset($_FILES["logo"]) && isset($_FILES["firma"])) {
        $logo = $_FILES["logo"];
        $firma = $_FILES["firma"];
    } else {
        echo "<script>alert('Debe seleccionar un logo y una firma')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/datosInstitucion.php'>";
    }

    $nombre_logo = $logo["name"];
    $nombre_firma = $firma["name"];
    $ruta_provisional_firma = $firma["tmp_name"];
    $ruta_provisional_logo = $logo["tmp_name"];
    //estos son datos para validar el tamañano y el tipo de documento
    // $tipo = $file["type"];
    // $size = $file["size"];
    // $dimensiones = getimagesize($ruta_provisional);
    // $width = $dimensiones[0];
    // $height = $dimensiones[1];
    $carpeta_logo = "../recursos/logos/";
    $carpeta_firma = "../recursos/firmas/";
    $srcl = $carpeta_logo . $nombre_logo;
    $srcf = $carpeta_firma . $nombre_firma;
    move_uploaded_file($ruta_provisional_firma, $srcf);
    move_uploaded_file($ruta_provisional_logo, $srcl);

    $datos = $institucion->registrarInstitucion(
        $institucion->getNombre(),
        $institucion->getRif(),
        $institucion->getDescripcion(),
        $srcl,
        $srcf
    );
    

    if (empty($datos)) {
        echo "<script>alert('No se pudo registrar a la Institucion')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/datosInstitucion.php'>";
    } else {
        echo "<script>alert('Institucion registrada con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/datosInstitucion.php'>";
    }

}
