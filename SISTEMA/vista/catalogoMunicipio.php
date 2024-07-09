<?php
$nombrePagina = 'Catálogo de Municipio';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM municipio");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="reportes/reporte_municipio.php" method="POST">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nombre_municipio_buscador">Nombre del Municipio</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nombre_municipio_buscador" name="nombre_municipio_buscador" class="form-control" placeholder="Nombre del Municipio Buscado">
                            </div>
                            <div class="col-md-4">
                                <label for="codigo_municipio_buscador">Codigo del Municipio</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="codigo_municipio_buscador" name="codigo_municipio_buscador" class="form-control" placeholder="Tipo de Recurso Buscado">
                            </div>
                            <div class="col-md-12 form-group d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Generar PDF</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Municipio</h4>
                    <?php include("modal/modalMunicipioR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_municipio">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna" hidden>ID</th>
                                <th class="columna">Municipio</th>
                                <th class="columna">Codigo Postal</th>
                                <th class="columna">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $municipio) : ?>

                                    <tr class="fila">
                                        <td class="columna" hidden><?= $municipio["id"]; ?></td>
                                        <td class="columna"><?= $municipio["nombre"]; ?></td>
                                        <td class="columna"><?= $municipio["codigo"]; ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include("modal/modalMunicipioM.php"); ?>
                                                <div><a name='eliminar' id='eliminar' href='../controlador/ctl_municipio.php?txtID=<?= $municipio['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

<form action="../controlador/ctl_municipio.php" method="POST" style="display: none;">
    <input type="hidden" id="idBorrar" name="id">
</form>

<script src="Javascript/municipioModal.js"></script>

<?php
require('../footer.php');
?>