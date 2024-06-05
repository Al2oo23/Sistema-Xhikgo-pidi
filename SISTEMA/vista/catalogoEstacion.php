<?php 
session_start();
$nombrePagina = 'Catálogo de Estacion';
require('../header.php');
include('../modelo/conexion.php');

if (isset($_SESSION['resultado_busqueda_estacion'])) {
    $resultado = $_SESSION['resultado_busqueda_estacion'];
}
?>

<div class="col-5 m-auto">

    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscador</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action="../buscadores/buscador_estacion.php">
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_estacion_buscado">Nombre de la Estacion</label>
                                        <input type="text" id="nombre_estacion_buscado" class="form-control" placeholder="Nombre de la Estacion" name="nombre_estacion_buscado" value="<?= isset($_POST['nombre_estacion_buscado']) ? $_POST['nombre_estacion_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" id="limpiar_estacion" name="limpiar_estacion" class="btn btn-danger me-1 mb-1">Limpiar</button>
                                    <button type="submit" id="buscar_estacion" name="buscar_estacion" class="btn btn-primary me-1 mb-1">Buscar</button>
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
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $filtrado) : ?>
                                    <tr class="fila">
                                        <td class="columna" hidden><?= $filtrado['id'] ?></td>
                                        <td class="columna"><?= $filtrado['nombre']; ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include("modal/modalEstacionM.php"); ?>
                                                <div><a href='../controlador/ctl_estacion.php?txtID=<?= $filtrado['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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
require ('../footer.php');
?>