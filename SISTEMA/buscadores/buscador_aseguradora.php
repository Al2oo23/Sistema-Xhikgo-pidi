<?php
session_start();
include("../modelo/conexion.php");

//ASEGURADORA
if (isset($_POST['buscar_aseguradora'])) {

    $nombre_aseguradora_buscado = $_POST['nombre_aseguradora_buscado'];
    $tipo_aseguradora_buscado = $_POST['tipo_aseguradora_buscado'];

    $SQL = "SELECT * FROM seguro WHERE nombre LIKE '%$nombre_aseguradora_buscado%' AND tipo LIKE '%$tipo_aseguradora_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_aseguradora'] = $resultado_array;
    
    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAseguradora.php'>";

} elseif (isset($_POST['limpiar_aseguradora']) || empty($_POST['nombre_aseguradora_buscado']) && empty($_POST['tipo_aseguradora_buscado'])) {

    $resultado = $conexion->query("SELECT * FROM seguro");

    $_SESSION['resultado_busqueda_aseguradora'] = $resultado;

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_aseguradora'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoAseguradora.php'>";
}