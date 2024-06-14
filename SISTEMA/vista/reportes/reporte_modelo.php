<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_nombre = isset($_POST['nombre_modelo_vehiculo']) ? '%' . $_POST['nombre_modelo_vehiculo'] . '%' : '%';
    $filtro_marca = isset($_POST['marca_modelo_vehiculo']) ? '%' . $_POST['marca_modelo_vehiculo'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM modelo WHERE nombre LIKE :nombre AND marca LIKE :marca");
    $stmt->bindParam(':nombre', $filtro_nombre, PDO::PARAM_STR);
    $stmt->bindParam(':marca', $filtro_marca, PDO::PARAM_STR);
    $stmt->execute();
    $modelo = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de modelo
    function generarHTMLReporteModelo($datosModelo)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de modelo
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
                        <th>Marca</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosModelo as $modelo) : ?>
                        <tr>
                            <td><?= ($modelo['id']) ?></td>
                            <td><?= ($modelo['nombre']) ?></td>
                            <td><?= ($modelo['marca']) ?></td>
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
    $dompdf->loadHtml(generarHTMLReporteModelo($modelo));
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('reporte_modelo.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>