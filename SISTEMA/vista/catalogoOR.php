<?php 
$nombrePagina = 'Catálogo Optimizador de Rutas';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM marca");
// $sentencia->execute();
// $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Optimizador de Rutas</h4>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="columna">Tipo de Incidente</th>
                                        <th class="columna">Municipio</th>
                                        <th class="columna">Ruta</th>
                                        <th class="columna">Hora de Aviso</th>
                                        <th class="columna">Minutos de Salida</th>
                                        <th class="columna">Minutos de Llegada</th>
                                        <th class="columna">Hora de Regreso</th>
                                        <th class="columna">Tiempo Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
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