<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_fecha = isset($_POST['fecha_incendio_buscador']) ? '%' . $_POST['fecha_incendio_buscador'] . '%' : '%';
    $filtro_seccion = isset($_POST['seccion_incendio_buscador']) ? '%' . $_POST['seccion_incendio_buscador'] . '%' : '%';
    $filtro_municipio = isset($_POST['municipio_incendio_buscador']) ? '%' . $_POST['municipio_incendio_buscador'] . '%' : '%';
    $filtro_localidad = isset($_POST['localidad_incendio_buscador']) ? '%' . $_POST['localidad_incendio_buscador'] . '%' : '%';
    $filtro_propietario = isset($_POST['propietario_incendio_buscador']) ? '%' . $_POST['propietario_incendio_buscador'] . '%' : '%';
    $filtro_valor_inmueble = isset($_POST['valor_inmueble_incendio_buscador']) ? '%' . $_POST['valor_inmueble_incendio_buscador'] . '%' : '%';
    $filtro_num_residenciados = isset($_POST['num_residenciados_incendio_buscador']) ? '%' . $_POST['num_residenciados_incendio_buscador'] . '%' : '%';
    $filtro_fuente_ignicion = isset($_POST['fuente_ignicion_incendio_buscador']) ? '%' . $_POST['fuente_ignicion_incendio_buscador'] . '%' : '%';
    $filtro_causa_incendio = isset($_POST['causa_incendio_buscador']) ? '%' . $_POST['causa_incendio_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM incendio WHERE fecha LIKE :fecha AND seccion LIKE :seccion AND municipio LIKE :municipio AND localidad LIKE :localidad AND propietario LIKE :propietario AND valor_inmueble LIKE :valor_inmueble AND num_residenciados LIKE :num_residenciados AND fuente_ignicion LIKE :fuente_ignicion AND causa_incendio LIKE :causa_incendio");
    $stmt->bindParam(':fecha', $filtro_fecha, PDO::PARAM_STR);
    $stmt->bindParam(':seccion', $filtro_seccion, PDO::PARAM_STR);
    $stmt->bindParam(':municipio', $filtro_municipio, PDO::PARAM_STR);
    $stmt->bindParam(':localidad', $filtro_localidad, PDO::PARAM_STR);
    $stmt->bindParam(':propietario', $filtro_propietario, PDO::PARAM_STR);
    $stmt->bindParam(':valor_inmueble', $filtro_valor_inmueble, PDO::PARAM_STR);
    $stmt->bindParam(':num_residenciados', $filtro_num_residenciados, PDO::PARAM_STR);
    $stmt->bindParam(':fuente_ignicion', $filtro_fuente_ignicion, PDO::PARAM_STR);
    $stmt->bindParam(':causa_incendio', $filtro_causa_incendio, PDO::PARAM_STR);
    $stmt->execute();
    $incendio = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de Incendio
    function generarHTMLReporteIncendio($datosIncendio)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de Incendio
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de Incendio</title>
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
            <img src="../img/bomberos.jpg" alt="Logo Cuerpo Autónomo de bomberos">
            <h1>Cuerpo Autónomo de Bomberos</h1>
            <h2>Reporte de Incendio Primera Parte</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Seccion</th>
                        <th>Estacion</th>
                        <th>Tipo de Aviso</th>
                        <th>Solicitante</th>
                        <th>Receptor</th>
                        <th>Aprobador</th>
                        <th>Hora Aviso</th>
                        <th>Hora Salida</th>
                        <th>Hora Llegada</th>
                        <th>Hora Regreso</th>
                        <th>Municipio</th>
                        <th>Localidad</th>
                        <th>Direccion</th>
                        <th>Paredes</th>
                        <th>Techo</th>
                        <th>Piso</th>
                        <th>Ventanas</th>
                        <th>Puertas</th>
                        <th>Otros Materiales</th>
                        <th>Propietario Vivienda</th>
                        <th>Valor Inmueble</th>
                        <th>Numero Residenciados</th>
                        <th>Ninos</th>
                        <th>Adolescentes</th>
                        <th>Adultos</th>
                        <th>Info Adicional</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosIncendio as $incendio) : ?>

                        <tr>
                            <td><?= $incendio['id']; ?></td>
                            <td><?= $incendio['fecha']; ?></td>
                            <td><?= $incendio['seccion']; ?></td>
                            <td><?= $incendio['estacion']; ?></td>
                            <td><?= $incendio['tipo_aviso']; ?></td>
                            <td><?= $incendio['solicitante']; ?></td>
                            <td><?= $incendio['receptor']; ?></td>
                            <td><?= $incendio['aprobador']; ?></td>
                            <td><?= $incendio['hora_aviso']; ?></td>
                            <td><?= $incendio['hora_salida']; ?></td>
                            <td><?= $incendio['hora_llegada']; ?></td>
                            <td><?= $incendio['hora_regreso']; ?></td>
                            <td><?= $incendio['municipio']; ?></td>
                            <td><?= $incendio['localidad']; ?></td>
                            <td><?= $incendio['direccion']; ?></td>
                            <td><?= $incendio['paredes']; ?></td>
                            <td><?= $incendio['techo']; ?></td>
                            <td><?= $incendio['piso']; ?></td>
                            <td><?= $incendio['ventanas']; ?></td>
                            <td><?= $incendio['puertas']; ?></td>
                            <td><?= $incendio['otros_materiales']; ?></td>
                            <td><?= $incendio['propietario']; ?></td>
                            <td><?= $incendio['valor_inmueble']; ?></td>
                            <td><?= $incendio['num_residenciados']; ?></td>
                            <td><?= $incendio['ninos']; ?></td>
                            <td><?= $incendio['adolescentes']; ?></td>
                            <td><?= $incendio['adultos']; ?></td>
                            <td><?= $incendio['info_adicional']; ?></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

            <div style="page-break-before: always;"></div>';

            <img src="../img/bomberos.jpg" alt="Logo Cuerpo Autónomo de bomberos">
            <h1>Cuerpo Autónomo de Bomberos</h1>
            <h2>Reporte de Incendio Segunda Parte</h2>
            <table>
                <thead>
                    <tr>
                        <th>Asegurado</th>
                        <th>Aseguradora</th>
                        <th>Numero de Poliza</th>
                        <th>Valor Asegurado</th>
                        <th>Valor Perdido</th>
                        <th>Valor Salvado</th>
                        <th>Fuente de Ignicion</th>
                        <th>Causa Incendio</th>
                        <th>Lugar Inicio</th>
                        <th>Lugar Fin</th>
                        <th>Reignicion</th>
                        <th>Tipo de Combustible</th>
                        <th>Declaracion</th>
                        <th>Lesionados</th>
                        <th>Numero Lesionados</th>
                        <th>Datos Lesionados</th>
                        <th>Recurso Utilizado</th>
                        <th>Cantidad Recurso Utilizado</th>
                        <th>Unidad</th>
                        <th>Jefe de Comision</th>
                        <th>Efectivo</th>
                        <th>CI PNB</th>
                        <th>CI GNB</th>
                        <th>CI INTT</th>
                        <th>CI INVITY</th>
                        <th>CI PC</th>
                        <th>CI OTRO</th>
                        <th>Observaciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosIncendio as $incendio) : ?>

                        <tr>
                            <td><?= $incendio['asegurado']; ?></td>
                            <td><?= $incendio['aseguradora']; ?></td>
                            <td><?= $incendio['num_poliza']; ?></td>
                            <td><?= $incendio['valor_asegurado']; ?></td>
                            <td><?= $incendio['valor_perdido']; ?></td>
                            <td><?= $incendio['valor_salvado']; ?></td>
                            <td><?= $incendio['fuente_ignicion']; ?></td>
                            <td><?= $incendio['causa_incendio']; ?></td>
                            <td><?= $incendio['lugar_inicio']; ?></td>
                            <td><?= $incendio['lugar_fin']; ?></td>
                            <td><?= $incendio['reignicion']; ?></td>
                            <td><?= $incendio['tipo_combustible']; ?></td>
                            <td><?= $incendio['declaracion']; ?></td>
                            <td><?= $incendio['lesionados']; ?></td>
                            <td><?= $incendio['num_lesionados']; ?></td>
                            <td><?= $incendio['datos_lesionados']; ?></td>
                            <td><?= $incendio['recurso_utilizado']; ?></td>
                            <td><?= $incendio['cantidad_recurso_usado']; ?></td>
                            <td><?= $incendio['unidad']; ?></td>
                            <td><?= $incendio['jefe_comision']; ?></td>
                            <td><?= $incendio['efectivo']; ?></td>
                            <td><?= $incendio['ci_pnb']; ?></td>
                            <td><?= $incendio['ci_gnb']; ?></td>
                            <td><?= $incendio['ci_intt']; ?></td>
                            <td><?= $incendio['ci_invity']; ?></td>
                            <td><?= $incendio['ci_pc']; ?></td>
                            <td><?= $incendio['ci_otro']; ?></td>
                            <td><?= $incendio['observaciones']; ?></td>
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
    $dompdf->loadHtml(generarHTMLReporteIncendio($incendio));
    $dompdf->setPaper('A1', 'landscape');
    $dompdf->render();
    $dompdf->stream('reporte_incendio.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>