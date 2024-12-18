<?php
$nombrePagina = 'Catálogo de Modelo';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM modelo");
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
                <form class="form form-horizontal" action="reportes/reporte_modelo.php" method="POST">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="marca_modelo_vehiculo">Nombre de la Marca</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="marca_modelo_vehiculo" name="marca_modelo_vehiculo"
                                    class="form-control" placeholder="Nombre de la Marca Buscada">
                            </div>
                            <div class="col-md-4">
                                <label for="nombre_modelo_vehiculo">Nombre del Modelo</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nombre_modelo_vehiculo" name="nombre_modelo_vehiculo"
                                    class="form-control" placeholder="Nombre del Modelo Buscado">
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
                                    <?php include("modal/criterioModelo.php"); ?>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <div class="card-header">
                <h4 class="card-title">Modelo de Vehiculo</h4>
                <?php include("modal/modalModeloR.php"); ?>
            </div>
            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="tabla_modelo">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="columnas" hidden>ID</th>
                            <th class="columnas">Marca</th>
                            <th class="columnas">Modelo</th>
                            <th class="columnas">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultado as $modelo): ?>
                            <tr class="fila">
                                <td class="columnas" hidden><?php echo $modelo["id"] ?></td>
                                <td class="columnas"><?php echo $modelo["marca"] ?></td>
                                <td class="columnas"><?php echo $modelo["nombre"] ?></td>
                                <td>
                                    <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modal/modalModeloM.php"); ?>
                                        <div>
                                            <a name='eliminar' id='eliminar'
                                                href='../controlador/ctl_modelo.php?txtID=<?= $modelo['id']; ?>'
                                                class="btn icon btn-danger"><i class="bi bi-x"></i></a>
                                        </div>
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