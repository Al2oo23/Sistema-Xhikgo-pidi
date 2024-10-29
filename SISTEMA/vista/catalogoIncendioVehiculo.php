<?php
$nombrePagina = "Catálogo de Incendio de Vehiculo";
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM `incendio_vehiculo`");
$sentencia->execute();
$incendio_vehiculo = $sentencia->fetchAll(PDO::FETCH_ASSOC);
include ("modal/modalIncendioVehiculoM.php");
?>

<div class="col-12 m-auto" id="catalogo">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="reportes/reporte_incendioVehiculo.php" method="POST">
                    <div class="form-body">
                        <div class="row">
                            <form>
                                <div class="col-md-12 form-group d-flex justify-content-between">
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
                                    <div>
                                        <button type="submit" class="btn btn-primary">Generar PDF</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Incidente de Incendio de Vehiculo</h4>
                    <?php include ("modal/modalIncendioVehiculoR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_IncendioVehiculo">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna" hidden>Id</th>
                                <th class="columna">Fecha</th>
                                <th class="columna">Seccion</th>
                                <th class="columna">Lugar</th>
                                <th class="columna">Serial del Vehiculo</th>
                                <th class="columna">C.I Propietario</th>
                                <th class="columna">Fuente de Ignicion</th>
                                <th class="columna">Causa del Incendio</th>
                                <th class="columna">Numero de Lesionados</th>
                                <th class="columna">Jefe</th>
                                <th class="columna">Accion</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($incendio_vehiculo as $incendio_vehicu): ?>

                                <tr class="fila">
                                    <td class="columna" hidden><?= $incendio_vehicu["id"]; ?></td>
                                    <td class="columna"><?= $incendio_vehicu["fecha"]; ?></td>
                                    <td class="columna"><?= $incendio_vehicu["seccion"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["estacion"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["aviso"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["hora"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["salida"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["llegada"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["regreso"]; ?></td>
                                    <td class="columna" ><?= $incendio_vehicu["lugar"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["direccion"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["modelo"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["marca"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["año"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["placa"]; ?></td>
                                    <td class="columna"><?= $incendio_vehicu["serial"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["color"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["puestos"]; ?></td>
                                    <td class="columna"><?= $incendio_vehicu["propietario"]; ?></td>
                                    <td class="columna"><?= $incendio_vehicu["ci_propietario"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["valor"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["conductor"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["ci_conductor"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["aseguradora"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["vigencia"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["inicio"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["ignicion"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["culmino"]; ?></td>
                                    <td class="columna"><?= $incendio_vehicu["causa"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["h_reigicion"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["clase"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["declaracion"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["h_lesionados"]; ?></td>
                                    <td class="columna"><?= $incendio_vehicu["lesionados"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["acta"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["observaciones"]; ?></td>
                                    <td class="columna"><?= $incendio_vehicu["jefe"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["gral_servicios"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["jefe_deseccion"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["comandante"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["ci_gnb"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["ci_intt"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["ci_invity"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["ci_pc"]; ?></td>
                                    <td class="columna" hidden><?= $incendio_vehicu["ci_otro"]; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm1"><i class="bi bi-pencil"></i></button>
                                            
                                        <div><a name='eliminar' id='eliminar'
                                                    href='../controlador/ctl_incendioVehiculo.php?txtID=<?= $incendio_vehicu['id']; ?>'
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

<script src="Javascript/incendioVehiculoModal.js"></script>
<script src="Javascript/plusIncendiovehiculo.js"></script>

<?php
require ('../footer.php');
?>