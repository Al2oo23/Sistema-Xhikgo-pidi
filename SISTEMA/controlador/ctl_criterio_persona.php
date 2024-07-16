<?php
include('../modelo/conexion.php');

if (isset($_POST['id_criterio'])) {
    $id_busqueda = $_POST['id_criterio'];

    if ($id_busqueda == '') {
        // Obtener todos los registros si no se selecciona ningún criterio
        $SQL_P = "SELECT * FROM persona";
        $preparado_persona = $conexion->prepare($SQL_P);
        $preparado_persona->execute();
        $resultados = $preparado_persona->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultados);
    } else {
        // Obtener criterio de búsqueda
        $SQL_C = "SELECT * FROM criterio_persona WHERE id = ?";
        $preparado_criterio = $conexion->prepare($SQL_C);
        $preparado_criterio->execute([$id_busqueda]);
        $criterio = $preparado_criterio->fetch(PDO::FETCH_ASSOC);

        if ($criterio) {
            $tipo_persona = $criterio['tipo_persona'] ?? '';
            $cargo = $criterio['cargo'] ?? '';
            $estacion = $criterio['estacion'] ?? '';

            // Obtener resultados basados en el criterio
            $SQL_P = "SELECT * FROM persona WHERE tipo_persona LIKE ? AND cargo LIKE ? AND estacion LIKE ?";
            $valores = [
                '%' . $tipo_persona . '%',
                '%' . $cargo . '%',
                '%' . $estacion . '%',
            ];
            $preparado_persona = $conexion->prepare($SQL_P);
            $preparado_persona->execute($valores);
            $resultados = $preparado_persona->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($resultados);
        } else {
            echo json_encode([]);
        }
    }
}
?>
