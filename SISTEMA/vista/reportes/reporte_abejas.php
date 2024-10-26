<?php
require_once '../../modelo/conexion.php';

// Crear variable

$stmt = $conexion->prepare("SELECT * FROM abejas");
$stmt->execute();
$abejas = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
            <title>Reporte de Exterminacion de Abejas</title>
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
            <h2 align="center">Reporte de Exterminacion de Abejas</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Seccion</th>
                        <th>Estacion</th>
                        <th>Aviso</th>
                        <th>Hora</th>
                        <th>Salida</th>
                        <th>Llegada</th>
                        <th>Regreso</th>
                        <th>Ubicacion</th>
                        <th>Direccion</th>
                        <th>Lugar</th>
                        <th>Dueño Inmueble</th> 
                        <th>Jefe</th> 
                        <th>CI_PNB</th>
                        <th>CI_GNB</th>
                        <th>CI_INTT</th>
                        <th>CI_INVITY</th>
                        <th>CI_PC</th>
                        <th>CI_OTRO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($abejas as $abej) : ?>
                        <tr>
                        <td><?= $abej["id"]; ?></td>
                        <td><?= $abej["fecha"]; ?></td>
                        <td><?= $abej["seccion"]; ?></td>
                        <td><?= $abej["estacion"]; ?></td>
                        <td><?= $abej["aviso"]; ?></td>
                        <td><?= $abej["hora"]; ?></td>
                        <td><?= $abej["salida"]; ?></td>
                        <td><?= $abej["llegada"]; ?></td>
                        <td><?= $abej["regreso"]; ?></td>
                        <td><?= $abej["panal"]; ?></td>
                        <td><?= $abej["direccion"]; ?></td>
                        <td><?= $abej["lugar"]; ?></td>
                        <td><?= $abej["inmueble"]; ?></td>
                        <td><?= $abej["jefe"]; ?></td>
                        <td><?=$abej["ci_pnb"]?><?php if(!$abej['ci_pnb']){echo "Ninguno";}?></td>
                        <td><?=$abej["ci_gnb"]?><?php if(!$abej['ci_gnb']){echo "Ninguno";}?></td>
                        <td><?=$abej["ci_intt"]?><?php if(!$abej['ci_intt']){echo "Ninguno";}?></td>
                        <td><?=$abej["ci_invity"]?><?php if(!$abej['ci_invity']){echo "Ninguno";}?></td>
                        <td><?=$abej["ci_pc"]?><?php if(!$abej['ci_pc']){echo "Ninguno";}?></td>
                        <td><?=$abej["ci_otro"]?><?php if(!$abej['ci_otro']){echo "Ninguno";}?></td>
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