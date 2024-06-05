<?php
session_start();
include("../modelo/conexion.php");

//RECURSOS
if (isset($_POST['buscar_lugar'])) {

    $nombre_lugar_buscado = $_POST['nombre_lugar_buscado'];
    $municipio_lugar_buscado = $_POST['municipio_lugar_buscado'];
    $distancia_lugar_buscado = $_POST['distancia_lugar_buscado'];

    $SQL = "SELECT * FROM lugar WHERE nombre LIKE '%$nombre_lugar_buscado%' AND municipio LIKE '%$municipio_lugar_buscado%' AND distancia LIKE '%$distancia_lugar_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_lugar'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>";

} elseif (isset($_POST['limpiar_lugar']) || empty($_POST['nombre_lugar_buscado']) && empty($_POST['municipio_lugar_buscado']) && empty($_POST['distancia_lugar_buscado'])) {

    $resultado = $conexion->query("SELECT * FROM lugar");

    $_SESSION['resultado_busqueda_lugar'] = $resultado;

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_lugar'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoLugar.php'>";
}