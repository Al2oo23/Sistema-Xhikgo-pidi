<?php 
$nombrePagina = 'Recursos';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM recurso");
// $sentencia->execute();
// $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-10 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Recursos</h4>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="columna">ID</th>
                                        <th class="columna">Tipo</th>
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Existencia</th>
                                        <th class="columna">Estado</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="columna">12</td>
                                        <td class="columna">Herramienta</td>
                                        <td class="columna">Alicate</td>
                                        <td class="columna">asdasda</td>
                                        <td class="columna">Activo</td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
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