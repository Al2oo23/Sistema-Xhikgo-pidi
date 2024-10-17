<?php
session_start();
include("../modelo/conexion.php");

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';
    $sql="delete from unidad_asignada where id=?"; 
    $preparado= $conexion->prepare($sql);
    $preparado->execute([$txtID]);

    
    // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó  Vehiculo de Cronograma de Mantenimiento  con el txtID ".$txtID." el día ",$fecha]);

   echo "<script>alert('Mantenimiento Realizado con Exito')</script>";
     echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMantenimiento.php'>"; 
  
}

?>