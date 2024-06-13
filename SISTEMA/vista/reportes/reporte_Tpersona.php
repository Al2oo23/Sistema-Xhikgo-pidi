<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_tipo = isset($_POST['tipo_persona_buscador']) ? '%' . $_POST['tipo_persona_buscador'] . '%' : '%';
    $filtro_descripcion = isset($_POST['descripcion_tipo_buscador']) ? '%' . $_POST['descripcion_tipo_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM tipo_persona WHERE tipo LIKE :tipo AND descripcion LIKE :descripcion");
    $stmt->bindParam(':tipo', $filtro_tipo, PDO::PARAM_STR);
    $stmt->bindParam(':descripcion', $filtro_descripcion, PDO::PARAM_STR);
    $stmt->execute();
    $Tpersona = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de Tpersona
    function generarHTMLReporteTpersona($datosTpersona)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de Tpersona
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de Tipo de Persona</title>
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
            <h2>Reporte de Tipo de Persona</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosTpersona as $Tpersona) : ?>
                        <tr>
                            <td><?= ($Tpersona['id']) ?></td>
                            <td><?= ($Tpersona['tipo']) ?></td>
                            <td><?= ($Tpersona['descripcion']) ?></td>
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
    $dompdf->loadHtml(generarHTMLReporteTpersona($Tpersona));
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('reporte_Tpersona.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>