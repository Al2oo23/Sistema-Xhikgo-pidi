<?php
session_start();
include("../modelo/conexion.php");

//RECURSOS
if (isset($_POST['buscar_modelo'])) {

    $nombre_modelo_buscado = $_POST['nombre_modelo_buscado'];
    $marca_modelo_buscado = $_POST['marca_modelo_buscado'];

    $SQL = "SELECT * FROM modelo WHERE nombre LIKE '%$nombre_modelo_buscado%' AND marca LIKE '%$marca_modelo_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_modelo'] = $resultado_array;
    
    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>";

} elseif (isset($_POST['limpiar_modelo']) || empty($_POST['nombre_modelo_buscado']) && empty($_POST['marca_modelo_buscado'])) {

    $resultado = $conexion->query("SELECT * FROM modelo");

    $_SESSION['resultado_busqueda_modelo'] = $resultado;

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_modelo'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoModelo.php'>";
}