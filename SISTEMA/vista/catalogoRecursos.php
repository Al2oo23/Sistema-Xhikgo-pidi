<?php
session_start();
$nombrePagina = 'Catálogo de Recursos';
require('../header.php');
include('../modelo/conexion.php');

if (isset($_SESSION['resultado_busqueda_recurso'])) {
    $resultado = $_SESSION['resultado_busqueda_recurso'];
}
?>

<div class="col-8 m-auto">

    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscador</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action="../buscadores/buscador_recurso.php">
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_recurso_buscado">Nombre del Recurso</label>
                                        <input type="text" id="nombre_recurso_buscado" class="form-control" placeholder="Nombre del Recurso" name="nombre_recurso_buscado" value="<?= isset($_POST['nombre_recurso_buscado']) ? $_POST['nombre_recurso_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tipo_recurso_buscado">Tipo de Recurso</label>
                                        <input type="text" id="tipo_recurso_buscado" class="form-control" placeholder="Tipo del Recurso" name="tipo_recurso_buscado" value="<?= isset($_POST['tipo_recurso_buscado']) ? $_POST['tipo_recurso_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="cantidad_recurso_buscado">Cantidad del Recurso</label>
                                        <input type="text" id="cantidad_recurso_buscado" class="form-control" placeholder="Cantidad del Recurso" name="cantidad_recurso_buscado" value="<?= isset($_POST['cantidad_recurso_buscado']) ? $_POST['cantidad_recurso_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" id="limpiar_recurso" name="limpiar_recurso" class="btn btn-danger me-1 mb-1">Limpiar</button>
                                    <button type="submit" id="buscar_recurso" name="buscar_recurso" class="btn btn-primary me-1 mb-1">Buscar</button>
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
                    <h4 class="card-title">Recursos</h4>
                    <?php include("modalRecursoR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna">Nombre</th>
                                <th class="columna">Tipo</th>
                                <th class="columna">Cantidad</th>
                                <th class="columna">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $filtrado) : ?>
                                    <tr class="fila">
                                        <td class="columna" hidden><?= $filtrado['id'] ?></td>
                                        <td class="columna"><?= $filtrado['nombre']; ?></td>
                                        <td class="columna"><?= $filtrado['tipo']; ?></td>
                                        <td class="columna"><?= $filtrado['cantidad']; ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include("modalRecursoM.php"); ?>
                                                <div><a href='../controlador/ctl_recurso.php?txtID=<?= $filtrado['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

    <script src="Javascript/recursoModal.js"></script>

    <?php
    require('../footer.php');
    ?>