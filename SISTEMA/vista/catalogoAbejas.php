<?php
$nombrePagina = "Catálogo de Abejas";
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM `abejas`");
$sentencia->execute();
$abejas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
include ("modal/modalAbejasM.php");
?>

<div class="col-12" id="catalogo">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form" action="reportes/reporte_abejas.php" method="POST">
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
                    <h4 class="card-title">Incidente de Abeja</h4>
                    <?php include ("modal/modalAbejasR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_abejas">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna" hidden>Id</th>
                                <th class="columna">Fecha</th>
                                <th class="columna">Seccion</th>
                                <th class="columna">Ubicacion</th>
                                <th class="columna">Lugar</th>
                                <th class="columna">Dueño Inmueble</th>
                                <th class="columna">Jefe</th>
                                <th class="columna">Accion</th>
                                <th class="columna">Reporte</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($abejas as $abej): ?>

                                <tr class="fila">
                                    <td class="columna" hidden><?= $abej["id"]; ?></td>
                                    <td class="columna"><?= $abej["fecha"]; ?></td>
                                    <td class="columna"><?= $abej["seccion"]; ?></td>
                                    <td class="columna" hidden><?= $abej["estacion"]; ?></td>
                                    <td class="columna" hidden><?= $abej["aviso"]; ?></td>
                                    <td class="columna" hidden><?= $abej["hora"]; ?></td>
                                    <td class="columna" hidden><?= $abej["salida"]; ?></td>
                                    <td class="columna" hidden><?= $abej["llegada"]; ?></td>
                                    <td class="columna" hidden><?= $abej["regreso"]; ?></td>
                                    <td class="columna"><?= $abej["panal"]; ?></td>
                                    <td class="columna" hidden><?= $abej["direccion"]; ?></td>
                                    <td class="columna"><?= $abej["lugar"]; ?></td>
                                    <td class="columna"><?= $abej["inmueble"]; ?></td>
                                    <td class="columna"><?= $abej["jefe"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_pnb"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_gnb"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_intt"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_invity"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_pc"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_otro"]; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm1"><i class="bi bi-pencil"></i></button>
                                            
                                        <div><a name='eliminar' id='eliminar'
                                                    href='../controlador/ctl_abejas.php?txtID=<?= $abej['id']; ?>'
                                                    class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                    </td>
                                    <td>
                                    <a href="../controlador/ctl_abejas.php?txtIDreporte=<?= $abej['id'];?>" class="btn icon btn-danger"><i class="bi bi-file-earmark-pdf-fill"></i></a>
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

<script src="Javascript/abejasModal.js"></script>
<script src="Javascript/plusAbejas.js"></script>

<?php
require ('../footer.php');
?>