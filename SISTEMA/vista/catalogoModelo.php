<?php
$nombrePagina = 'Catálogo de Modelo';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM modelo");
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
                <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nombre_modelo_vehiculo">Nombre del Modelo</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nombre_modelo_vehiculo" class="form-control" placeholder="Nombre del Modelo Buscado">
                            </div>
                            <div class="col-md-4">
                                <label for="marca_modelo_vehiculo">Tipo de Modelo</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="marca_modelo_vehiculo" class="form-control" placeholder="Tipo de Modelo Buscado">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <div class="card-header">
                <h4 class="card-title">Modelo de Vehiculos</h4>
                <?php include("modal/modalModeloR.php"); ?>
            </div>
            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="tabla_modelo">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="columnas" hidden>ID</th>
                            <th class="columnas">Modelo</th>
                            <th class="columnas">Marca</th>
                            <th class="columnas">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultado as $modelo) : ?>
                            <tr class="fila">
                                <td class="columnas" hidden><?php echo $modelo["id"] ?></td>
                                <td class="columnas"><?php echo $modelo["nombre"] ?></td>
                                <td class="columnas"><?php echo $modelo["marca"] ?></td>
                                <td>
                                    <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modal/modalModeloM.php"); ?>
                                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_modelo.php?txtID=<?= $modelo['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

<script src="Javascript/modeloModal.js"></script>

<?php
require('../footer.php');
?>