<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_niv = isset($_POST['niv_vehiculo_buscador']) ? '%' . $_POST['niv_vehiculo_buscador'] . '%' : '%';
    $filtro_numero = isset($_POST['numero_vehiculo_buscador']) ? '%' . $_POST['numero_vehiculo_buscador'] . '%' : '%';
    $filtro_marca = isset($_POST['marca_vehiculo_buscador']) ? '%' . $_POST['marca_vehiculo_buscador'] . '%' : '%';
    $filtro_modelo = isset($_POST['modelo_vehiculo_buscador']) ? '%' . $_POST['modelo_vehiculo_buscador'] . '%' : '%';
    $filtro_serial = isset($_POST['serial_vehiculo_buscador']) ? '%' . $_POST['serial_vehiculo_buscador'] . '%' : '%';
    $filtro_cilindrada = isset($_POST['cilindrada_vehiculo_buscador']) ? '%' . $_POST['cilindrada_vehiculo_buscador'] . '%' : '%';
    $filtro_carburante = isset($_POST['carburante_vehiculo_buscador']) ? '%' . $_POST['carburante_vehiculo_buscador'] . '%' : '%';
    $filtro_seguro = isset($_POST['seguro_vehiculo_buscador']) ? '%' . $_POST['seguro_vehiculo_buscador'] . '%' : '%';
    $filtro_propietario = isset($_POST['propietario_vehiculo_buscador']) ? '%' . $_POST['propietario_vehiculo_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM vehiculo WHERE niv LIKE :niv AND unidad LIKE :unidad AND marca LIKE :marca AND modelo LIKE :modelo AND serial_vehiculo LIKE :serial_vehiculo AND cilindrada LIKE :cilindrada AND carburante LIKE :carburante AND seguro LIKE :seguro AND cedula LIKE :cedula");
    $stmt->bindParam(':niv', $filtro_niv, PDO::PARAM_STR);
    $stmt->bindParam(':unidad', $filtro_numero, PDO::PARAM_STR);
    $stmt->bindParam(':marca', $filtro_marca, PDO::PARAM_STR);
    $stmt->bindParam(':modelo', $filtro_modelo, PDO::PARAM_STR);
    $stmt->bindParam(':serial_vehiculo', $filtro_serial, PDO::PARAM_STR);
    $stmt->bindParam(':cilindrada', $filtro_cilindrada, PDO::PARAM_STR);
    $stmt->bindParam(':carburante', $filtro_carburante, PDO::PARAM_STR);
    $stmt->bindParam(':seguro', $filtro_seguro, PDO::PARAM_STR);
    $stmt->bindParam(':cedula', $filtro_propietario, PDO::PARAM_STR);
    $stmt->execute();
    $vehiculo = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de vehiculo
    function generarHTMLReportevehiculo($datosVehiculo)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de vehiculo
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de Incidente de vehiculo</title>
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
            <h2>Reporte de vehiculo</h2>
            <table>
                <thead>
                    <tr style="text-align: center;">
                        <th class="columna">NIV</th>
                        <th class="columna">Tipo</th>
                        <th class="columna">N° Unidad</th>
                        <th class="columna">Marca</th>
                        <th class="columna">Modelo</th>
                        <th class="columna">Serial</th>
                        <th class="columna">Cilindrada</th>
                        <th class="columna">Carburante</th>
                        <th class="columna">Seguro</th>
                        <th class="columna">CI Propietario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosVehiculo as $vehiculo) : ?>

                        <tr>
                            <td class="columna"><?= $vehiculo['niv'] ?></td>
                            <td class="columna"><?= $vehiculo['tipo'] ?></td>
                            <td class="columna"><?= $vehiculo['unidad'] ?></td>
                            <td class="columna"><?= $vehiculo['marca'] ?></td>
                            <td class="columna"><?= $vehiculo['modelo'] ?></td>
                            <td class="columna"><?= $vehiculo['serial_vehiculo'] ?></td>
                            <td class="columna"><?= $vehiculo['cilindrada'] ?></td>
                            <td class="columna"><?= $vehiculo['carburante'] ?></td>
                            <td class="columna"><?= $vehiculo['seguro'] ?></td>
                            <td class="columna"><?= $vehiculo['cedula'] ?></td>
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
    $dompdf->loadHtml(generarHTMLReportevehiculo($vehiculo));
    $dompdf->setPaper('A0', 'portrait');
    $dompdf->render();
    $dompdf->stream('reporte_vehiculo.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>