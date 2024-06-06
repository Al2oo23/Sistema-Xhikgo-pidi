<?php
session_start();
include("../modelo/conexion.php");

//marcaS
if (isset($_POST['buscar_marca'])) {

    $nombre_marca_buscado = $_POST['nombre_marca_buscado'];

    $SQL = "SELECT * FROM marca WHERE nombre LIKE '%$nombre_marca_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_marca'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMarca.php'>";

} elseif (isset($_POST['limpiar_marca']) || empty($_POST['nombre_marca_buscado'])) {

    $resultado = $conexion->query("SELECT * FROM marca");

    $_SESSION['resultado_busqueda_marca'] = $resultado;

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_marca'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoMarca.php'>";
}