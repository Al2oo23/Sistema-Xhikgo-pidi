<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_nombre = isset($_POST['nombre_recurso_buscador']) ? '%' . $_POST['nombre_recurso_buscador'] . '%' : '%';
    $filtro_tipo = isset($_POST['tipo_recurso_buscador']) ? '%' . $_POST['tipo_recurso_buscador'] . '%' : '%';
    $filtro_cantidad = isset($_POST['cantidad_recurso_buscador']) ? '%' . $_POST['cantidad_recurso_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM recurso WHERE nombre LIKE :nombre AND tipo LIKE :tipo AND cantidad LIKE :cantidad");
    $stmt->bindParam(':nombre', $filtro_nombre, PDO::PARAM_STR);
    $stmt->bindParam(':tipo', $filtro_tipo, PDO::PARAM_STR);
    $stmt->bindParam(':cantidad', $filtro_cantidad, PDO::PARAM_STR);
    $stmt->execute();
    $recursos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de recursos
    function generarHTMLReporteRecursos($datosRecursos)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de recursos
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de Recursos</title>
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
                <img src="../imagenes/logo.png" alt="Logo de la Institución" width="150">
            </div>
            <h1>Nombre de la Institución</h1>
            <h2>Reporte de Recursos</h2>
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
                    <?php foreach ($datosRecursos as $recurso) : ?>
                        <tr>
                            <td><?= htmlspecialchars($recurso['id']) ?></td>
                            <td><?= htmlspecialchars($recurso['nombre']) ?></td>
                            <td><?= htmlspecialchars($recurso['tipo']) ?></td>
                            <td><?= htmlspecialchars($recurso['cantidad']) ?></td>
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
    $dompdf->loadHtml(generarHTMLReporteRecursos($recursos));
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('reporte_recursos.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>