<?php 
$nombrePagina = 'Catálogo de Vehiculo';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM vehiculo");
// $sentencia->execute();
// $vehiculo = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Vehiculos</h4>
                        <a href="vehiculo.php" class="btn icon icon-left btn-success">Nuevo</a>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
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
                                   
                                    <tr class="filas">
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">23</td>
                                        <td class="columna">Chevrolet</td>
                                        <td class="columna">Aveo</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">12590678</td>
                                        
                                        <td>
                                            <div class="botones">
                                            <?php include("modalVehiculo.php");?>
                                                <div><a href="#" class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                            </div>
                                        </td>

                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    <script src="Javascript/vehiculoModal.js"></script>

<?php 
require ('../footer.php');
?>