<?php
session_start();
include("../modelo/conexion.php");

//estacionS
if (isset($_POST['buscar_estacion'])) {

    $nombre_estacion_buscado = $_POST['nombre_estacion_buscado'];

    $SQL = "SELECT * FROM estacion WHERE nombre LIKE '%$nombre_estacion_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_estacion'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEstacion.php'>";

} elseif (isset($_POST['limpiar_estacion']) || empty($_POST['nombre_estacion_buscado'])) {

    $resultado = $conexion->query("SELECT * FROM estacion");

    $_SESSION['resultado_busqueda_estacion'] = $resultado;

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_estacion'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoEstacion.php'>";
}