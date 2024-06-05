<?php
session_start();
include("../modelo/conexion.php");

//cargoS
if (isset($_POST['buscar_cargo'])) {

    $nombre_cargo_buscado = $_POST['nombre_cargo_buscado'];

    $SQL = "SELECT * FROM cargo WHERE nombre LIKE '%$nombre_cargo_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_cargo'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoCargo.php'>";

} elseif (isset($_POST['limpiar_cargo']) || empty($_POST['nombre_cargo_buscado'])) {

    $resultado = $conexion->query("SELECT * FROM cargo");

    $_SESSION['resultado_busqueda_cargo'] = $resultado;

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_cargo'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoCargo.php'>";
}