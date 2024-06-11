<?php
$nombrePagina = 'Catálogo de Marca';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM marca");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-6 m-auto">
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
                                <label for="nombre_marca_buscador">Nombre de la Marca</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nombre_marca_buscador" class="form-control" placeholder="Nombre de la Marca Buscada">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Marcas</h4>
                    <?php include("modal/modalMarcaR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_marca">
                        <thead>
                            <tr class="fila">
                                <th class="columnas" hidden>ID</th>
                                <th class="columnas">Nombre</th>
                                <th class="columnas">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $filtrado) : ?>
                                    <tr class="fila">
                                        <td class="columnas" hidden><?= $filtrado['id'] ?></td>
                                        <td class="columnas"><?= $filtrado['nombre']; ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include("modal/modalMarcaM.php"); ?>
                                                <div><a href='../controlador/ctl_marca.php?txtID=<?= $filtrado['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

<script src="Javascript/marcaModal.js"></script>

<?php
require('../footer.php');
?>