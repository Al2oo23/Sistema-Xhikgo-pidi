<?php
session_start();
include("../modelo/conexion.php");

//RECURSOS
if (isset($_POST['buscar_municipio'])) {

    $nombre_municipio_buscado = $_POST['nombre_municipio_buscado'];
    $codigo_municipio_buscado = $_POST['codigo_municipio_buscado'];

    $SQL = "SELECT * FROM municipio WHERE nombre LIKE '%$nombre_municipio_buscado%' AND codigo LIKE '%$codigo_municipio_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_municipio'] = $resultado_array;
    
    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMunicipio.php'>";

} elseif (isset($_POST['limpiar_municipio']) || empty($_POST['nombre_municipio_buscado']) && empty($_POST['codigo_municipio_buscado'])) {

    $resultado = $conexion->query("SELECT * FROM municipio");

    $_SESSION['resultado_busqueda_municipio'] = $resultado;

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_municipio'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMunicipio.php'>";
}