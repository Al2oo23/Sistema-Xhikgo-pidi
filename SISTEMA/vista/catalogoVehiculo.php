<?php 
session_start();
$nombrePagina = 'Catálogo de Vehiculo';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM vehiculo");
$sentencia->execute();
$vehiculo = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Vehiculos</h4>
                        <?php include("modal/modalVehiculoR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna">NIV</th>
                                        <th class="columna">Tipo</th>
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

                                <?php foreach ($vehiculo as $carro) :?>
                                   
                                    <tr class="fila">
                                        <td class="columna"><?= $carro['niv']?></td>
                                        <td class="columna"><?=$carro['tipo']?></td>
                                        <td class="columna"><?=$carro['unidad']?></td>
                                        <td class="columna"><?=$carro['marca']?></td>
                                        <td class="columna"><?=$carro['modelo']?></td>
                                        <td class="columna"><?=$carro['serial_vehiculo']?></td>
                                        <td class="columna"><?=$carro['cilindrada']?></td>
                                        <td class="columna"><?=$carro['carburante']?></td>
                                        <td class="columna"><?=$carro['seguro']?></td>
                                        <td class="columna"><?=$carro['cedula']?></td>
                                        
                                        <td>
                                            <div class="botones">
                                            <?php include("modal/modalVehiculoM.php");?>
                                            <div><a name='eliminar' id='eliminar' href='../controlador/ctl_vehiculo.php?txtID=<?= $carro['niv']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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
require ('../footer.php');
?>