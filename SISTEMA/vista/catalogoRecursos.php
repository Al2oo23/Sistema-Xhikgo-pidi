<?php
$nombrePagina = 'Catálogo de Recurso';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM recurso");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-9 m-auto" id="catalogo">

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="reportes/reporte_recurso.php" method="POST">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nombre_recurso_buscador">Nombre del Recurso</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nombre_recurso_buscador" name="nombre_recurso_buscador"
                                    class="form-control" placeholder="Nombre del Recurso Buscado">
                            </div>
                            <div class="col-md-4">
                                <label for="tipo_recurso_buscador">Tipo de Recurso</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="tipo_recurso_buscador" name="tipo_recurso_buscador"
                                    class="form-control" placeholder="Tipo de Recurso Buscado">
                            </div>
                            <div class="col-md-4">
                                <label for="cantidad_recurso_buscador">Cantidad de Recurso</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="cantidad_recurso_buscador" name="cantidad_recurso_buscador"
                                    class="form-control" placeholder="Cantidad de Recurso Buscado">
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
                                                    <option value="grande" selected>Grande</option>
                                                    <option value="extragrande">Extra Grande</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div>
                                    <button type="submit" class="btn btn-primary">Generar PDF</button>
                                    <?php include("modal/criterioRecurso.php"); ?>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Recurso</h4>
                    <div>
                        <?php include("modal/modalRecursoR.php"); ?>
                        <?php include("modal/modalRecursoAgreg.php"); ?>
                        <?php include("modal/modalRecursoInop.php"); ?>
                    </div>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_recurso">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columnas">Nombre</th>
                                <th class="columnas">Reutilizabilidad</th>
                                <th class="columnas">Cantidad</th>
                                <th class="columnas">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultado as $recurso): ?>
                                <tr class="fila">
                                    <td class="columnas" hidden><?= $recurso['id'] ?></td>
                                    <td class="columnas"><?= $recurso['nombre']; ?></td>
                                    <td class="columnas"><?= $recurso['tipo']; ?></td>
                                    <td class="columnas"><?= $recurso['cantidad']; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalRecursoM.php"); ?>
                                            <div><a href='../controlador/ctl_recurso.php?txtID=<?= $recurso['id']; ?>'
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

<script src="Javascript/recursoModal.js"></script>

<?php
require('../footer.php');
?>