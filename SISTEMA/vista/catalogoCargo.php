<?php 
session_start();
$nombrePagina = 'Catálogo Cargo de Bomberos';
require('../header.php');
include('../modelo/conexion.php');

if (isset($_SESSION['resultado_busqueda_cargo'])) {
    $resultado = $_SESSION['resultado_busqueda_cargo'];
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
                        <form class="form" method="post" action="../buscadores/buscador_cargo.php">
                            <div class="row">

                                <div class="col-md-7 col-12">
                                    <div class="form-group">
                                        <label for="nombre_cargo_buscado">Nombre del Cargo de Bomberos</label>
                                        <input type="text" id="nombre_cargo_buscado" class="form-control" placeholder="Nombre del cargo" name="nombre_cargo_buscado" value="<?= isset($_POST['nombre_cargo_buscado']) ? $_POST['nombre_cargo_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" id="limpiar_cargo" name="limpiar_cargo" class="btn btn-danger me-1 mb-1">Limpiar</button>
                                    <button type="submit" id="buscar_cargo" name="buscar_cargo" class="btn btn-primary me-1 mb-1">Buscar</button>
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
                        <h4 class="card-title">Cargo de Bomberos</h4>
                        <?php include("modal/modalCargoR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna" hidden>?</th>
                                        <th class="columna">Cargo</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $cargo) :?>
                                    <tr class="fila">
                                        <td class="columna" hidden><?= $cargo['id'] ?></td>
                                        <td class="columna"><?= $cargo['nombre'] ?></td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modal/modalCargoM.php");?>
                                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_cargo.php?txtID=<?= $cargo['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

            <form action="../controlador/ctl_(nombre).php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

    <script src="Javascript/cargoModal.js"></script>

<?php 
require ('../footer.php');
?>