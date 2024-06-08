<?php
session_start();
include("../modelo/conexion.php");
include("../modelo/clase_recurso.php");

// BUSCAR TIPO PERSONA
if (isset($_POST['buscar_tipo'])) {
    $nombre_tipo_buscado = $_POST['nombre_tipo_buscado'];
    $descripcion_tipo_buscado = $_POST['descripcion_tipo_buscado'];

    $SQL = "SELECT * FROM tipo_persona WHERE tipo LIKE '%$nombre_tipo_buscado%' AND descripcion LIKE '%$descripcion_tipo_buscado%'";
    $resultado = $conexion->query($SQL);

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_Tpersona'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>";
}

// LIMPIAR TIPO PERSONA
elseif (isset($_POST['limpiar_tipo'])) {
    $resultado = $conexion->query("SELECT * FROM tipo_persona");

    $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['resultado_busqueda_Tpersona'] = $resultado_array;

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>";
}

// CONSULTA PREDETERMINADA
else {
    if (!isset($_SESSION['resultado_busqueda_Tpersona'])) {
        $resultado = $conexion->query("SELECT * FROM tipo_persona");

        $resultado_array = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['resultado_busqueda_Tpersona'] = $resultado_array;
    }

    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/catalogoTpersona.php'>";
}
?>