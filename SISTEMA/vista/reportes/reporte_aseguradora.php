<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_nombre = isset($_POST['nombre_aseguradora_buscador']) ? '%' . $_POST['nombre_aseguradora_buscador'] . '%' : '%';
    $filtro_tipo = isset($_POST['tipo_aseguradora_buscador']) ? '%' . $_POST['tipo_aseguradora_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM seguro WHERE nombre LIKE :nombre AND tipo LIKE :tipo");
    $stmt->bindParam(':nombre', $filtro_nombre, PDO::PARAM_STR);
    $stmt->bindParam(':tipo', $filtro_tipo, PDO::PARAM_STR);
    $stmt->execute();
    $aseguradora = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de aseguradora
    function generarHTMLReporteAseguradora($datosAseguradora)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de aseguradora
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
                        <th>Nombre</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosAseguradora as $aseguradora) : ?>
                        <tr>
                            <td><?= ($aseguradora['id']) ?></td>
                            <td><?= ($aseguradora['nombre']) ?></td>
                            <td><?= ($aseguradora['tipo']) ?></td>
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
    $dompdf->loadHtml(generarHTMLReporteAseguradora($aseguradora));
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('reporte_aseguradora.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>