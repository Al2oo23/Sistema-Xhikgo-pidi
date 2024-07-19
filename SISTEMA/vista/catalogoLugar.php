<?php
$nombrePagina = 'Catálogo de Lugar';
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM lugar");
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
                <form class="form form-horizontal" action="reportes/reporte_lugar.php" method="POST">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nombre_lugar_buscador">Nombre del Lugar</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nombre_lugar_buscador" name="nombre_lugar_buscador"
                                    class="form-control" placeholder="Nombre del Lugar Buscado">
                            </div>
                            <div class="col-md-4">
                                <label for="municipio_lugar_buscador">Municipio</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="municipio_lugar_buscador" name="municipio_lugar_buscador"
                                    class="form-control" placeholder="Municipio Buscado">
                            </div>
                            <div class="col-md-4">
                                <label for="distancia_lugar_buscador">Distancia</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="distancia_lugar_buscador" name="distancia_lugar_buscador"
                                    class="form-control" placeholder="Distancia Buscada">
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
                    <h4 class="card-title">Lugar</h4>
                    <?php include ("modal/modalLugarR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_lugar">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna">Nombre</th>
                                <th class="columna">Municipio</th>
                                <th class="columna">Distancia</th>
                                <th class="columna">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado)): ?>
                                <?php foreach ($resultado as $lugar): ?>
                                    <tr class="fila">
                                        <td class="columna" hidden><?= $lugar["id"] ?></td>
                                        <td class="columna"><?= $lugar["nombre"] ?></td>
                                        <td class="columna"><?= $lugar["municipio"] ?></td>
                                        <td class="columna"><?= $lugar["distancia"] ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include ("modal/modalLugarM.php"); ?>
                                                <div><a name='eliminar' id='eliminar'
                                                        href='../controlador/ctl_lugar.php?txtID=<?= $lugar['id']; ?>'
                                                        class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

<script src="Javascript/lugarModal.js"></script>

<?php
require ('../footer.php');
?>