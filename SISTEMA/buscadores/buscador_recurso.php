<?php
session_start();
include("../modelo/conexion.php");

// BUSCAR RECURSO
if (isset($_POST['buscar_recurso'])) {
    $nombre_recurso_buscado = $_POST['nombre_recurso_buscado'];
    $tipo_recurso_buscado = $_POST['tipo_recurso_buscado'];
    $cantidad_recurso_buscado = $_POST['cantidad_recurso_buscado'];

    $SQL = "SELECT * FROM recurso WHERE nombre LIKE '%$nombre_recurso_buscado%' AND tipo LIKE '%$tipo_recurso_buscado%' AND cantidad LIKE '%$cantidad_recurso_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_recurso'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRecursos.php'>";
}

// LIMPIAR RECURSO
elseif (isset($_POST['limpiar_recurso'])) {
    $resultado = $conexion->query("SELECT * FROM recurso");

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_recurso'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRecursos.php'>";
}

// CONSULTA PREDETERMINADA
else {
    if (!isset($_SESSION['resultado_busqueda_recurso'])) {
        $resultado = $conexion->query("SELECT * FROM recurso");

        $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['resultado_busqueda_recurso'] = $resultado_array;
    }

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoRecursos.php'>";
}
?>