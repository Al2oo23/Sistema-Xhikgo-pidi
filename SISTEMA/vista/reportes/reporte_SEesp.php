<?php
session_start();

require_once '../../modelo/conexion.php';
require_once '../../modelo/clase_servicio.php';

$IDreporte = $_GET['txtIDreporte'];

// Consulta para obtener datos de la tabla servicios
$sqlservicios = "SELECT * FROM servicios WHERE id = :id";
$stmtservicios = $conexion->prepare($sqlservicios);
$stmtservicios->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtservicios->execute();
$reporte = $stmtservicios->fetch(PDO::FETCH_ASSOC);
$acta = $reporte['acta'];

// Consulta para obtener datos de recurso_asignado y recurso
$sqlRecursoAsignado = "SELECT ra.cantidad, r.nombre 
                           FROM recurso_asignado ra 
                           INNER JOIN recurso r ON ra.id_recurso = r.id 
                           WHERE id_incidente = :id AND tipo_incidente = 'S.E'";
$stmtRecursoAsignado = $conexion->prepare($sqlRecursoAsignado);
$stmtRecursoAsignado->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtRecursoAsignado->execute();
$recurso = $stmtRecursoAsignado->fetchAll(PDO::FETCH_ASSOC);

// Consulta para obtener datos de efectivo_asignado y persona
$sqlEfectivoAsignado = "SELECT * FROM efectivo_asignado ea 
                            INNER JOIN persona p ON ea.cedula = p.cedula 
                            WHERE id_incidente = :id AND tipo_incidente = 'S.E'";
$stmtEfectivoAsignado = $conexion->prepare($sqlEfectivoAsignado);
$stmtEfectivoAsignado->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtEfectivoAsignado->execute();
$efectivo = $stmtEfectivoAsignado->fetchAll(PDO::FETCH_ASSOC);

// Consulta para obtener datos del propietario del vehiculo
$sqlPvehiculo = "SELECT * FROM unidad_asignada ua INNER JOIN vehiculo v ON ua.niv = v.unidad INNER JOIN persona p ON v.cedula = p.cedula WHERE id_incidente = :id AND tipo_incidente = 'S.E'";
$stmtPvehiculo = $conexion->prepare($sqlPvehiculo);
$stmtPvehiculo->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtPvehiculo->execute();
$propietarioV = $stmtPvehiculo->fetchAll(PDO::FETCH_ASSOC); 

// Consulta para obtener datos del reporte junto con el nombre de la persona
$sqlPersona = "SELECT s.jefe_comision, p.nombre AS nombre
               FROM servicios s 
               INNER JOIN persona p ON s.jefe_comision = p.cedula 
               WHERE s.id = :id";
$stmtPersona = $conexion->prepare($sqlPersona);
$stmtPersona->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtPersona->execute();
$jefe_com = $stmtPersona->fetch(PDO::FETCH_ASSOC);

// Consulta para obtener datos del reporte junto con el nombre de la persona
$sqlPersona = "SELECT s.jefe_general, p.nombre AS nombre
               FROM servicios s 
               INNER JOIN persona p ON s.jefe_general = p.cedula 
               WHERE s.id = :id";
$stmtPersona = $conexion->prepare($sqlPersona);
$stmtPersona->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtPersona->execute();
$jefe_gen = $stmtPersona->fetch(PDO::FETCH_ASSOC);

// Consulta para obtener datos del reporte junto con el nombre de la persona
$sqlPersona = "SELECT s.jefe_seccion, p.nombre AS nombre
               FROM servicios s 
               INNER JOIN persona p ON s.jefe_seccion = p.cedula 
               WHERE s.id = :id";
$stmtPersona = $conexion->prepare($sqlPersona);
$stmtPersona->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtPersona->execute();
$jefe_sec = $stmtPersona->fetch(PDO::FETCH_ASSOC);

// Consulta para obtener datos del nombre de la persona
$sqlPersona = "SELECT s.comandante, p.nombre AS nombre
               FROM servicios s 
               INNER JOIN persona p ON s.comandante = p.cedula 
               WHERE s.id = :id";
$stmtPersona = $conexion->prepare($sqlPersona);
$stmtPersona->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtPersona->execute();
$comando = $stmtPersona->fetch(PDO::FETCH_ASSOC);


    $path = 'imagenes/logo_bomberos.jpg';
    $logo = "data:image/jpg;base64," . base64_encode(file_get_contents($path));

    $path2 = 'imagenes/firma.jpg';
    $firma = "data:image/jpg;base64," . base64_encode(file_get_contents($path2));
    ob_start(); // Iniciar el buffer de salida

        // Construir el HTML del reporte de servicios especiales
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
            height: 10px;
            margin: 0;
            margin-bottom: -2px;
            text-align: left;
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
        
        <!-- Ejecución del Servicios -->
        <table>
        <tr>
            <td style="padding: 0;"><h3 align="center">2) MATERIALES UTILIZADO:</h3></td>
        </tr>
      </table>
        <table>
            <tr>
            <td>
                    <?php foreach ($recurso as $rec) :?>
                    <input type="text" value="<?= $rec['nombre'] ?>" size="10px">:<input type="text" value="<?= $rec['cantidad'] ?>" size="1px">
                    <?php endforeach;?>
                </td>
            </tr>
        </table>

        <table>
        <tr>
                <td colspan="6">JEFE DE COMISION:<br><input type="text" size="20px" name="jefe_comision" value="<?= $jefe_com['nombre']; ?>"></td>
                <td colspan="6">
                    EFECTIVOS ACTUANTES:<br>

                    <?php foreach ($efectivo as $efecto): ?>
                    <input type="text" size="25px" name="efectivo" value="<?=$efecto['nombre'].' ('.$efecto['cedula'].')'?>"><br>
                    <?php endforeach; ?>

                </td>
                <td colspan="6">
                    PROPIETARIOS Y UNIDADES:<br>
                    <?php foreach ($propietarioV as $unidad): ?>
                        <input type="text" size="25px" name="unidad" value="<?=$unidad['nombre'].' ('.$unidad['cedula'].'): '.$unidad['unidad']; ?>"><br>
                    <?php endforeach; ?>

                </td>
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
            
           
            <table style="font-size:10px;">
            <tr>
                <td style="text-align: center;">
                    <b> JEFE DE COMISION:</b><br> <br>
                    NOMBRE Y APELLIDO: <input type="text" id="" value="<?= $jefe_com['nombre'] ?>" size="30px"> <br> <br>

                    CI: <input type="text" id="" value="<?= $reporte['jefe_comision'] ?>"> FIRMA: <input type="text" id="" size="10px">

                </td>
                <td style="text-align: center;">
                    <b>JEFE DE SERVICIOS GENERALES:</b> <br> <br>
                    NOMBRE Y APELLIDO: <input type="text" id="" size="30px" value="<?= $jefe_gen['nombre'] ?>"> <br> <br>

                    CI: <input type="text" id="" value="<?= $jefe_gen['jefe_general'] ?>"> FIRMA: <input type="text" id="" size="10px">

                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <b>JEFE DE SECCION:</b> <br> <br>
                    NOMBRE Y APELLIDO: <input type="text" id="" value="<?= $jefe_sec['nombre'] ?>" size="30px"> <br> <br>

                    CI: <input type="text" id="" value="<?= $reporte['jefe_seccion'] ?>"> FIRMA: <input type="text" id="" size="10px">

                </td>
                <td style="text-align: center;">
                    <b>COMANDANTE:</b> <br> <br>
                    NOMBRE Y APELLIDO: <input type="text" id="" value="<?= $comando['nombre'] ?>" size="30px"> <br> <br>

                    CI: <input type="text" id="" value="<?= $reporte['comandante'] ?>"> FIRMA: <input type="text" id="" size="10px">

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