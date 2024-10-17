<?php
$nombrePagina = 'Catálogo Incendios';
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM incendio");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
include ("modal/modalIncendioM.php");
?>

<div class="col-12" id="catalogo">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form" action="reportes/reporte_incendio.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="fecha_incendio_buscador">Fecha</label>
                                <input type="text" id="fecha_incendio_buscador" name="fecha_incendio_buscador"
                                    class="form-control" placeholder="Fecha Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="seccion_incendio_buscador">Seccion</label>
                                <input type="text" id="seccion_incendio_buscador" name="seccion_incendio_buscador"
                                    class="form-control" placeholder="Seccion Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="municipio_incendio_buscador">Municipio</label>
                                <input type="text" id="municipio_incendio_buscador" name="municipio_incendio_buscador"
                                    class="form-control" placeholder="Municipio Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="localidad_incendio_buscador">Localidad</label>
                                <input type="text" id="localidad_incendio_buscador" name="localidad_incendio_buscador"
                                    class="form-control" placeholder="Localidad Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="propietario_incendio_buscador">Propietario Vivienda</label>
                                <input type="text" id="propietario_incendio_buscador"
                                    name="propietario_incendio_buscador" class="form-control"
                                    placeholder="Propietario Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="valor_inmueble_incendio_buscador">Valor Inmueble</label>
                                <input type="text" id="valor_inmueble_incendio_buscador"
                                    name="valor_inmueble_incendio_buscador" class="form-control"
                                    placeholder="Jefe Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="num_residenciados_incendio_buscador">Número Residenciados</label>
                                <input type="text" id="num_residenciados_incendio_buscador"
                                    name="num_residenciados_incendio_buscador" class="form-control"
                                    placeholder="Número de Residenciados Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="fuente_ignicion_incendio_buscador">Fuente Ignición</label>
                                <input type="text" id="fuente_ignicion_incendio_buscador"
                                    name="fuente_ignicion_incendio_buscador" class="form-control"
                                    placeholder="Fuente Ignición Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="causa_incendio_buscador">Causa Incendio</label>
                                <input type="text" id="causa_incendio_buscador" name="causa_incendio_buscador"
                                    class="form-control" placeholder="Causa Incendio Buscado">
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
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Incendio</h4>
                    <?php include ("modal/modalIncendioR.php"); ?>
                </div>

                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_incendio">
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
                                <th class="columnas">Municipio</th>
                                <th class="columnas">Lugar</th>
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
                            <?php foreach ($resultado as $incendio): ?>
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
                                    <td class="columnas" hidden><?= $incendio['jefe_comision']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_pnb']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_gnb']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_intt']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_invity']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_pc']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['ci_otro']; ?></td>
                                    <td class="columnas" hidden><?= $incendio['observaciones']; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm"><i class="bi bi-pencil"></i></button>
                                            <div class="flex-item"><a
                                                    href='../controlador/ctl_incendio.php?txtID=<?= $incendio['id']; ?>'
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
    </div>

    <script src="Javascript/incendioModal.js"></script>
    <script src="Javascript/plusIncendio.js"></script>

    <?php
    require ('../footer.php');
    ?>