<?php
session_start();

require_once '../../modelo/conexion.php';

// Crear variable




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
      <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Servicios Especiales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: -20px;
            margin-left: -15px;
            width: 200mm; /* A4 width */
            height: 260mm; /* A4 height */
            border: 1px solid black;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            font-size: 22px;
            margin: 0;
            margin-top: 10px;
            margin-bottom: -10px;
        }

        h2{
            text-align: center;
            font-size: 18px;
            margin: 5px;

        }

        h3 {
            font-size: 14px;
            margin: 0px 0;
            
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0px 0;
        }
        th, td {
           border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        input[type="text"]{
            border-top: none;
            border-left: none;
            border-right: none;
            margin-bottom: -5px;
        }

        input[type="checkbox"]{
            margin-bottom: -6px;
        }

        textarea{
            font-family: Arial, sans-serif;
        }
       
        .header-section {
            text-align: center;
            margin: -10px;
        }
        .header-section img {
            width: 60px;
            vertical-align: middle;
        }
        .header-section div {
            display: inline-block;
            width: calc(100% - 120px);
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Encabezado del reporte -->
        <table>
            <tr>
                <td>
                <div class="header-section">
            <img src="escudo.png" alt="Escudo">
            <div>
                <h1 align="center">REPÚBLICA BOLIVARIANA DE VENEZUELA <br>
                GOBIERNO DEL ESTADO YARACUY<br>INSTITUTO AUTÓNOMO CUERPO DE BOMBEROS</h1>
            </div>
            <img src="bomberos.png" alt="Bomberos">
                </div>
                </td>
            </tr>
        </table>
        <h2 align="center">REPORTE DE SERVICIOS ESPECIALES</h2>

        <!-- Información General -->
        <table>
            <tr>
                <td>FECHA: <input type="text" name="fecha"></td>
                <td>SECCIÓN: <input type="text"></td>
                <td>ESTACIÓN: <input type="text"></td>
            </tr>
        </table>

        <h3 align="center">1) INFORMACIÓN GENERAL:</h3>
        <table>
            <tr>
                <td>HORA DE AVISO: <input type="text"></td>
                <td>HORA DE SALIDA: <input type="text"></td>
            </tr>
            <tr>
                <td>HORA DE LLEGADA AL SITIO: <input type="text"></td>
                <td>HORA DE REGRESO: <input type="text"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td colspan="2">TIPO DE AVISO: <input type="text" size="30px"></td>
                <td>CAUSA DEL SERVICIO: <input type="text" size="10px"></td>
            </tr>
        </table>
        
        <!-- Ejecución del Servicio -->
        
        <h3 align="center">2) EJECUCION DEL SERVICIO:</h3>
        <table>
            <tr>
                <td>JEFE DE COMISIÓN: <input type="text" size="40px"></td>
                <td>C.I.: <input type="text" size="10px"></td>
            </tr>
        </table>

        <h3 align="center">3) MATERIAL UTILIZADO:</h3>
        <table>
            <tr>
                <td>MALETIN PRIMEROS AUXILIOS: SI <input type="checkbox" id="si"> NO <input type="checkbox"> CANTIDAD: <input type="text" size="15px"></td>
                <td>OTROS:<input type="text"></td>
            </tr>
        </table>

        <!-- Otras Autoridades -->
        <h3 align="center">4) OTRAS AUTORIDADES EN EL SITIO:</h3>
        <table>
            <tr>
                <td>POLICÍA DEL ESTADO: <input type="text"></td>
                <td>C.I.: <input type="text"></td>
                <td>G.N.B.: <input type="text"></td>
            </tr>
            <tr>
                <td>TRÁNSITO TERRESTRE: <input type="text"></td>
                <td>C.I.: <input type="text"></td>
                <td>I.N.V.I.T.: <input type="text"></td>
                
            </tr>
            <tr>
                <td>P.C.: <input type="text"></td>
                <td>C.I.: <input type="text"></td>
                <td>OTROS: <input type="text"></td>
            </tr>
        </table>

        <!-- Acta en el sitio -->
        
        <table>
            <tr>
                <td><h3 align="center">5) SE LEVANTÓ ACTA EN EL SITIO: SI <input type="checkbox" id="si"> NO <input type="checkbox">  (VER ACTA ANEXA: SI <input type="checkbox" id="si"> NO <input type="checkbox"> )</h3></td>
            </tr>
        </table>

        <!-- Observaciones -->
            <table>
                <tr>
                    <td style="padding: 0;">
                     <h3 align="center">6) OBSERVACIONES:</h3>
                    </td>
                </tr>
                <tr>
                    <td><textarea style="border: none; height:192px;" resize="none"></textarea></td>
                </tr>

            </table>
            
           
            <table>
                <tr>
                    <td>
                      <b> JEFE DE COMISION:</b><br> <br>
                       NOMBRE Y APELLIDO: <input type="text" name="" id=""> <br> <br>

                       CI: <input type="text" name="" id="">  FIRMA: <input type="text" name="" id="" size="10px">
                    
                    </td>
                    <td>
                       <b>JEFE DE SERVICIOS GENERALES:</b> <br> <br>
                       NOMBRE Y APELLIDO: <input type="text" name="" id=""> <br> <br>

                       CI: <input type="text" name="" id="">  FIRMA: <input type="text" name="" id="" size="10px">
                    
                    </td>
                </tr>
                <tr>
                    <td>
                       <b>JEFE DE SECCION:</b> <br> <br>
                       NOMBRE Y APELLIDO: <input type="text" name="" id=""> <br> <br>

                       CI: <input type="text" name="" id="">  FIRMA: <input type="text" name="" id="" size="10px">
                    
                    </td>
                    <td>
                       <b>COMANDANTE:</b> <br> <br>
                       NOMBRE Y APELLIDO: <input type="text" name="" id=""> <br> <br>

                       CI: <input type="text" name="" id=""> FIRMA: <input type="text" name="" id="" size="10px">
                    
                    </td>
                </tr>
            </table>
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

$dompdf->setPaper( 'letter');

// $dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream("locales.pdf", array("Attachment" => false));
?>