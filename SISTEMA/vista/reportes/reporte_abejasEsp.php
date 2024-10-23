<?php
session_start();

require_once '../../modelo/conexion.php';
require_once '../../modelo/clase_abejas.php';

// Crear variable

if (isset($_GET['ID'])) {
    $idReporte = $_GET['ID'];
    $abejas = new Abejas();
    $reporte = $abejas->reporte($idReporte); // Obtenemos los datos del reporte
}


    $path = 'imagenes/logo_bomberos.jpg';
    $logo = "data:image/jpg;base64," . base64_encode(file_get_contents($path));

    $path2 = 'imagenes/firma.jpg';
    $firma = "data:image/jpg;base64," . base64_encode(file_get_contents($path2));

    $path3 = 'imagenes/Escudo_Yaracuy.jpg';
    $logo2 = "data:image/jpg;base64," . base64_encode(file_get_contents($path3));
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
    <title>Reporte de Exterminación de Abejas</title>
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
            border:none;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            font-size: 22px;
            margin: 0;
            margin-top: 10px;
            margin-left: -20px;
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
            height: 10px;
            margin: 0;
            margin-bottom: -2px;
        }

        input[type="checkbox"]{
            margin-bottom: -6px;
        }

        textarea{
            font-family: Arial, sans-serif;
        }
       
        .header-section {
            text-align: center;
            margin: -5px;
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
                    <!-- <img height="80px" width="80px" src="<?=$logo2?>" alt=""> -->
            
               <div>
                    <h1>REPÚBLICA BOLIVARIANA DE VENEZUELA <br>
                    GOBIERNO DEL ESTADO YARACUY<br>INSTITUTO AUTÓNOMO CUERPO DE BOMBEROS</h1>
                </div>
                    <!-- <img src="<?=$logo?>" width="120px" height="80px" style=""> -->
                </div>
                </td>
            </tr>
        </table>
        
       <table>
        <tr>
            <td style="padding:0;"><h2 align="center">REPORTE DE EXTERMINACIÓN DE ABEJAS</h2></td>
        </tr>
       </table>

        <!-- Información General -->
        <table>
            <tr>
                <td>FECHA: <input type="text" name="fecha" value="<?=$reporte['fecha'];?>"></td>
                <td>SECCIÓN: <input type="text" name="seccion" value="<?=$reporte['seccion'];?>"></td>
                <td>ESTACIÓN: <input type="text" name="estacion" value="<?=$reporte['estacion'];?>"></td>
            </tr>
        </table>

       <table>
        <tr>
            <td style="padding:0;"> <h3 align="center">1) INFORMACIÓN GENERAL:</h3></td>
        </tr>
       </table>

        <table>
            <tr>
                <td>HORA DE AVISO: <input type="text" name="hora" value="<?=$reporte['hora'];?>"></td>
                <td>HORA DE SALIDA: <input type="text" name="salida" value="<?=$reporte['salida'];?>"></td>
            </tr>
            <tr>
                <td>HORA DE LLEGADA AL SITIO: <input type="text" name="llegada"value="<?=$reporte['llegada'];?>"></td>
                <td>HORA DE REGRESO: <input type="text" name="regreso" value="<?=$reporte['regreso'];?>"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td colspan="2">TIPO DE AVISO: <input type="text" size="30px" name="aviso" value="<?=$reporte['aviso'];?>"></td>
            </tr>
        </table>
        <!-- Datos del Servicio -->
        
        <table>
            <tr>
                <td style="padding: 0;;"><h3 align="center">2) DATOS DEL SERVICIO:</h3></td>
            </tr>
        </table>
       
        <table>
            <tr>
                <td>UBICACION PANAL: <input type="text" size="10px" name="panal" value="<?=$reporte['panal'];?>"></td>
                <td>DIRECCION: <input type="text" name="direccion" value="<?=$reporte['direccion'];?>"></td>
                <td>LUGAR: <input type="text" size="10px" name="lugar" value="<?=$reporte['lugar'];?>"></td>
            </tr>
            <tr>
                <td colspan="2">PROPIETARIO DEL INMUEBLE: <input type="text" style="padding:5;" size="40px" name="inmueble" ></td>
                <td>C.I.: <input type="text"></td>
            </tr>
        </table>

        <!-- Ejecución del Servicio -->
        <table>
            <tr>
                <td style="padding: 0;;"><h3 align="center">3) EJECUCIÓN DEL SERVICIO:</h3></td>
            </tr>
        </table>
       
        <table>
            <tr>
                <td>JEFE DE COMISIÓN: <input type="text" size="40px"></td>
                <td>C.I.: <input type="text" size="10px"></td>
            </tr>
        </table>

        <!-- Otras Autoridades -->

        <table>
            <tr>
                <td style="padding: 0;;"><h3 align="center">4) OTRAS AUTORIDADES EN EL SITIO:</h3></td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td>C.I. POLICÍA DEL ESTADO: <input type="text"size="20px" value="<?=$reporte['ci_pnb'];?>" <?php if(!$reporte['ci_pnb']){echo "value='Ninguno'";}?>></td>
                <td>C.I. G.N.B.: <input type="text"  size="20px"  value="<?=$reporte['ci_gnb'];?>" <?php if(!$reporte['ci_gnb']){echo "value='Ninguno'";}?>></td>
            </tr>
            <tr>
                <td>C.I. TRÁNSITO TERRESTRE: <input type="text"  size="20px" ></td>
                <td>C.I. I.N.V.I.T.Y: <input type="text"  size="20px" value="<?=$reporte['ci_invity'];?>" <?php if(!$reporte['ci_invity']){echo "value='Ninguno'";}?>></td>
                
            </tr>
            <tr>
                <td>C.I. P.C.: <input type="text"  size="20px"  value="<?=$reporte['ci_pc'];?>" <?php if(!$reporte['ci_pc']){echo "value='Ninguno'";}?>></td>
                <td>C.I. OTROS: <input type="text"  size="20px"  value="<?=$reporte['ci_otro'];?>" <?php if(!$reporte['ci_otro']){echo "value='Ninguno'";}?>></td>
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
                    <td><textarea style="border: none; height:160px;" resize="none"></textarea></td>
                </tr>

            </table>
            
           
            <table style="font-size:10px;">
                <tr>
                    <td style="text-align: center;">
                      <b> JEFE DE COMISION:</b><br> <br>
                       NOMBRE Y APELLIDO: <input type="text" name="" id="" size="30px"> <br> <br>

                       CI: <input type="text" name="" id="">  FIRMA: <input type="text" name="" id="" size="10px">
                    
                    </td>
                    <td style="text-align: center;">
                       <b>JEFE DE SERVICIOS GENERALES:</b> <br> <br>
                       NOMBRE Y APELLIDO: <input type="text" name="" id=""  size="30px"> <br> <br>

                       CI: <input type="text" name="" id="">  FIRMA: <input type="text" name="" id="" size="10px">
                    
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                       <b>JEFE DE SECCION:</b> <br> <br>
                       NOMBRE Y APELLIDO: <input type="text" name="" id=""  size="30px"> <br> <br>

                       CI: <input type="text" name="" id="">  FIRMA: <input type="text" name="" id="" size="10px">
                    
                    </td>
                    <td style="text-align: center;">
                       <b>COMANDANTE:</b> <br> <br>
                       NOMBRE Y APELLIDO: <input type="text" name="" id=""  size="30px"> <br> <br>

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