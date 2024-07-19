<?php
session_start();
$nombrePagina = 'Catálogo Incidentes de Transito';
require ('../header.php');
include ('../modelo/conexion.php');

$SQL = "SELECT * FROM transito";
$preparado = $conexion->prepare($SQL);
$preparado->execute();
$resultados = $preparado->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-12" id="catalogo">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form" action="reportes/reporte_transito.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="fecha_transito_buscador">Fecha</label>
                                <input type="text" id="fecha_transito_buscador" name="fecha_transito_buscador"
                                    class="form-control" placeholder="Fecha Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="seccion_transito_buscador">Seccion</label>
                                <input type="text" id="seccion_transito_buscador" name="seccion_transito_buscador"
                                    class="form-control" placeholder="Seccion Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="estacion_transito_buscador">Estación</label>
                                <input type="text" id="estacion_transito_buscador" name="estacion_transito_buscador"
                                    class="form-control" placeholder="Estación Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="emergencia_transito_buscador">Emergencia</label>
                                <input type="text" id="emergencia_transito_buscador" name="emergencia_transito_buscador"
                                    class="form-control" placeholder="Emergencia Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="inspeccion_transito_buscador">Inspección</label>
                                <input type="text" id="inspeccion_transito_buscador" name="inspeccion_transito_buscador"
                                    class="form-control" placeholder="inspeccion Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="tipo_incidente_transito_buscador">Tipo Incendente</label>
                                <input type="text" id="tipo_incidente_transito_buscador"
                                    name="tipo_incidente_transito_buscador" class="form-control"
                                    placeholder="Tipo Incendente Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="vehiculo_transito_buscador">Vehiculo</label>
                                <input type="text" id="vehiculo_transito_buscador" name="vehiculo_transito_buscador"
                                    class="form-control" placeholder="Vehiculo Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="occisos_transito_buscador">Occisos</label>
                                <input type="text" id="occisos_transito_buscador" name="occisos_transito_buscador"
                                    class="form-control" placeholder="Occisos Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="incendio_transito_buscador">Incendio</label>
                                <input type="text" id="incendio_transito_buscador" name="incendio_transito_buscador"
                                    class="form-control" placeholder="Incendio Buscado">
                            </div>
                        </div>
                        <div class="col-md-12 form-group d-flex justify-content-between">
                            <form>
                                <div class="col-4">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <select name="tamano" class="form-select" id="tamano"
                                                onchange="cambiarTamano()">
                                                <option value="pequeno">Pequeño</option>
                                                <option value="mediano">Mediano</option>
                                                <option value="grande">Grande</option>
                                                <option value="extragrande" selected>Extra Grande</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <button type="submit" class="btn btn-primary">Generar PDF</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <div class="card-header">
                <h4 class="card-title">Incidentes de Transito</h4>
                <?php include ("modal/transitoModalR.php"); ?>
            </div>
            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="tabla_transito">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="columnas" hidden>ID</th>
                            <th class="columnas">Fecha</th>
                            <th class="columnas">Sección</th>
                            <th class="columnas">Estación</th>
                            <th class="columnas">Emergencia</th>
                            <th class="columnas">Inspección</th>
                            <th class="columnas">Tipo Incidente</th>
                            <th class="columnas" hidden>Tipo de Aviso</th>
                            <th class="columnas" hidden>Solicitante</th>
                            <th class="columnas" hidden>Recibidor</th>
                            <th class="columnas" hidden>Aviso</th>
                            <th class="columnas" hidden>Salida</th>
                            <th class="columnas" hidden>Llegada</th>
                            <th class="columnas" hidden>Regreso</th>
                            <th class="columnas">Vehiculo</th>
                            <th class="columnas" hidden>Lesionados</th>
                            <th class="columnas">Occisos</th>
                            <th class="columnas" hidden>Observaciones</th>
                            <th class="columnas">Incendio</th>
                            <th class="columnas" hidden>Recursos</th>
                            <th class="columnas" hidden>Cantidad</th>
                            <th class="columnas" hidden>Jefe Comisión</th>
                            <th class="columnas" hidden>Efectivos</th>
                            <th class="columnas" hidden>Unidad</th>
                            <th class="columnas" hidden>PNB</th>
                            <th class="columnas" hidden>GNB</th>
                            <th class="columnas" hidden>INTT</th>
                            <th class="columnas" hidden>INVITY</th>
                            <th class="columnas" hidden>PC</th>
                            <th class="columnas" hidden>Otros</th>
                            <th class="columnas">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultados as $resultado): ?>
                            <tr class="fila">
                                <td class="columnas" hidden><?= $resultado['id'] ?></td>
                                <td class="columnas"><?= $resultado['fecha'] ?></td>
                                <td class="columnas"><?= $resultado['seccion'] ?></td>
                                <td class="columnas"><?= $resultado['estacion'] ?></td>
                                <td class="columnas"><?= $resultado['emergencia'] ?></td>
                                <td class="columnas"><?= $resultado['inspeccion'] ?></td>
                                <td class="columnas"><?= $resultado['incidente'] ?></td>
                                <td class="columnas" hidden><?= $resultado['taviso'] ?></td>
                                <td class="columnas" hidden><?= $resultado['solicitante'] ?></td>
                                <td class="columnas" hidden><?= $resultado['recibidor'] ?></td>
                                <td class="columnas" hidden><?= $resultado['aviso'] ?></td>
                                <td class="columnas" hidden><?= $resultado['salida'] ?></td>
                                <td class="columnas" hidden><?= $resultado['llegada'] ?></td>
                                <td class="columnas" hidden><?= $resultado['regreso'] ?></td>
                                <td class="columnas"><?= $resultado['vehiculo'] ?></td>
                                <td class="columnas" hidden><?= $resultado['lesionados'] ?></td>
                                <td class="columnas"><?= $resultado['occisos'] ?></td>
                                <td class="columnas" hidden><?= $resultado['observaciones'] ?></td>
                                <td class="columnas"><?= $resultado['incendio'] ?></td>
                                <td class="columnas" hidden><?= $resultado['recurso'] ?></td>
                                <td class="columnas" hidden><?= $resultado['cantidad'] ?></td>
                                <td class="columnas" hidden><?= $resultado['jefe'] ?></td>
                                <td class="columnas" hidden><?= $resultado['efectivo'] ?></td>
                                <td class="columnas" hidden><?= $resultado['unidad'] ?></td>
                                <td class="columnas" hidden><?= $resultado['pnb'] ?></td>
                                <td class="columnas" hidden><?= $resultado['gnb'] ?></td>
                                <td class="columnas" hidden><?= $resultado['intt'] ?></td>
                                <td class="columnas" hidden><?= $resultado['invity'] ?></td>
                                <td class="columnas" hidden><?= $resultado['pc'] ?></td>
                                <td class="columnas" hidden><?= $resultado['otros'] ?></td>
                                <td>
                                    <div class="botones" style="justify-content:space-evenly;">
                                        <?php include ("modal/transitoModalM.php"); ?>
                                        <div><a name='eliminar' id='eliminar'
                                                href='../controlador/ctl_transito.php?txtID=<?= $resultado['id']; ?>'
                                                class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form action="../controlador/ctl_marca.php" method="POST" style="display: none;">
        <input type="hidden" id="idBorrar" name="id">
    </form>

    <script src="Javascript/transitoModal.js"></script>

    <?php
    require ('../footer.php');
    ?>