<?php 
session_start();
$nombrePagina = 'Catálogo de Municipio';
require('../header.php');
include('../modelo/conexion.php');

if (isset($_SESSION['resultado_busqueda_municipio'])) {
    $resultado = $_SESSION['resultado_busqueda_municipio'];
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
                        <form class="form" method="post" action="../buscadores/buscador_municipio.php">
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_municipio_buscado">Nombre del Municipio</label>
                                        <input type="text" id="nombre_municipio_buscado" class="form-control" placeholder="Nombre del Municipio" name="nombre_municipio_buscado" value="<?= isset($_POST['nombre_municipio_buscado']) ? $_POST['nombre_municipio_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_municipio_buscado">Codigo del Municipio</label>
                                        <input type="text" id="codigo_municipio_buscado" class="form-control" placeholder="Codigo del Municipio" name="codigo_municipio_buscado" value="<?= isset($_POST['codigo_municipio_buscado']) ? $_POST['codigo_municipio_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" id="limpiar_municipio" name="limpiar_municipio" class="btn btn-danger me-1 mb-1">Limpiar</button>
                                    <button type="submit" id="buscar_municipio" name="buscar_municipio" class="btn btn-primary me-1 mb-1">Buscar</button>
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
                        <h4 class="card-title">Municipios</h4>
                        <?php include("modal/modalMunicipioR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna" hidden></th>
                                        <th class="columna">Municipio</th>
                                        <th class="columna">Codigo Postal</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($resultado)) : ?>
                                    <?php foreach ($resultado as $municipio) :?>

                                    <tr class="fila">
                                        <td class="columna" hidden><?= $municipio["id"];?></td>
                                        <td class="columna"><?= $municipio["nombre"];?></td>
                                        <td class="columna"><?= $municipio["codigo"];?></td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalMunicipioM.php");?>
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

            <form action="../controlador/ctl_municipio.php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

    <script src="Javascript/municipioModal.js"></script>

<?php 
require ('../footer.php');
?>