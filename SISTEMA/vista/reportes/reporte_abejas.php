<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_fecha = isset($_POST['fecha_abejas_buscador']) ? '%' . $_POST['fecha_abejas_buscador'] . '%' : '%';
    $filtro_seccion = isset($_POST['seccion_abejas_buscador']) ? '%' . $_POST['seccion_abejas_buscador'] . '%' : '%';
    $filtro_ubicacion = isset($_POST['ubicacion_abejas_buscador']) ? '%' . $_POST['ubicacion_abejas_buscador'] . '%' : '%';
    $filtro_lugar = isset($_POST['lugar_abejas_buscador']) ? '%' . $_POST['lugar_abejas_buscador'] . '%' : '%';
    $filtro_dueno = isset($_POST['dueno_abejas_buscador']) ? '%' . $_POST['dueno_abejas_buscador'] . '%' : '%';
    $filtro_jefe = isset($_POST['jefe_abejas_buscador']) ? '%' . $_POST['jefe_abejas_buscador'] . '%' : '%';
    $filtro_recurso = isset($_POST['recurso_abejas_buscador']) ? '%' . $_POST['recurso_abejas_buscador'] . '%' : '%';
    $filtro_cantidad = isset($_POST['cantidad_abejas_buscador']) ? '%' . $_POST['cantidad_abejas_buscador'] . '%' : '%';
    $filtro_efectivo = isset($_POST['efectivo_abejas_buscador']) ? '%' . $_POST['efectivo_abejas_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM abejas WHERE fecha LIKE :fecha AND seccion LIKE :seccion AND panal LIKE :panal AND lugar LIKE :lugar AND inmueble LIKE :inmueble AND jefe LIKE :jefe AND recurso LIKE :recurso AND cantidad LIKE :cantidad AND efectivo LIKE :efectivo");
    $stmt->bindParam(':fecha', $filtro_fecha, PDO::PARAM_STR);
    $stmt->bindParam(':seccion', $filtro_seccion, PDO::PARAM_STR);
    $stmt->bindParam(':panal', $filtro_ubicacion, PDO::PARAM_STR);
    $stmt->bindParam(':lugar', $filtro_lugar, PDO::PARAM_STR);
    $stmt->bindParam(':inmueble', $filtro_dueno, PDO::PARAM_STR);
    $stmt->bindParam(':jefe', $filtro_jefe, PDO::PARAM_STR);
    $stmt->bindParam(':recurso', $filtro_recurso, PDO::PARAM_STR);
    $stmt->bindParam(':cantidad', $filtro_cantidad, PDO::PARAM_STR);
    $stmt->bindParam(':efectivo', $filtro_efectivo, PDO::PARAM_STR);
    $stmt->execute();
    $abejas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de persona
    function generarHTMLReportePersona($datosAbejas)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de persona
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de Incidente de Abejas</title>
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
            <h2>Reporte de Abejas</h2>
            <table>
                        <thead>
                        <tr>
                                <th>Id</th>
                                <th>Fecha</th>
                                <th>Seccion</th>
                                <th>Estacion</th>
                                <th>Tipo Aviso</th>
                                <th>Hora Aviso</th>
                                <th>Hora Salida</th>
                                <th>Hora Llegada</th>
                                <th>Hora Regreso</th>
                                <th>Ubicacion</th>
                                <th>Direccion</th>
                                <th>Lugar</th>
                                <th>Dueño Inmueble</th>
                                <th>Jefe</th>
                                <th>Recursos</th>
                                <th>Cantidad</th>
                                <th>Efectivo</th>
                                <th>Unidad</th>
                                <th>CI. PNB</th>
                                <th>CI. GNB</th>
                                <th>CI. INTT</th>
                                <th>CI. INVITY</th>
                                <th>CI. PC</th>
                                <th>CI. OTRO</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php foreach ($datosAbejas as $abej) :?>

                                    <tr>
                                        <td><?=$abej["id"];?></td>
                                        <td><?=$abej["fecha"];?></td>
                                        <td><?=$abej["seccion"];?></td>
                                        <td><?=$abej["estacion"];?></td>
                                        <td><?=$abej["aviso"];?></td>
                                        <td><?=$abej["hora"];?></td>
                                        <td><?=$abej["salida"];?></td>
                                        <td><?=$abej["llegada"];?></td>
                                        <td><?=$abej["regreso"];?></td>
                                        <td><?=$abej["panal"];?></td>
                                        <td><?=$abej["direccion"];?></td>
                                        <td><?=$abej["lugar"];?></td>
                                        <td><?=$abej["inmueble"];?></td>
                                        <td><?=$abej["jefe"];?></td>
                                        <td><?=$abej["recurso"];?></td>
                                        <td><?=$abej["cantidad"];?></td>
                                        <td><?=$abej["efectivo"];?></td>
                                        <td><?=$abej["unidad"];?></td>
                                        <td><?=$abej["ci_pnb"];?></td>
                                        <td><?=$abej["ci_gnb"];?></td>
                                        <td><?=$abej["ci_intt"];?></td>
                                        <td><?=$abej["ci_invity"];?></td>
                                        <td><?=$abej["ci_pc"];?></td>
                                        <td><?=$abej["ci_otro"];?></td>
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
    $dompdf->loadHtml(generarHTMLReportePersona($abejas));
    $dompdf->setPaper('A2', 'landscape');
    $dompdf->render();
    $dompdf->stream('reporte_abejas.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>