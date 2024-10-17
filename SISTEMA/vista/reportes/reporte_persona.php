<?php
include('../../modelo/conexion.php');

$stmt = $conexion->prepare("SELECT * FROM persona");
$stmt->execute();
$persona = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $path = 'imagenes/logo_bomberos.jpg';
    $logo = "data:image/jpg;base64," . base64_encode(file_get_contents($path));

    $path2 = 'imagenes/firma.jpg';
    $firma = "data:image/jpg;base64," . base64_encode(file_get_contents($path2));
    ob_start(); // Iniciar el buffer de salida
// 

// 

// 

    // Preparar y ejecutar la consulta SQL con los filtros aplicados
   

        // Construir el HTML del reporte de municipio
?>
      <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Reporte de Persona</title>
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

                .linea{
                    width: 90%;
                    border: 0.5px solid black;
                    margin: auto;
                    margin-top: 30px;
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
            
                <img align="left" src="<?=$logo?>" style="margin-left:-30px; margin-top:-10px;" alt="Logo de la Institución" width="150px" height="100px">
         
            <h2 align="center" >Cuerpo Autonomo de Bomberos de Yaracuy</h2>
            <h2 align="center">Reporte de Persona</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Sexo</th>
                        <th>Tipo</th>
                        <th>Cargo</th>
                        <th>Seccion</th>
                        <th>Estacion</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($persona as $per) : ?>
                        <tr>
                            <td><?= ($per['cedula']) ?></td>
                            <td><?= ($per['nombre']) ?></td>
                            <td><?= ($per['edad']) ?></td>
                            <td><?= ($per['correo']) ?></td>
                            <td><?= ($per['telefono']) ?></td>
                            <td><?= ($per['direccion']) ?></td>
                            <td><?= ($per['sexo']) ?></td>
                            <td><?= ($per['tipo_persona']) ?></td>
                            <td><?= ($per['cargo']) ?></td>
                            <td><?= ($per['seccion']) ?></td>
                            <td><?= ($per['estacion']) ?></td>
                            <td><?= ($per['estado']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h3 align="center" style="margin-top: 50px;">Directivo: Aldo Tortolani</h3>
            <div align="center"> <img src="<?=$firma?>" alt="Logo de la Institución" width="150px" height="100px"></div>
           
            <div class="linea">

           </div>
        </body>

        </html>
<?php

        $html = ob_get_clean(); // Obtener y limpiar el contenido del buffer

require_once "../dompdf/autoload.inc.php";

use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();

$options->set(array('isRemoteEnabled' => true));

$dompdf->setOptions($options);

$dompdf->loadHtml($html);

// $dompdf->setPaper( 'letter');

$dompdf->setPaper('A3', 'landscape');

$dompdf->render();

$dompdf->stream("locales.pdf", array("Attachment" => false));
?>