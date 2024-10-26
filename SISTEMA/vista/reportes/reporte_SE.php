<?php
require_once '../../modelo/conexion.php';

// Crear variable

$stmt = $conexion->prepare("SELECT * FROM servicios");
$stmt->execute();
$servicios = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
            <title>Reporte de Servicios Especiales</title>
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
            <h2 align="center">Reporte de Servicios Especiales</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Seccion</th>
                        <th>Estacion</th>
                        <th>Aviso</th>
                        <th>Solicitante</th>
                        <th>Hora</th>
                        <th>Salida</th>
                        <th>Llegada</th>
                        <th>Regreso</th>
                        <th>Causa</th>
                        <th>Direccion</th>
                        <th>CI_PNB</th>
                        <th>CI_GNB</th>
                        <th>CI_INTT</th>
                        <th>CI_INVITY</th>
                        <th>CI_PC</th>
                        <th>CI_OTRO</th>
                        <th>Jefe de Comision</th>
                        <th>Jefe General</th>
                        <th>Jefe de Seccion</th>
                        <th>Comandante</th>
                        <th>Acta</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servicios as $se) : ?>
                        <tr>
                        <td><?= $se["id"]; ?></td>
                        <td><?= $se["fecha"]; ?></td>
                        <td><?= $se["seccion"]; ?></td>
                        <td><?= $se["estacion"]; ?></td>
                        <td><?= $se["aviso"]; ?></td>
                        <td><?= $se["solicitante"]; ?></td>
                        <td><?= $se["hora"]; ?></td>
                        <td><?= $se["salida"]; ?></td>
                        <td><?= $se["llegada"]; ?></td>
                        <td><?= $se["regreso"]; ?></td>
                        <td><?= $se["causa"]; ?></td>
                        <td><?= $se["direccion"]; ?></td>
                        <td><?=$se["ci_pnb"]?><?php if(!$se['ci_pnb']){echo "Ninguno";}?></td>
                        <td><?=$se["ci_gnb"]?><?php if(!$se['ci_gnb']){echo "Ninguno";}?></td>
                        <td><?=$se["ci_intt"]?><?php if(!$se['ci_intt']){echo "Ninguno";}?></td>
                        <td><?=$se["ci_invity"]?><?php if(!$se['ci_invity']){echo "Ninguno";}?></td>
                        <td><?=$se["ci_pc"]?><?php if(!$se['ci_pc']){echo "Ninguno";}?></td>
                        <td><?=$se["ci_otro"]?><?php if(!$se['ci_otro']){echo "Ninguno";}?></td>
                        <td><?=$se['jefe_comision'];?></td>
                        <td><?=$se['jefe_general'];?></td>
                        <td><?=$se['jefe_seccion'];?></td>
                        <td><?=$se['comandante'];?></td>
                        <td><?= $se["acta"]; ?></td>
                        <td><?= $se["observaciones"]; ?></td>
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

$dompdf->setPaper('A2', 'landscape');

$dompdf->render();

$dompdf->stream("locales.pdf", array("Attachment" => false));
?>