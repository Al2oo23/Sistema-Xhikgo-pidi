<?php
require_once '../../modelo/conexion.php';

// Crear variable

$stmt = $conexion->prepare("SELECT * FROM vegetacion");
$stmt->execute();
$vegetacion = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
            <title>Reporte de Incendio de Vegetacion</title>
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
            <h2 align="center">Reporte de Incendio de Vegetacion</h2>
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
                        <th>Tipo de Incendio</th>
                        <th>Norte</th>
                        <th>Sur</th>
                        <th>Este</th>
                        <th>Oeste</th>
                        <th>Direccion</th>
                        <th>Lugar</th>
                        <th>Jefe</th> 
                        <th>Acta</th> 
                        <th>Observaciones</th> 
                        <th>INSP.Gral de los Servicios</th> 
                        <th>Jefe de Seccion</th> 
                        <th>Comandante</th> 
                        <th>CI_PNB</th>
                        <th>CI_GNB</th>
                        <th>CI_INTT</th>
                        <th>CI_INVITY</th>
                        <th>CI_PC</th>
                        <th>CI_OTRO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vegetacion as $vege) : ?>
                        <tr>
                        <td><?= $vege["id"]; ?></td>
                        <td><?= $vege["fecha"]; ?></td>
                        <td><?= $vege["seccion"]; ?></td>
                        <td><?= $vege["estacion"]; ?></td>
                        <td><?= $vege["aviso"]; ?></td>
                        <td><?= $vege["hora"]; ?></td>
                        <td><?= $vege["salida"]; ?></td>
                        <td><?= $vege["llegada"]; ?></td>
                        <td><?= $vege["regreso"]; ?></td>
                        <td><?= $vege["incendio"]; ?></td>
                        <td><?= $vege["norte"]; ?></td>
                        <td><?= $vege["sur"]; ?></td>
                        <td><?= $vege["este"]; ?></td>
                        <td><?= $vege["oeste"]; ?></td>
                        <td><?= $vege["direccion"]; ?></td>
                        <td><?= $vege["lugar"]; ?></td>
                        <td><?= $vege["jefe"]; ?></td>
                        <td><?= $vege["acta"]; ?></td>
                        <td><?= $vege["observaciones"]; ?></td>
                        <td><?= $vege["gral_servicios"]; ?></td>
                        <td><?= $vege["jefe_deseccion"]; ?></td>
                        <td><?= $vege["comandante"]; ?></td>
                        <td><?php if(!isset($vege["ci_pnb"])){ echo $vege["ci_pnb"];}else{echo "Ninguno";}?></td>
                        <td><?php if(!isset($vege["ci_gnb"])){ echo $vege["ci_gnb"];}else{echo "Ninguno";}?></td>
                        <td><?php if(!isset($vege["ci_intt"])){ echo $vege["ci_intt"];}else{echo "Ninguno";}?></td>
                        <td><?php if(!isset($vege["ci_invity"])){ echo $vege["ci_invity"];}else{echo "Ninguno";}?></td>
                        <td><?php if(!isset($vege["ci_pc"])){ echo $vege["ci_pc"];}else{echo "Ninguno";}?></td>
                        <td><?php if(!isset($vege["ci_otro"])){ echo $vege["ci_otro"];}else{echo "Ninguno";}?></td>
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