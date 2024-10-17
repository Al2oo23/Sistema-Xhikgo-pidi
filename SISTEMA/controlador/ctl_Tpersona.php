<?php
session_start();
include('../modelo/conexion.php');
include('../modelo/clase_Tpersona.php');
$Tpersona = new Tpersona();

//REGISTRAR
if (isset($_POST['registrar']) && $_POST['registrar'] == 'registrar') {
    $Tpersona->setTipo($_POST['tipo_persona']);
    $Tpersona->setDescripcion($_POST['descripcion']);

    $resultado = $Tpersona->registrarTpersona($Tpersona->getTipo(), $Tpersona->getDescripcion());

    if (!$resultado) {
        echo "<script>alert('No se pudo registrar el Tipo de Persona')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modalTpersonaR.php'>";
    } else {
        echo "<script>alert('Tipo de Persona registrado con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>";
    }
}


//MODIFICAR
if (isset($_POST['modificar']) && $_POST['modificar'] == 'modificar') {

    $Tpersona->setId($_POST['id']);
    $Tpersona->setTipo($_POST['tipo_persona']);
    $Tpersona->setDescripcion($_POST['descripcion']);

    $resultado = $Tpersona->modificarTpersona($Tpersona->getId(), $Tpersona->getTipo(), $Tpersona->getDescripcion());

    if (!$resultado) {
        echo "<script>alert('No se pudo modificar el Tipo de Persona')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/modal/modalTpersonaM.php'>";
    } else {
        echo "<script>alert('Tipo de Persona modificada con exito')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>";
    }
}

//ELIMINAR
if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';

    $sentencia = $conexion->prepare("DELETE FROM tipo_persona WHERE id = ?");
    $sentencia->bindParam(1, $txtID, PDO::PARAM_INT);
    $sentencia->execute();

      // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó  Tipo de Persona con el ID".$txtID, $fecha]);

    echo "<script>alert('Tipo de Persona Eliminada con Exito')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>"; 
}
