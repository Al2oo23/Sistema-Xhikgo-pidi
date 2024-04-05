<?php 
$nombrePagina = 'Catálogo Incidentes';
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
                        <h4 class="card-title">Incidentes</h4>
                        <a href="#" class="btn icon icon-left btn-success">Nuevo</a>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="columna">Tipo</th>
                                        <th class="columna">Fecha</th>
                                        <th class="columna">Seccion</th>
                                        <th class="columna">N° Unidad</th>
                                        <th class="columna">CI Solicitante</th>
                                        <th class="columna">Hora de Aviso</th>
                                        <th class="columna">Hora de Salida</th>
                                        <th class="columna">Hora de Llegada</th>
                                        <th class="columna">Hora de Regreso</th>
                                        <th class="columna">Municipio</th>
                                        <th class="columna">Direccion</th>
                                        <th class="columna">Ruta</th>
                                        <th class="columna">Accion</th>
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
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <div class="flex-item"><a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a></div>
                                            <div class="flex-item"><a href="#" class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                            <div><a href="#" class="btn icon btn-dark"><i class="bi bi-clipboard-heart-fill"></i></a></div>
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