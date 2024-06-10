<?php
$nombrePagina = 'Catálogo de Estacion';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM estacion");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-7 m-auto">
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Buscador</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="nombre_estacion_buscador">Estacion</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="nombre_estacion_buscador" class="form-control" placeholder="Estacion Buscada">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <div class="card-header">
                <h4 class="card-title">Estaciones</h4>
                <?php include("modal/modalEstacionR.php"); ?>
            </div>
            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="tabla_estacion">
                    <thead>
                        <tr class="fila">
                            <th class="columnas" hidden>ID</th>
                            <th class="columnas">Nombre</th>
                            <th class="columnas">Accion</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (isset($resultado)) : ?>
                            <?php foreach ($resultado as $estacion) : ?>
                                <tr class="fila">
                                    <td class="columnas" hidden><?= $estacion['id'] ?></td>
                                    <td class="columnas"><?= $estacion['nombre']; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalEstacionM.php"); ?>
                                            <div><a href='../controlador/ctl_estacion.php?txtID=<?= $estacion['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

<script src="Javascript/estacionModal.js"></script>

<?php
require('../footer.php');
?>