<?php
session_start();

require_once '../../modelo/conexion.php';
require_once '../../modelo/clase_vegetacion.php';

// Crear variable


$IDreporte = $_GET['txtIDreporte'];

// Consulta para obtener datos de la tabla vegetacion
$sqlVegetacion = "SELECT * FROM vegetacion WHERE id = :id";
$stmtVegetacion = $conexion->prepare($sqlVegetacion);
$stmtVegetacion->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtVegetacion->execute();
$reporte = $stmtVegetacion->fetch(PDO::FETCH_ASSOC);
$acta = $reporte['acta'];

// Consulta para obtener datos de recurso_asignado y recurso
$sqlRecursoAsignado = "SELECT ra.cantidad, r.nombre 
                           FROM recurso_asignado ra 
                           INNER JOIN recurso r ON ra.id_recurso = r.id 
                           WHERE id_incidente = :id";
$stmtRecursoAsignado = $conexion->prepare($sqlRecursoAsignado);
$stmtRecursoAsignado->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtRecursoAsignado->execute();
$recurso = $stmtRecursoAsignado->fetchAll(PDO::FETCH_ASSOC);

// Consulta para obtener datos de efectivo_asignado y persona
$sqlEfectivoAsignado = "SELECT * FROM efectivo_asignado ea 
                            INNER JOIN persona p ON ea.cedula = p.cedula 
                            WHERE id_incidente = :id";
$stmtEfectivoAsignado = $conexion->prepare($sqlEfectivoAsignado);
$stmtEfectivoAsignado->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtEfectivoAsignado->execute();
$efectivo = $stmtEfectivoAsignado->fetchAll(PDO::FETCH_ASSOC);

// Consulta para obtener datos del propietario del vehiculo
$sqlPvehiculo = "SELECT * FROM unidad_asignada ua INNER JOIN vehiculo v ON ua.niv = v.unidad INNER JOIN persona p ON v.cedula = p.cedula WHERE id_incidente = :id";
$stmtPvehiculo = $conexion->prepare($sqlPvehiculo);
$stmtPvehiculo->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtPvehiculo->execute();
$propietarioV = $stmtPvehiculo->fetchAll(PDO::FETCH_ASSOC); 

// Consulta para obtener datos del reporte junto con el nombre de la persona
$sqlPersona = "SELECT a.jefe_comision, p.nombre AS nombre
               FROM vegetacion a 
               INNER JOIN persona p ON a.jefe_comision = p.cedula 
               WHERE a.id = :id";
$stmtPersona = $conexion->prepare($sqlPersona);
$stmtPersona->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtPersona->execute();
$jefe_com = $stmtPersona->fetch(PDO::FETCH_ASSOC);

// Consulta para obtener datos del reporte junto con el nombre de la persona
$sqlPersona = "SELECT a.jefe_general, p.nombre AS nombre
               FROM vegetacion a 
               INNER JOIN persona p ON a.jefe_general = p.cedula 
               WHERE a.id = :id";
$stmtPersona = $conexion->prepare($sqlPersona);
$stmtPersona->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtPersona->execute();
$jefe_gen = $stmtPersona->fetch(PDO::FETCH_ASSOC);

// Consulta para obtener datos del reporte junto con el nombre de la persona
$sqlPersona = "SELECT a.jefe_seccion, p.nombre AS nombre
               FROM vegetacion a 
               INNER JOIN persona p ON a.jefe_seccion = p.cedula 
               WHERE a.id = :id";
$stmtPersona = $conexion->prepare($sqlPersona);
$stmtPersona->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtPersona->execute();
$jefe_sec = $stmtPersona->fetch(PDO::FETCH_ASSOC);

// Consulta para obtener datos del nombre de la persona
$sqlPersona = "SELECT a.comandante, p.nombre AS nombre
               FROM vegetacion a 
               INNER JOIN persona p ON a.comandante = p.cedula 
               WHERE a.id = :id";
$stmtPersona = $conexion->prepare($sqlPersona);
$stmtPersona->bindParam(":id", $IDreporte, PDO::PARAM_INT);
$stmtPersona->execute();
$comando = $stmtPersona->fetch(PDO::FETCH_ASSOC);

$path = 'imagenes/logo_bomberos.jpg';
$logo = "data:image/jpg;base64," . base64_encode(file_get_contents($path));

$path2 = 'imagenes/firma.jpg';
$firma = "data:image/jpg;base64," . base64_encode(file_get_contents($path2));

$path3 = 'imagenes/Escudo_Yaracuy.jpg';
$logo2 = "data:image/jpg;base64," . base64_encode(file_get_contents($path3));
ob_start(); // Iniciar el buffer de salida

// Construir el HTML del reporte de vegetacion
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Incendio de Vegetacion </title>
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
            width: 200mm;
            /* A4 width */
            height: 260mm;
            /* A4 height */
            border: 1px solid black;
            border: none;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            font-size: 22px;
            margin: 0;
            /* margin-top: 10px; */
            margin-left: -20px;
            /* margin-bottom: -10px; */
        }

        h2 {
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

        th,
        td {
            border: 1px solid black;
            padding: 7px;
            text-align: left;
        }

        input[type="text"] {
            border-top: none;
            border-left: none;
            border-right: none;
            height: 10px;
            margin: 0;
            margin-bottom: -2px;
            text-align: left;
        }

        input[type="checkbox"] {
            margin-bottom: -6px;
            background: none;
        }

        textarea {
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
                        <!-- <img height="80px" width="80px" src="<?= $logo2 ?>" alt=""> -->

                        <div>
                            <h1>REPÚBLICA BOLIVARIANA DE VENEZUELA <br>
                                GOBIERNO DEL ESTADO YARACUY<br>INSTITUTO AUTÓNOMO CUERPO DE BOMBEROS</h1>
                        </div>
                        <!-- <img src="<?= $logo ?>" width="120px" height="80px" style=""> -->
                    </div>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td style="padding:0;">
                    <h2 align="center">REPORTE DE INCENDIO DE VEGETACION</h2>
                </td>
            </tr>
        </table>

        <!-- Información General -->
        <table>
            <tr>
                <td>FECHA: <input type="text" name="fecha" value="<?= $reporte['fecha']; ?>"></td>
                <td>SECCIÓN: <input type="text" name="seccion" value="<?= $reporte['seccion']; ?>"></td>
                <td>ESTACIÓN: <input type="text" name="estacion" value="<?= $reporte['estacion']; ?>"></td>
            </tr>
        </table>

        <table>
            <tr>
                <td style="padding:0;">
                    <h3 align="center">1) INFORMACIÓN GENERAL:</h3>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>HORA DE AVISO: <input type="text" name="hora" value="<?= $reporte['hora']; ?>"></td>
                <td>HORA DE SALIDA: <input type="text" name="salida" value="<?= $reporte['salida']; ?>"></td>
            </tr>
            <tr>
                <td>HORA DE LLEGADA: <input type="text" name="llegada" value="<?= $reporte['llegada']; ?>"></td>
                <td>HORA DE REGRESO: <input type="text" name="regreso" value="<?= $reporte['regreso']; ?>"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td colspan="2">TIPO DE AVISO: <input type="text" size="22px" name="aviso" value="<?= $reporte['aviso']; ?>"></td>
            
            </tr>
        </table>
        <!-- Datos del Servicio -->

        <table>
            <tr>
                <td style="padding: 0;;">
                    <h3 align="center">2) DATOS DEL SERVICIO:</h3>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td colspan="2">TIPO DE INCENDIO: <input type="text" size="10px" name="incendio" value="<?= $reporte['incendio']; ?>"></td>
                <td colspan="2">DIRECCION: <input type="text" name="direccion" value="<?= $reporte['direccion']; ?>"></td>
                <td colspan="2">LUGAR: <input type="text" size="10px" name="lugar" value="<?= $reporte['lugar']; ?>"></td>
            </tr>
        </table>

        <!-- AREAS ADYACENTES -->

        <table>
            <tr>
                <td style="padding: 0;;">
                    <h3 align="center">2) AREAS ADYACENTES :</h3>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td colspan="2">NORTE: <input type="text" size="10px" name="norte" value="<?= $reporte['norte']; ?>"></td>
                <td colspan="2">SUR: <input type="text" name="sur" value="<?= $reporte['sur']; ?>"></td>
                <td colspan="2">ESTE: <input type="text" size="10px" name="este" value="<?= $reporte['este']; ?>"></td>
                <td colspan="2">OESTE: <input type="text" size="10px" name="oeste" value="<?= $reporte['oeste']; ?>"></td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td style="padding: 0;;">
                    <h3 align="center">3) MATERIALES UTILIZADOS:</h3>
                </td>
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

        <!-- Ejecución del Servicio -->
        <table>
            <tr>
                <td style="padding: 0;">
                    <h3 align="center">4) EJECUCIÓN DEL SERVICIO:</h3>
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
                <td style="padding: 0;">
                    <h3 align="center">5) OTRAS AUTORIDADES EN EL SITIO:</h3>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>C.I. POLICÍA DEL ESTADO: <input type="text" size="20px" value="<?= $reporte['ci_pnb']; ?>" <?php if (!$reporte['ci_pnb']) {
                                                                                                                    echo "value='Ninguno'";
                                                                                                                } ?>></td>
                <td>C.I. G.N.B.: <input type="text" size="20px" value="<?= $reporte['ci_gnb']; ?>" <?php if (!$reporte['ci_gnb']) {
                                                                                                        echo "value='Ninguno'";
                                                                                                    } ?>></td>
            </tr>
            <tr>
                <td>C.I. TRÁNSITO TERRESTRE: <input type="text" size="20px" value="<?= $reporte['ci_intt']; ?>" <?php if (!$reporte['ci_intt']) {
                                                                                                                    echo "value='Ninguno'";
                                                                                                                } ?>></td>
                <td>C.I. I.N.V.I.T.Y: <input type="text" size="20px" value="<?= $reporte['ci_invity']; ?>" <?php if (!$reporte['ci_invity']) {
                                                                                                                echo "value='Ninguno'";
                                                                                                            } ?>></td>

            </tr>
            <tr>
                <td>C.I. P.C.: <input type="text" size="20px" value="<?= $reporte['ci_pc']; ?>" <?php if (!$reporte['ci_pc']) {
                                                                                                    echo "value='Ninguno'";
                                                                                                } ?>></td>
                <td>C.I. OTROS: <input type="text" size="20px" value="<?= $reporte['ci_otro']; ?>" <?php if (!$reporte['ci_otro']) {
                                                                                                        echo "value='Ninguno'";
                                                                                                    } ?>></td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="padding: 0;">
                    <h3 align="center">6) SE LEVANTÓ ACTA EN EL SITIO: SI <input type="checkbox" name="SI" <?php if ($acta === 'SI') echo 'checked'; ?>> NO <input type="checkbox" name="NO" <?php if ($acta === 'NO') echo 'checked'; ?>></h3>
                </td>
            </tr>
        </table>

        <!-- Observaciones -->
        <table>
            <tr>
                <td style="padding: 0;">
                    <h3 align="center">7) OBSERVACIONES:</h3>
                </td>
            </tr>
            <tr>
                <td><textarea style="border: none; height:160px;" resize="none"><?= $reporte['observaciones']; ?></textarea></td>
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
                    <b>JEFE GENERAL:</b> <br> <br>
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

$dompdf->setPaper('letter');

// $dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream("locales.pdf", array("Attachment" => false));
?>