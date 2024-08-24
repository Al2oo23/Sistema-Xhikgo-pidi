<?php
include('../modelo/conexion.php');
include('../modelo/clase_asigIncidente.php');
$incidenteAsig = new asigIncidente();

//REGISTRAR
if (isset($_POST['asignar']) && $_POST['asignar'] == 'asignar') {

    $incidenteAsig->setCedula($_POST['cedula']);
    $incidenteAsig->setIncidente($_POST['incidente']);
    

    $resultado = $incidenteAsig->registrarAsignacion($incidenteAsig->getCedula(), $incidenteAsig->getIncidente());

    if (!$resultado) {
        echo "<script>alert('No se pudo registrar')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modal.php'>";
    } else {
        echo "<script>alert('registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogo.php'>";
    }
}