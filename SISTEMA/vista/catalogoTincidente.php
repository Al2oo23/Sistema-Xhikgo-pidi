<?php
$nombrePagina = 'Catálogo de Tipos de Incidente';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM tipo_incidente");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-5 m-auto" id="catalogo">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscador</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action="reportes/reporte_tipo_incidente.php">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tipo_incidente_buscador">Tipo de Incidente</label>
                                        <input type="text" id="tipo_incidente_buscador" class="form-control" placeholder="Tipo de Incidente" name="tipo_incidente_buscador">
                                    </div>
                                </div>
                                <div class="col-md-12 form-group d-flex justify-content-between">
                                    <form>
                                        <div class="col-4">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <select name="tamano" class="form-select" id="tamano" onchange="cambiarTamano()">
                                                        <option value="pequeno" selected>Pequeño</option>
                                                        <option value="mediano">Mediano</option>
                                                        <option value="grande">Grande</option>
                                                        <option value="extragrande">Extra Grande</option>
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
                        <h4 class="card-title">Tipo de Incidente</h4>
                        <?php include("modal/modalTincidenteR.php"); ?>
                    </div>
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" id="tabla_tipo_incidente">
                            <thead>
                                <tr class="fila">
                                    <th class="columna">Tipo de Incidente</th>
                                    <th class="columna">Accion</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if (isset($resultado)) : ?>
                                    <?php foreach ($resultado as $tipo_incidente) : ?>
                                        <tr class="fila">
                                            <td class="columna" hidden><?= $tipo_incidente['id'] ?></td>
                                            <td class="columna"><?= $tipo_incidente['incidente']; ?></td>
                                            <td>
                                                <div class="botones" style="justify-content:space-evenly;">
                                                    <?php include("modal/modalTincidenteM.php"); ?>
                                                    <div><a href='../controlador/ctl_Tincidente.php?txtID=<?= $tipo_incidente['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="Javascript/TincidenteModal.js"></script>

<?php
require('../footer.php');
?>