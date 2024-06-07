<?php
session_start();

$nombrePagina = 'Catálogo Incendios';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM incendio");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12 m-auto">

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Incendios</h4>
                    <?php include("modal/modalIncendioR.php"); ?>
                </div>

                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columnas" hidden>ID</th>
                                <th class="columnas">Fecha</th>
                                <th class="columnas">Seccion</th>
                                <th class="columnas" hidden>Estacion</th>
                                <th class="columnas" hidden>Tipo de Aviso</th>
                                <th class="columnas" hidden>Solicitante</th>
                                <th class="columnas" hidden>Receptor</th>
                                <th class="columnas" hidden>Aprobador</th>
                                <th class="columnas" hidden>Hora Aviso</th>
                                <th class="columnas" hidden>Hora Salida</th>
                                <th class="columnas" hidden>Hora Llegada</th>
                                <th class="columnas" hidden>Hora Regreso</th>
                                <th class="columnas" hidden>Municipio</th>
                                <th class="columnas">Localidad</th>
                                <th class="columnas" hidden>Direccion</th>
                                <th class="columnas" hidden>Paredes</th>
                                <th class="columnas" hidden>Techo</th>
                                <th class="columnas" hidden>Piso</th>
                                <th class="columnas" hidden>Ventanas</th>
                                <th class="columnas" hidden>Puertas</th>
                                <th class="columnas" hidden>Otros Materiales</th>
                                <th class="columnas">Propietario Vivienda</th>
                                <th class="columnas">Valor Inmueble</th>
                                <th class="columnas">Numero Residenciados</th>
                                <th class="columnas" hidden>Ninos</th>
                                <th class="columnas" hidden>Adolescentes</th>
                                <th class="columnas" hidden>Adultos</th>
                                <th class="columnas" hidden>Info Adicional</th>
                                <th class="columnas" hidden>Asegurado</th>
                                <th class="columnas" hidden>Aseguradora</th>
                                <th class="columnas" hidden>Numero de Poliza</th>
                                <th class="columnas" hidden>Valor Asegurado</th>
                                <th class="columnas" hidden>Valor Perdido</th>
                                <th class="columnas" hidden>Valor Salvado</th>
                                <th class="columnas">Fuente de Ignicion</th>
                                <th class="columnas">Causa Incendio</th>
                                <th class="columnas" hidden>Lugar Inicio</th>
                                <th class="columnas" hidden>Lugar Fin</th>
                                <th class="columnas" hidden>Reignicion</th>
                                <th class="columnas" hidden>Tipo de Combustible</th>
                                <th class="columnas" hidden>Declaracion</th>
                                <th class="columnas" hidden>Lesionados</th>
                                <th class="columnas" hidden>Numero Lesionados</th>
                                <th class="columnas" hidden>Datos Lesionados</th>
                                <th class="columnas" hidden>Recurso Utilizado</th>
                                <th class="columnas" hidden>Cantidad Recurso Utilizado</th>
                                <th class="columnas" hidden>Unidad</th>
                                <th class="columnas" hidden>Jefe de Comision</th>
                                <th class="columnas" hidden>Efectivo</th>
                                <th class="columnas" hidden>CI PNB</th>
                                <th class="columnas" hidden>CI GNB</th>
                                <th class="columnas" hidden>CI INTT</th>
                                <th class="columnas" hidden>CI INVITY</th>
                                <th class="columnas" hidden>CI PC</th>
                                <th class="columnas" hidden>CI OTRO</th>
                                <th class="columnas" hidden>Observaciones</th>
                                <th class="columnas">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultado as $incendio) : ?>
                                <tr class="fila">
                                    <td class="columnas" hidden><?= $incendio['id'] ?></td>
                                    <td class="columnas"><?= $incendio['fecha']; ?></td>
                                    <td class="columnas"><?= $incendio['seccion']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['estacion']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['tipo_aviso']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['solicitante']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['receptor']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['aprobador']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['hora_aviso']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['hora_salida']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['hora_llegada']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['hora_regreso']; ?></td>
                                    <td class="columnas"><?= $incendio['municipio']; ?></td>
                                    <td class="columnas"><?= $incendio['localidad']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['direccion']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['paredes']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['techo']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['piso']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ventanas']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['puertas']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['otros_materiales']; ?></td>
                                    <td class="columnas"><?= $incendio['propietario']; ?></td>
                                    <td class="columnas"><?= $incendio['valor_inmueble']; ?></td>
                                    <td class="columnas"><?= $incendio['num_residenciados']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ninos']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['adolescentes']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['adultos']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['info_adicional']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['asegurado']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['aseguradora']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['num_poliza']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['valor_asegurado']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['valor_perdido']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['valor_salvado']; ?></td>
                                    <td class="columnas"><?= $incendio['fuente_ignicion']; ?></td>
                                    <td class="columnas"><?= $incendio['causa_incendio']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['lugar_inicio']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['lugar_fin']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['reignicion']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['tipo_combustible']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['declaracion']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['lesionados']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['num_lesionados']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['datos_lesionados']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['recurso_utilizado']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['cantidad_recurso_usado']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['unidad']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['jefe_comision']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['efectivo']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_pnb']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_gnb']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_intt']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_invity']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_pc']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_otro']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['observaciones']; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalIncendioM.php"); ?>
                                            <div class="flex-item"><a href='../controlador/ctl_incendio.php?txtID=<?= $incendio['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="Javascript/incendioModal.js"></script>

    <?php
    require('../footer.php');
    ?>