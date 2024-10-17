<?php
require_once '../../modelo/conexion.php';

// Crear variable

$stmt = $conexion->prepare("SELECT * FROM transito");
$stmt->execute();
$transito = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
            <h2 align="center">Reporte de Transito</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Seccion</th>
                        <th>Emergencia</th>
                        <th>Inspeccion</th>
                        <th>Tipo de Incidente</th>
                        <th>Occisos</th>
                        <th>Incendio</th>
                        <th>CI_PNB</th>
                        <th>CI_GNB</th>
                        <th>CI_INTT</th>
                        <th>CI_INVITY</th>
                        <th>CI_PC</th>
                        <th>CI_OTRO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transito as $carro) : ?>
                        <tr>
                            <td><?= $carro['id'] ?></td>
                            <td><?= $carro['fecha']; ?></td>
                            <td><?= $carro['seccion']; ?></td>
                            <td><?= $carro['emergencia']; ?></td>
                            <td><?= $carro['inspeccion']; ?></td>
                            <td><?= $carro['incidente']; ?></td>
                            <td><?= $carro['occisos']; ?></td>
                            <td><?= $carro['incendio']; ?></td>
                            <td><?php if(!isset($carro["pnb"])){ echo $carro["pnb"];}else{echo "Ninguno";}?></td>
                            <td><?php if(!isset($carro["gnb"])){ echo $carro["gnb"];}else{echo "Ninguno";}?></td>
                            <td><?php if(!isset($carro["intt"])){ echo $carro["intt"];}else{echo "Ninguno";}?></td>
                            <td><?php if(!isset($carro["invity"])){ echo $carro["invity"];}else{echo "Ninguno";}?></td>
                            <td><?php if(!isset($carro["pc"])){ echo $carro["pc"];}else{echo "Ninguno";}?></td>
                            <td><?php if(!isset($carro["otros"])){ echo $carro["otros"];}else{echo "Ninguno";}?></td>
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