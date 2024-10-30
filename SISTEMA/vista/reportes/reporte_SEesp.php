<?php
session_start();

require_once '../../modelo/conexion.php';
require_once '../../modelo/clase_servicio.php';

if (isset($_GET['ID'])) {
    $idReporte = $_GET['ID'];
    $servicio = new Servicio();
    $reporte = $servicio->reporte($idReporte); // Obtenemos los datos del reporte
    $acta = $reporte['acta'];
    
}
    
    // LLAMAR RECURSOS POR INCIDENTE
    $SQL = "SELECT * FROM recurso_asignado WHERE id_incidente = $idReporte";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute();


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
            padding: 7px;
            text-align: left;
        }

        input[type="text"]{
            border-top: none;
            border-left: none;
            border-right: none;
            margin-bottom: -2px;
        }

        input[type="checkbox"]{
            margin-bottom: -6px;
            background: none;
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
        <table>
            <tr>
                <td style="padding: 0;"><h2 align="center">REPORTE DE SERVICIOS ESPECIALES</h2></td>
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
            <td style="padding: 0;"><h3 align="center">1) INFORMACIÓN GENERAL:</h3></td>
        </tr>
      </table>
        <table>
            <tr>
                <td>HORA DE AVISO: <input type="text" name="hora" value="<?=$reporte['hora'];?>"></td>
                <td>HORA DE SALIDA: <input type="text" name="salida" value="<?=$reporte['salida'];?>"></td>
            </tr>
            <tr>
                <td>HORA DE LLEGADA: <input type="text" name="llegada" value="<?=$reporte['llegada'];?>"></td>
                <td>HORA DE REGRESO: <input type="text" name="regreso" value="<?=$reporte['regreso'];?>"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>TIPO DE AVISO: <input type="text"  value="<?=$reporte['aviso'];?>" size="10px"></td>
                <td>CAUSA QUE GENERÓ EL SERVICIO: <input type="text" value="<?=$reporte['causa'];?>" size="30px"></td>
            </tr>
        </table>
        
        <!-- Ejecución del Servicio -->
        
        <table>
        <tr>
            <td style="padding: 0;"><h3 align="center">2) EJECUCIÓN DEL SERVICIO:</h3></td>
        </tr>
      </table>
        <table>
            <tr>
                <td>JEFE DE COMISIÓN: <input type="text" size="40px"></td>
                <td>C.I.: <input type="text" value="<?=$reporte['jefe_comision'];?>" size="10px"></td>
            </tr>
        </table>

        <table>
        <tr>
            <td style="padding: 0;"><h3 align="center">3) MATERIALES UTILIZADO:</h3></td>
        </tr>
      </table>
        <table>
            <tr>
                <?php foreach ($preparado as $recurso):?>
                <td><input type="text" value="<?=$recurso['id_recurso']?>" size="1px">:<input type="text" value="<?=$recurso['cantidad']?>" size="1px"></td>
                <?php endforeach;?>
            </tr>
        </table>

        <!-- Otras Autoridades -->
        <table>
        <tr>
            <td style="padding: 0;"><h3 align="center">4) OTRAS AUTORIDADES EN EL SITIO:</h3></td>
        </tr>
      </table>
        <table>
            <tr>
                <td>C.I. POLICÍA DEL ESTADO: <input type="text"size="20px" value="<?=$reporte['ci_pnb'];?>"></td>
                <td>C.I. G.N.B.: <input type="text"  size="20px"  value="<?=$reporte['ci_gnb'];?>" ></td>
            </tr>
            <tr>
                <td>C.I. TRÁNSITO TERRESTRE: <input type="text"  size="20px"  value="<?=$reporte['ci_intt'];?>"></td>
                <td>C.I. I.N.V.I.T.Y: <input type="text"  size="20px" value="<?=$reporte['ci_invity'];?>"></td>
                
            </tr>
            <tr>
                <td>C.I. P.C.: <input type="text"  size="20px"  value="<?=$reporte['ci_pc'];?>"></td>
                <td>C.I. OTROS: <input type="text"  size="20px"  value="<?=$reporte['ci_otro'];?>"></td>
            </tr>
        </table>

        <!-- Acta en el sitio -->
        
        <table>
            <tr>
                <td style="padding: 0;"><h3 align="center">5) SE LEVANTÓ ACTA EN EL SITIO: SI <input type="checkbox" name="SI" <?php if ($acta === 'SI') echo 'checked'; ?>> NO <input type="checkbox" name="NO" <?php if ($acta === 'NO') echo 'checked'; ?>></h3></td>
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
                    <td><textarea style="border: none; height:192px;" resize="none"><?=$reporte['observaciones'];?></textarea></td>
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