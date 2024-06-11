<?php
session_start();
$nombrePagina = 'Catálogo de Seccion';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM seccion");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-5 m-auto">
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
                                <label for="nombre_seccion_buscador">Seccion</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nombre_seccion_buscador" class="form-control" placeholder="Seccion Buscada">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Secciones</h4>
                    <?php include("modal/modalSeccionR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_seccion">
                        <thead>
                            <tr class="fila">
                                <th class="columnas" hidden>ID</th>
                                <th class="columnas">Numero</th>
                                <th class="columnas">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $seccion) : ?>
                                    <tr class="fila">
                                        <td class="columnas" style="display: none;"><?php echo $seccion["id"]; ?></td>
                                        <td class="columnas"><?php echo $seccion["numero"]; ?></td>

                                        <td class="columnas">
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include("modal/modalSeccionM.php"); ?>
                                                <div><a href="../controlador/ctl_seccion.php?txtID=<?= $seccion['id']; ?>" class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

<script src="Javascript/seccionModal.js"> </script>

<?php
require('../footer.php');
?>