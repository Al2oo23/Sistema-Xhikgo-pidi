<?php
session_start();
$nombrePagina = 'Catálogo de Vehiculo';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM vehiculo");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="niv_vehiculo_buscador">Numero de Identidad Vehicular</label>
                                <input type="text" id="niv_vehiculo_buscador" class="form-control" placeholder="NIV Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="numero_vehiculo_buscador">Numero de Unidad</label>
                                <input type="text" id="numero_vehiculo_buscador" class="form-control" placeholder="Numero de Unidad Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="marca_vehiculo_buscador">Marca</label>
                                <input type="text" id="marca_vehiculo_buscador" class="form-control" placeholder="Marca Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="modelo_vehiculo_buscador">Modelo</label>
                                <input type="text" id="modelo_vehiculo_buscador" class="form-control" placeholder="Modelo Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="serial_vehiculo_buscador">Serial</label>
                                <input type="text" id="serial_vehiculo_buscador" class="form-control" placeholder="Serial Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="cilindrada_vehiculo_buscador">Cilindrada</label>
                                <input type="text" id="cilindrada_vehiculo_buscador" class="form-control" placeholder="Cilindrada Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="carburante_vehiculo_buscador">Carburante</label>
                                <input type="text" id="carburante_vehiculo_buscador" class="form-control" placeholder="Carburante Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="seguro_vehiculo_buscador">Seguro</label>
                                <input type="text" id="seguro_vehiculo_buscador" class="form-control" placeholder="Seguro Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="propietario_vehiculo_buscador">C.I del Propietario</label>
                                <input type="text" id="propietario_vehiculo_buscador" class="form-control" placeholder="C.I del Propietario Buscado">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <div class="card-header">
                <h4 class="card-title">Vehiculo</h4>
                <?php include("modal/modalVehiculoR.php"); ?>
            </div>
            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="tabla_vehiculo">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="columna">NIV</th>
                            <th class="columna" hidden>Tipo</th>
                            <th class="columna">N° Unidad</th>
                            <th class="columna">Marca</th>
                            <th class="columna">Modelo</th>
                            <th class="columna">Serial</th>
                            <th class="columna">Cilindrada</th>
                            <th class="columna">Carburante</th>
                            <th class="columna">Seguro</th>
                            <th class="columna">CI Propietario</th>
                            <th class="columna">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultado as $vehiculo) : ?>
                            <tr class="fila">
                                <td class="columna"><?= $vehiculo['niv'] ?></td>
                                <td class="columna" hidden><?= $vehiculo['tipo'] ?></td>
                                <td class="columna"><?= $vehiculo['unidad'] ?></td>
                                <td class="columna"><?= $vehiculo['marca'] ?></td>
                                <td class="columna"><?= $vehiculo['modelo'] ?></td>
                                <td class="columna"><?= $vehiculo['serial_vehiculo'] ?></td>
                                <td class="columna"><?= $vehiculo['cilindrada'] ?></td>
                                <td class="columna"><?= $vehiculo['carburante'] ?></td>
                                <td class="columna"><?= $vehiculo['seguro'] ?></td>
                                <td class="columna"><?= $vehiculo['cedula'] ?></td>
                                <td>
                                    <div class="botones">
                                        <?php include("modal/modalVehiculoM.php"); ?>
                                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_vehiculo.php?txtID=<?= $vehiculo['niv']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

<form action="../controlador/ctl_vehiculo.php" method="POST" style="display: none;">
    <input type="hidden" id="idBorrar" name="id">
</form>

<script src="Javascript/vehiculoModal.js"></script>

<?php
require('../footer.php');
?>