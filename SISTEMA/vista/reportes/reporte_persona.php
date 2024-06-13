<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_cedula = isset($_POST['cedula_persona_buscador']) ? '%' . $_POST['cedula_persona_buscador'] . '%' : '%';
    $filtro_nombre = isset($_POST['nombre_persona_buscador']) ? '%' . $_POST['nombre_persona_buscador'] . '%' : '%';
    $filtro_edad = isset($_POST['edad_persona_buscador']) ? '%' . $_POST['edad_persona_buscador'] . '%' : '%';
    $filtro_telefono = isset($_POST['telefono_persona_buscador']) ? '%' . $_POST['telefono_persona_buscador'] . '%' : '%';
    $filtro_sexo = isset($_POST['sexo_persona_buscador']) ? '%' . $_POST['sexo_persona_buscador'] . '%' : '%';
    $filtro_tipo = isset($_POST['tipo_persona_buscador']) ? '%' . $_POST['tipo_persona_buscador'] . '%' : '%';
    $filtro_cargo = isset($_POST['cargo_persona_buscador']) ? '%' . $_POST['cargo_persona_buscador'] . '%' : '%';
    $filtro_seccion = isset($_POST['seccion_persona_buscador']) ? '%' . $_POST['seccion_persona_buscador'] . '%' : '%';
    $filtro_estacion = isset($_POST['estacion_persona_buscador']) ? '%' . $_POST['estacion_persona_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM persona WHERE cedula LIKE :cedula AND nombre LIKE :nombre AND edad LIKE :edad AND telefono LIKE :telefono AND sexo LIKE :sexo AND tipo_persona LIKE :tipo AND cargo LIKE :cargo AND seccion LIKE :seccion AND estacion LIKE :estacion");
    $stmt->bindParam(':cedula', $filtro_cedula, PDO::PARAM_STR);
    $stmt->bindParam(':nombre', $filtro_nombre, PDO::PARAM_STR);
    $stmt->bindParam(':edad', $filtro_edad, PDO::PARAM_STR);
    $stmt->bindParam(':telefono', $filtro_telefono, PDO::PARAM_STR);
    $stmt->bindParam(':sexo', $filtro_sexo, PDO::PARAM_STR);
    $stmt->bindParam(':tipo', $filtro_tipo, PDO::PARAM_STR);
    $stmt->bindParam(':cargo', $filtro_cargo, PDO::PARAM_STR);
    $stmt->bindParam(':seccion', $filtro_seccion, PDO::PARAM_STR);
    $stmt->bindParam(':estacion', $filtro_estacion, PDO::PARAM_STR);
    $stmt->execute();
    $persona = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de persona
    function generarHTMLReportePersona($datosPersona)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de persona
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de Persona</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 20px;
                }

                h1 {
                    text-align: center;
                    margin-bottom: 20px;
                }

                .logo {
                    text-align: center;
                    margin-bottom: 20px;
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                }

                table,
                th,
                td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: center;
                }

                th {
                    background-color: #f2f2f2;
                }
            </style>
        </head>

        <body>
            <div class="logo">
                <img src="../img/logo_bomberos-removebg.png" alt="Logo de la Institución" width="150">
            </div>
            <h1>Cuerpo Autonomo de Bomberos</h1>
            <h2>Reporte de Persona</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Sexo</th>
                        <th>Tipo De Persona</th>
                        <th>Cargo</th>
                        <th>Seccion</th>
                        <th>Estacion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosPersona as $persona) : ?>
                        <tr>
                            <td><?= $persona['cedula']; ?></td>
                            <td><?= $persona['nombre']; ?></td>
                            <td><?= $persona['edad']; ?></td>
                            <td><?= $persona['correo']; ?></td>
                            <td><?= $persona['telefono']; ?></td>
                            <td><?= $persona['direccion']; ?></td>
                            <td><?= $persona['sexo']; ?></td>
                            <td><?= $persona['tipo_persona']; ?></td>
                            <td><?= $persona['cargo']; ?></td>
                            <td><?= $persona['seccion']; ?></td>
                            <td><?= $persona['estacion']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </body>

        </html>
<?php

        return ob_get_clean(); // Obtener y limpiar el contenido del buffer
    }

    // Configurar Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml(generarHTMLReportePersona($persona));
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream('reporte_persona.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>