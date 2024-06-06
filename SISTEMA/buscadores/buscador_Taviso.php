<?php
session_start();
include("../modelo/conexion.php");

//Aviso
if (isset($_POST['buscar_aviso'])) {

    $aviso_Taviso_buscado = $_POST['aviso_Taviso_buscado'];

    $SQL = "SELECT * FROM aviso WHERE aviso LIKE '%$aviso_Taviso_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_aviso'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTaviso.php'>";

} elseif (isset($_POST['limpiar_aviso']) || empty($_POST['aviso_Taviso_buscado'])) {

    $resultado = $conexion->query("SELECT * FROM aviso");

    $_SESSION['resultado_busqueda_aviso'] = $resultado;

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_aviso'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTaviso.php'>";
}