<?php
session_start();
include("../modelo/conexion.php");

//RECURSOS
if (isset($_POST['buscar_seccion'])) {

    $numero_seccion_buscado = $_POST['numero_seccion_buscado'];

    $SQL = "SELECT * FROM seccion WHERE numero LIKE '%$numero_seccion_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_seccion'] = $resultado_array;
    
    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSeccion.php'>";

} elseif (isset($_POST['limpiar_seccion']) || empty($_POST['numero_seccion_buscado'])) {

    $resultado = $conexion->query("SELECT * FROM seccion");

    $_SESSION['resultado_busqueda_seccion'] = $resultado;

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_seccion'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoSeccion.php'>";
}