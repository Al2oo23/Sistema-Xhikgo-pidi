<?php 
$nombrePagina = 'Seccion';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM marca");
// $sentencia->execute();
// $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-4 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Secciones</h4>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="columna">ID</th>
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="columna">1</td>
                                        <td class="columna">578</td>
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