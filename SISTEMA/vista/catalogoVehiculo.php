<?php 
$nombrePagina = 'Tabla Vehiculos';
require('../header.php');
// include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM vehiculo");
// $sentencia->execute();
// $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Vehiculos</h4>
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
                                    <tr>
                                        <td class="columna">asdassdasdassd</td>
                                        <td class="columna">assdasdassd</td>
                                        <td class="columna">assdasdassd</td>
                                        <td class="columna">assdasdassd</td>
                                        <td class="columna">assdasdassd</td>
                                        <td class="columna">assdasdassd</td>
                                        <td class="columna">assdasdassd</td>
                                        <td class="columna">assdasdassd</td>
                                        <td class="columna">assdasdassd</td>
                                        <td class="columna">assdasdassd</td>
                                        <td>
                                            <div class="botones">
                                                <div><a href="#" class="btn icon btn-info"><i class="bi bi-search"></i></a></div>
                                                <div class="flex-item"><a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a></div>
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

<?php 
require ('../footer.php');
?>