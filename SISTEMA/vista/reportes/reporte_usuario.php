<?php
require_once '../dompdf/autoload.inc.php';
require_once '../../modelo/conexion.php';

use Dompdf\Dompdf;

try {
    // Obtener filtros del formulario
    $filtro_cedula = isset($_POST['cedula_usuario_buscador']) ? '%' . $_POST['cedula_usuario_buscador'] . '%' : '%';
    $filtro_nombre = isset($_POST['nombre_usuario_buscador']) ? '%' . $_POST['nombre_usuario_buscador'] . '%' : '%';
    $filtro_estado = isset($_POST['estado_usuario_buscador']) ? '%' . $_POST['estado_usuario_buscador'] . '%' : '%';

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
    $stmt = $conexion->prepare("SELECT * FROM usuario WHERE cedula LIKE :cedula AND nombre LIKE :nombre AND estado LIKE :estado");
    $stmt->bindParam(':cedula', $filtro_cedula, PDO::PARAM_STR);
    $stmt->bindParam(':nombre', $filtro_nombre, PDO::PARAM_STR);
    $stmt->bindParam(':estado', $filtro_estado, PDO::PARAM_STR);
    $stmt->execute();
    $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Función para generar el contenido HTML del reporte de Usuario
    function generarHTMLReporteUsuario($datosUsuario)
    {
        ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de Usuario
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de Usuario</title>
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
            <h2>Reporte de Usuario</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Clave</th>
                        <th>Pregunta</th>
                        <th>Respuesta</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosUsuario as $usuario) : ?>
                        <tr>
                            <td><?= $usuario['cedula']; ?></td>
                            <td><?= $usuario['nombre']; ?></td>
                            <td><?= $usuario['clave']; ?></td>
                            <td><?= $usuario['pregunta']; ?></td>
                            <td><?= $usuario['respuesta']; ?></td>
                            <td><?= $usuario['estado']; ?></td>
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
    $dompdf->loadHtml(generarHTMLReporteUsuario($usuario));
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('reporte_usuario.pdf', array('Attachment' => 0));
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>