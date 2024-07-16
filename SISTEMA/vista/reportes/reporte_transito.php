<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_fecha = isset($_POST['fecha_transito_buscador']) ? '%' . $_POST['fecha_transito_buscador'] . '%' : '%';
    $filtro_seccion = isset($_POST['seccion_transito_buscador']) ? '%' . $_POST['seccion_transito_buscador'] . '%' : '%';
    $filtro_estacion = isset($_POST['estacion_transito_buscador']) ? '%' . $_POST['estacion_transito_buscador'] . '%' : '%';
    $filtro_emergencia = isset($_POST['emergencia_transito_buscador']) ? '%' . $_POST['emergencia_transito_buscador'] . '%' : '%';
    $filtro_inspeccion = isset($_POST['inspeccion_transito_buscador']) ? '%' . $_POST['inspeccion_transito_buscador'] . '%' : '%';
    $filtro_incidente = isset($_POST['tipo_incidente_transito_buscador']) ? '%' . $_POST['tipo_incidente_transito_buscador'] . '%' : '%';
    $filtro_vehiculo = isset($_POST['vehiculo_transito_buscador']) ? '%' . $_POST['vehiculo_transito_buscador'] . '%' : '%';
    $filtro_occisos = isset($_POST['occisos_transito_buscador']) ? '%' . $_POST['occisos_transito_buscador'] . '%' : '%';
    $filtro_incendio = isset($_POST['incendio_transito_buscador']) ? '%' . $_POST['incendio_transito_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM transito WHERE fecha LIKE :fecha AND seccion LIKE :seccion AND estacion LIKE :estacion AND emergencia LIKE :emergencia AND inspeccion LIKE :inspeccion AND incidente LIKE :incidente AND vehiculo LIKE :vehiculo AND occisos LIKE :occisos AND incendio LIKE :incendio");
    $stmt->bindParam(':fecha', $filtro_fecha, PDO::PARAM_STR);
    $stmt->bindParam(':seccion', $filtro_seccion, PDO::PARAM_STR);
    $stmt->bindParam(':estacion', $filtro_estacion, PDO::PARAM_STR);
    $stmt->bindParam(':emergencia', $filtro_emergencia, PDO::PARAM_STR);
    $stmt->bindParam(':inspeccion', $filtro_inspeccion, PDO::PARAM_STR);
    $stmt->bindParam(':incidente', $filtro_incidente, PDO::PARAM_STR);
    $stmt->bindParam(':vehiculo', $filtro_vehiculo, PDO::PARAM_STR);
    $stmt->bindParam(':occisos', $filtro_occisos, PDO::PARAM_STR);
    $stmt->bindParam(':incendio', $filtro_incendio, PDO::PARAM_STR);
    $stmt->execute();
    $transito = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de Transito
    function generarHTMLReporteTransito($datosTransito)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de Transito
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de Incidente de Transito</title>
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
            <h2>Reporte de Transito</h2>
            <table>
                <thead>
                    <tr style="text-align: center;">
                        <th class="columnas">ID</th>
                        <th class="columnas">Fecha</th>
                        <th class="columnas">Sección</th>
                        <th class="columnas">Estación</th>
                        <th class="columnas">Emergencia</th>
                        <th class="columnas">Inspección</th>
                        <th class="columnas">Tipo Incidente</th>
                        <th class="columnas">Tipo de Aviso</th>
                        <th class="columnas">Solicitante</th>
                        <th class="columnas">Recibidor</th>
                        <th class="columnas">Aviso</th>
                        <th class="columnas">Salida</th>
                        <th class="columnas">Llegada</th>
                        <th class="columnas">Regreso</th>
                        <th class="columnas">Vehiculo</th>
                        <th class="columnas">Lesionados</th>
                        <th class="columnas">Occisos</th>
                        <th class="columnas">Observaciones</th>
                        <th class="columnas">Incendio</th>
                        <th class="columnas">Recursos</th>
                        <th class="columnas">Cantidad</th>
                        <th class="columnas">Jefe Comisión</th>
                        <th class="columnas">Efectivos</th>
                        <th class="columnas">Unidad</th>
                        <th class="columnas">PNB</th>
                        <th class="columnas">GNB</th>
                        <th class="columnas">INTT</th>
                        <th class="columnas">INVITY</th>
                        <th class="columnas">PC</th>
                        <th class="columnas">Otros</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosTransito as $transito) : ?>

                        <tr>
                            <td class="columnas"><?= $transito['id'] ?></td>
                            <td class="columnas"><?= $transito['fecha'] ?></td>
                            <td class="columnas"><?= $transito['seccion'] ?></td>
                            <td class="columnas"><?= $transito['estacion'] ?></td>
                            <td class="columnas"><?= $transito['emergencia'] ?></td>
                            <td class="columnas"><?= $transito['inspeccion'] ?></td>
                            <td class="columnas"><?= $transito['incidente'] ?></td>
                            <td class="columnas"><?= $transito['taviso'] ?></td>
                            <td class="columnas"><?= $transito['solicitante'] ?></td>
                            <td class="columnas"><?= $transito['recibidor'] ?></td>
                            <td class="columnas"><?= $transito['aviso'] ?></td>
                            <td class="columnas"><?= $transito['salida'] ?></td>
                            <td class="columnas"><?= $transito['llegada'] ?></td>
                            <td class="columnas"><?= $transito['regreso'] ?></td>
                            <td class="columnas"><?= $transito['vehiculo'] ?></td>
                            <td class="columnas"><?= $transito['lesionados'] ?></td>
                            <td class="columnas"><?= $transito['occisos'] ?></td>
                            <td class="columnas"><?= $transito['observaciones'] ?></td>
                            <td class="columnas"><?= $transito['incendio'] ?></td>
                            <td class="columnas"><?= $transito['recurso'] ?></td>
                            <td class="columnas"><?= $transito['cantidad'] ?></td>
                            <td class="columnas"><?= $transito['jefe'] ?></td>
                            <td class="columnas"><?= $transito['efectivo'] ?></td>
                            <td class="columnas"><?= $transito['unidad'] ?></td>
                            <td class="columnas"><?= $transito['pnb'] ?></td>
                            <td class="columnas"><?= $transito['gnb'] ?></td>
                            <td class="columnas"><?= $transito['intt'] ?></td>
                            <td class="columnas"><?= $transito['invity'] ?></td>
                            <td class="columnas"><?= $transito['pc'] ?></td>
                            <td class="columnas"><?= $transito['otros'] ?></td>
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
    $dompdf->loadHtml(generarHTMLReporteTransito($transito));
    $dompdf->setPaper('A0', 'portrait');
    $dompdf->render();
    $dompdf->stream('reporte_transito.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>