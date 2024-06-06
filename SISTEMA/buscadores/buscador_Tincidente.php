<?php
session_start();
include("../modelo/conexion.php");

//Tipo incidente
if (isset($_POST['buscar_incidente'])) {

    $aviso_Tincidente_buscado = $_POST['aviso_Tincidente_buscado'];

    $SQL = "SELECT * FROM tipo_incidente WHERE aviso LIKE '%$incidente_Tincidente_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_incidente'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincidente.php'>";

} elseif (isset($_POST['limpiar_incidente']) || empty($_POST['incidente_Tincidente_buscado'])) {

    $resultado = $conexion->query("SELECT * FROM tipo_incidente");

    $_SESSION['resultado_busqueda_incidente'] = $resultado;

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_incidente'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTincidente.php'>";
}