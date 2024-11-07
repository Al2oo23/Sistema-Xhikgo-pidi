<?php
$nombrePagina = "Catálogo de Servicios Especiales";
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM `servicios`");
$sentencia->execute();
$servicios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
include ("modal/modalSEM.php");
?>

<div class="col-12" id="catalogo">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form" action="reportes/reporte_SE.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="fecha_abejas_buscador">Fecha</label>
                                <input type="text" id="fecha_abejas_buscador" name="fecha_abejas_buscador"
                                    class="form-control" placeholder="Fecha Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="seccion_abejas_buscador">Seccion</label>
                                <input type="text" id="seccion_abejas_buscador" name="seccion_abejas_buscador"
                                    class="form-control" placeholder="Seccion Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="ubicacion_abejas_buscador">Ubicacion</label>
                                <input type="text" id="ubicacion_abejas_buscador" name="ubicacion_abejas_buscador"
                                    class="form-control" placeholder="Ubicacion Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="lugar_abejas_buscador">Lugar</label>
                                <input type="text" id="lugar_abejas_buscador" name="lugar_abejas_buscador"
                                    class="form-control" placeholder="Lugar Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="dueno_abejas_buscador">Dueño Inmueble</label>
                                <input type="text" id="dueno_abejas_buscador" name="dueno_abejas_buscador"
                                    class="form-control" placeholder="Dueño Inmueble Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="jefe_abejas_buscador">Jefe</label>
                                <input type="text" id="jefe_abejas_buscador" name="jefe_abejas_buscador"
                                    class="form-control" placeholder="Jefe Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="recurso_abejas_buscador">Recurso</label>
                                <input type="text" id="recurso_abejas_buscador" name="recurso_abejas_buscador"
                                    class="form-control" placeholder="Recurso Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="cantidad_abejas_buscador">Cantidad del Recurso</label>
                                <input type="text" id="cantidad_abejas_buscador" name="cantidad_abejas_buscador"
                                    class="form-control" placeholder="Cantidad Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="efectivo_abejas_buscador">Efectivo</label>
                                <input type="text" id="efectivo_abejas_buscador" name="efectivo_abejas_buscador"
                                    class="form-control" placeholder="Efectivo Buscado">
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
                    <h4 class="card-title">Incidente de Servicios Especiales</h4>
                    <?php include ("modal/modalSER.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_se">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna" hidden>Id</th>
                                <th class="columna">Fecha</th>
                                <th class="columna">Seccion</th>
                                <th class="columna">Solicitante</th>
                                <th class="columna">Causa</th>
                                <th class="columna">Dirección</th>
                                <th class="columna">Acta</th>
                                <th class="columna">Accion</th>
                                <th class="columna">Reporte</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($servicios as $se): ?>

                                <tr class="fila">
                                    <td class="columna" hidden><?= $se["id"]; ?></td>
                                    <td class="columna"><?= $se["fecha"]; ?></td>
                                    <td class="columna"><?= $se["seccion"]; ?></td>
                                    <td class="columna" hidden><?= $se["estacion"]; ?></td>
                                    <td class="columna" hidden><?= $se["aviso"]; ?></td>
                                    <td class="columna"><?= $se["solicitante"]; ?></td>
                                    <td class="columna" hidden><?= $se["hora"]; ?></td>
                                    <td class="columna" hidden><?= $se["salida"]; ?></td>
                                    <td class="columna" hidden><?= $se["llegada"]; ?></td>
                                    <td class="columna" hidden><?= $se["regreso"]; ?></td>
                                    <td class="columna"><?= $se["causa"]; ?></td>
                                    <td class="columna"><?= $se["direccion"]; ?></td>
                                    <td class="columna" hidden><?= $se["ci_pnb"]; ?></td>
                                    <td class="columna" hidden><?= $se["ci_gnb"]; ?></td>
                                    <td class="columna" hidden><?= $se["ci_intt"]; ?></td>
                                    <td class="columna" hidden><?= $se["ci_invity"]; ?></td>
                                    <td class="columna" hidden><?= $se["ci_pc"]; ?></td>
                                    <td class="columna" hidden><?= $se["ci_otro"]; ?></td>
                                    <td class="columna" hidden><?=$se['jefe_comision'];?></td>
                                    <td class="columna" hidden><?=$se['jefe_general'];?></td>
                                    <td class="columna" hidden><?=$se['jefe_seccion'];?></td>
                                    <td class="columna" hidden><?=$se['comandante'];?></td>
                                    <td class="columna"><?= $se["acta"]; ?></td>
                                    <td class="columna" hidden><?= $se["observaciones"]; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm1"><i class="bi bi-pencil"></i></button>
                                            
                                        <div><a name='eliminar' id='eliminar'
                                                    href='../controlador/ctl_servicio.php?txtID=<?= $se['id']; ?>'
                                                    class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                    </td>
                                    <td>
                                    <a href="../vista/reportes/reporte_SEesp.php?txtIDreporte=<?= $se['id'];?>" class="btn icon btn-danger"><i class="bi bi-file-earmark-pdf-fill"></i></a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="Javascript/servicioModal.js"></script>
<script src="Javascript/plusSE.js"></script>

<?php
require ('../footer.php');
?>