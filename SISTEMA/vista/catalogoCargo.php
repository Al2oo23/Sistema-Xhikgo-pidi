<?php
$nombrePagina = 'Catálogo Cargo de Bomberos';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM cargo");
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
                                <label for="nombre_cargo_buscador">Cargo</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nombre_cargo_buscador" class="form-control" placeholder="Cargo Buscado">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Cargo de Bomberos</h4>
                    <?php include("modal/modalCargoR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_cargo">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columnas" hidden>ID</th>
                                <th class="columnas">Cargo</th>
                                <th class="columnas">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $cargo) : ?>
                                    <tr class="fila">
                                        <td class="columnas" hidden><?= $cargo['id'] ?></td>
                                        <td class="columnas"><?= $cargo['nombre'] ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include("modal/modalCargoM.php"); ?>
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
</div>

<form action="../controlador/ctl_(nombre).php" method="POST" style="display: none;">
    <input type="hidden" id="idBorrar" name="id">
</form>

<script src="Javascript/cargoModal.js"></script>

<?php
require('../footer.php');
?>