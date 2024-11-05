<?php
require_once '../../modelo/conexion.php';

// Crear variable

$stmt = $conexion->prepare("SELECT * FROM incendio_vehiculo");
$stmt->execute();
$incendio_vehiculo = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
            <title>Reporte de Incendio de Vehiculo</title>
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
            <h2 align="center">Reporte de Incendio de Vehiculo</h2>
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
                        <th>Lugar</th>
                        <th>Direccion</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Año</th>
                        <th>Placa del Vehiculo</th>
                        <th>Serial del Vehiculo</th>
                        <th>Color del Vehiculo</th>
                        <th>N de Puestos</th>
                        <th>Propietario del Vehiculo</th>
                        <th>C.I Del Propietario</th>
                        <th>Valor Aproximado del Vehiculo</th>
                        <th>Conductor del Vehiculo</th>
                        <th>C.I Del Conductor</th>
                        <th>Aseguradora</th>
                        <th>Fecha de Vigencia</th>
                        <th>Lugar donde comenzo el Servicio</th>
                        <th>Fuente de Ignicion</th>
                        <th>Lugar donde culmino el Servicio</th>
                        <th>Causa del Incendio</th>
                        <th>Hubo Reignicion</th> 
                        <th>Clase de combustible afectado</th> 
                        <th>Declaracion del incendio</th> 
                        <th>Hubo Lesionados</th> 
                        <th>Numero de Lesionados</th> 
                        <th>Acta</th> 
                        <th>Observaciones</th> 
                        <th>Jefe Comision</th> 
                        <th>Jefe General</th> 
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
                    <?php foreach ($incendio_vehiculo as $incendio_vehicul) : ?>
                        <tr>
                        <td><?= $incendio_vehicul["id"]; ?></td>
                        <td><?= $incendio_vehicul["fecha"]; ?></td>
                        <td><?= $incendio_vehicul["seccion"]; ?></td>
                        <td><?= $incendio_vehicul["estacion"]; ?></td>
                        <td><?= $incendio_vehicul["aviso"]; ?></td>
                        <td><?= $incendio_vehicul["hora"]; ?></td>
                        <td><?= $incendio_vehicul["salida"]; ?></td>
                        <td><?= $incendio_vehicul["llegada"]; ?></td>
                        <td><?= $incendio_vehicul["regreso"]; ?></td>
                        <td><?= $incendio_vehicul["lugar"]; ?></td>
                        <td><?= $incendio_vehicul["direccion"]; ?></td>
                        <td><?= $incendio_vehicul["modelo"]; ?></td>
                        <td><?= $incendio_vehicul["marca"]; ?></td>
                        <td><?= $incendio_vehicul["año"]; ?></td>
                        <td><?= $incendio_vehicul["placa"]; ?></td>
                        <td><?= $incendio_vehicul["serial"]; ?></td>
                        <td><?= $incendio_vehicul["color"]; ?></td>
                        <td><?= $incendio_vehicul["puestos"]; ?></td>
                        <td><?= $incendio_vehicul["propietario"]; ?></td>
                        <td><?= $incendio_vehicul["ci_propietario"]; ?></td>
                        <td><?= $incendio_vehicul["valor"]; ?></td>
                        <td><?= $incendio_vehicul["conductor"]; ?></td>
                        <td><?= $incendio_vehicul["ci_conductor"]; ?></td>
                        <td><?= $incendio_vehicul["aseguradora"]; ?></td>
                        <td><?= $incendio_vehicul["vigencia"]; ?></td>
                        <td><?= $incendio_vehicul["inicio"]; ?></td>
                        <td><?= $incendio_vehicul["ignicion"]; ?></td>
                        <td><?= $incendio_vehicul["culmino"]; ?></td>
                        <td><?= $incendio_vehicul["causa"]; ?></td>
                        <td><?= $incendio_vehicul["h_reignicion"]; ?></td>
                        <td><?= $incendio_vehicul["clase"]; ?></td>
                        <td><?= $incendio_vehicul["declaracion"]; ?></td>
                        <td><?= $incendio_vehicul["h_lesionados"]; ?></td>
                        <td><?= $incendio_vehicul["lesionados"]; ?></td>
                        <td><?= $incendio_vehicul["acta"]; ?></td>
                        <td><?= $incendio_vehicul["observaciones"]; ?></td>
                        <td><?= $incendio_vehicul["jefe_comision"]; ?></td>
                        <td><?= $incendio_vehicul["jefe_general"]; ?></td>
                        <td><?= $incendio_vehicul["jefe_seccion"]; ?></td>
                        <td><?= $incendio_vehicul["comandante"]; ?></td>
                        <td><?php if(!isset($incendio_vehicul["ci_pnb"])){ echo $incendio_vehicul["ci_pnb"];}else{echo "Ninguno";}?></td>
                        <td><?php if(!isset($incendio_vehicul["ci_gnb"])){ echo $incendio_vehicul["ci_gnb"];}else{echo "Ninguno";}?></td>
                        <td><?php if(!isset($incendio_vehicul["ci_intt"])){ echo $incendio_vehicul["ci_intt"];}else{echo "Ninguno";}?></td>
                        <td><?php if(!isset($incendio_vehicul["ci_invity"])){ echo $incendio_vehicul["ci_invity"];}else{echo "Ninguno";}?></td>
                        <td><?php if(!isset($incendio_vehicul["ci_pc"])){ echo $incendio_vehicul["ci_pc"];}else{echo "Ninguno";}?></td>
                        <td><?php if(!isset($incendio_vehicul["ci_otro"])){ echo $incendio_vehicul["ci_otro"];}else{echo "Ninguno";}?></td>
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

$dompdf->setPaper('A0', 'landscape');

$dompdf->render();

$dompdf->stream("locales.pdf", array("Attachment" => false));
?>