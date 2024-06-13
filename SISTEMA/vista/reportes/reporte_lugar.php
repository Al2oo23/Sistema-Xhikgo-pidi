<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_nombre = isset($_POST['nombre_lugar_buscador']) ? '%' . $_POST['nombre_lugar_buscador'] . '%' : '%';
    $filtro_municipio = isset($_POST['municipio_lugar_buscador']) ? '%' . $_POST['municipio_lugar_buscador'] . '%' : '%';
    $filtro_distancia = isset($_POST['distancia_lugar_buscador']) ? '%' . $_POST['distancia_lugar_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM lugar WHERE nombre LIKE :nombre AND municipio LIKE :municipio AND distancia LIKE :distancia");
    $stmt->bindParam(':nombre', $filtro_nombre, PDO::PARAM_STR);
    $stmt->bindParam(':municipio', $filtro_municipio, PDO::PARAM_STR);
    $stmt->bindParam(':distancia', $filtro_distancia, PDO::PARAM_STR);
    $stmt->execute();
    $lugar = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de lugar
    function generarHTMLReporteLugar($datosLugar)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de lugar
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de Lugar</title>
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
            <h2>Reporte de Lugar</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosLugar as $lugar) : ?>
                        <tr>
                            <td><?= ($lugar['id']) ?></td>
                            <td><?= ($lugar['nombre']) ?></td>
                            <td><?= ($lugar['municipio']) ?></td>
                            <td><?= ($lugar['distancia']) ?></td>
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
    $dompdf->loadHtml(generarHTMLReporteLugar($lugar));
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('reporte_lugar.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>