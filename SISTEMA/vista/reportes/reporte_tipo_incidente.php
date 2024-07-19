<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_nombre = isset($_POST['tipo_incidente_buscador']) ? '%' . $_POST['tipo_incidente_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM tipo_incidente WHERE incidente LIKE :incidente");
    $stmt->bindParam(':incidente', $filtro_nombre, PDO::PARAM_STR);
    $stmt->execute();
    $tipo_incidente = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de tipo_incidente
    function generarHTMLReporteTipoIncidente($datosTipoIncidente)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de tipo_incidente
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de tipo_incidente</title>
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
            <h2>Reporte de Tipo de Incidente</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosTipoIncidente as $tipo_incidente) : ?>
                        <tr>
                            <td><?= ($tipo_incidente['id']) ?></td>
                            <td><?= ($tipo_incidente['incidente']) ?></td>
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
    $dompdf->loadHtml(generarHTMLReporteTipoIncidente($tipo_incidente));
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('reporte_tipo_incidente.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>