<?php
$nombrePagina = "Catálogo de Incendio de Vegetacion";
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM `vegetacion`");
$sentencia->execute();
$vegetacion = $sentencia->fetchAll(PDO::FETCH_ASSOC);
include ("modal/modalVegetacionM.php");
?>

<div class="col-12" id="catalogo">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form" action="reportes/reporte_vegetacion.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="fecha_vegetacion_buscador">Fecha</label>
                                <input type="text" id="fecha_vegetacion_buscador" name="fecha_vegetacion_buscador"
                                    class="form-control" placeholder="Fecha Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="seccion_vegetacion_buscador">Seccion</label>
                                <input type="text" id="seccion_vegetacion_buscador" name="seccion_vegetacion_buscador"
                                    class="form-control" placeholder="Seccion Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="ubicacion_vegetacion_buscador">Ubicacion</label>
                                <input type="text" id="ubicacion_vegetacion_buscador" name="ubicacion_vegetacion_buscador"
                                    class="form-control" placeholder="Ubicacion Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="lugar_vegetacion_buscador">Lugar</label>
                                <input type="text" id="lugar_vegetacion_buscador" name="lugar_vegetacion_buscador"
                                    class="form-control" placeholder="Lugar Buscado">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="incendio_vegetacion_buscador">Tipo de incendio</label>
                                <input type="text" id="incendio_vegetacion_buscador" name="incendio_vegetacion_buscador"
                                    class="form-control" placeholder="Incendio Buscado">
                            </div>
                        </div> 

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="jefe_vegetacion_buscador">Jefe</label>
                                <input type="text" id="jefe_vegetacion_buscador" name="jefe_vegetacion_buscador"
                                    class="form-control" placeholder="Jefe Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="recurso_vegetacion_buscador">Recurso</label>
                                <input type="text" id="recurso_vegetacion_buscador" name="recurso_vegetacion_buscador"
                                    class="form-control" placeholder="Recurso Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="cantidad_vegetacion_buscador">Cantidad del Recurso</label>
                                <input type="text" id="cantidad_vegetacion_buscador" name="cantidad_vegetacion_buscador"
                                    class="form-control" placeholder="Cantidad Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="efectivo_vegetacion_buscador">Efectivo</label>
                                <input type="text" id="efectivo_vegetacion_buscador" name="efectivo_vegetacion_buscador"
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
                    <h4 class="card-title">Incidente de Incendio de Vegetacion</h4>
                    <?php include ("modal/modalVegetacionR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_vegetacion">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna" hidden>Id</th>
                                <th class="columna">Fecha</th>
                                <th class="columna">Seccion</th>
                                <th class="columna">Tipo de Incendio</th>
                                <th class="columna">Areas Adyacentes</th>
                                <th class="columna">Lugar</th>
                                <th class="columna">Jefe</th>
                                <th class="columna">Accion</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($vegetacion as $vegetacio): ?>

                                <tr class="fila">
                                    <td class="columna" hidden><?= $vegetacio["id"]; ?></td>
                                    <td class="columna"><?= $vegetacio["fecha"]; ?></td>
                                    <td class="columna"><?= $vegetacio["seccion"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["estacion"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["aviso"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["hora"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["salida"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["llegada"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["regreso"]; ?></td>
                                    <td class="columna"><?= $vegetacio["incendio"]; ?></td>
                                    <td class="columna"><?= $vegetacio["areas"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["direccion"]; ?></td>
                                    <td class="columna"><?= $vegetacio["lugar"]; ?></td>
                                    <td class="columna"><?= $vegetacio["jefe"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["ci_gnb"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["ci_intt"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["ci_invity"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["ci_pc"]; ?></td>
                                    <td class="columna" hidden><?= $vegetacio["ci_otro"]; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm1"><i class="bi bi-pencil"></i></button>
                                            
                                        <div><a name='eliminar' id='eliminar'
                                                    href='../controlador/ctl_vegetacion.php?txtID=<?= $vegetacio['id']; ?>'
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
</div>

<script src="Javascript/vegetacionModal.js"></script>
<script src="Javascript/plusvegetacion.js"></script>

<?php
require ('../footer.php');
?>