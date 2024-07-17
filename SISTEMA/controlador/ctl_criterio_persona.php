<?php
include('../modelo/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_criterio = $_POST['id_criterio'];

    if (empty($id_criterio)) {
        // Si no se selecciona ningún criterio, obtener todos los registros de persona
        $query = "SELECT * FROM persona";
        $statement = $conexion->prepare($query);
        $statement->execute();
        $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultados);
    } else {
        // Obtener el criterio seleccionado de la base de datos
        $query_criterio = "SELECT * FROM criterio_persona WHERE nombre = ?";
        $statement_criterio = $conexion->prepare($query_criterio);
        $statement_criterio->execute([$id_criterio]);
        $criterio = $statement_criterio->fetch(PDO::FETCH_ASSOC);

        if ($criterio) {
            // Construir la consulta dinámica basada en el criterio seleccionado
            $query_persona = "SELECT * FROM persona WHERE ";
            $conditions = [];
            $values = [];

            // Construir condiciones para cada campo del criterio
            if (!empty($criterio['cedula'])) {
                $conditions[] = "cedula LIKE ?";
                $values[] = '%' . $criterio['cedula'] . '%';
            }
            if (!empty($criterio['nombre'])) {
                $conditions[] = "nombre LIKE ?";
                $values[] = '%' . $criterio['nombre'] . '%';
            }
            if (!empty($criterio['edad'])) {
                $conditions[] = "edad LIKE ?";
                $values[] = '%' . $criterio['edad'] . '%';
            }
            if (!empty($criterio['correo'])) {
                $conditions[] = "correo LIKE ?";
                $values[] = '%' . $criterio['correo'] . '%';
            }
            if (!empty($criterio['telefono'])) {
                $conditions[] = "telefono LIKE ?";
                $values[] = '%' . $criterio['telefono'] . '%';
            }
            if (!empty($criterio['direccion'])) {
                $conditions[] = "direccion LIKE ?";
                $values[] = '%' . $criterio['direccion'] . '%';
            }
            if (!empty($criterio['sexo'])) {
                $conditions[] = "sexo LIKE ?";
                $values[] = '%' . $criterio['sexo'] . '%';
            }
            if (!empty($criterio['tipo_persona'])) {
                $conditions[] = "tipo_persona LIKE ?";
                $values[] = '%' . $criterio['tipo_persona'] . '%';
            }
            if (!empty($criterio['cargo'])) {
                $conditions[] = "cargo LIKE ?";
                $values[] = '%' . $criterio['cargo'] . '%';
            }
            if (!empty($criterio['seccion'])) {
                $conditions[] = "seccion LIKE ?";
                $values[] = '%' . $criterio['seccion'] . '%';
            }
            if (!empty($criterio['estacion'])) {
                $conditions[] = "estacion LIKE ?";
                $values[] = '%' . $criterio['estacion'] . '%';
            }

            // Combinar todas las condiciones
            $query_persona .= implode(" AND ", $conditions);

            // Preparar y ejecutar la consulta de persona con los valores
            $statement_persona = $conexion->prepare($query_persona);
            $statement_persona->execute($values);
            $resultados = $statement_persona->fetchAll(PDO::FETCH_ASSOC);

            echo json_encode($resultados);
        } else {
            echo json_encode([]);
        }
    }
}
?>
