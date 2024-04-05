<?php 
$nombrePagina = 'Catálogo de Recursos';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM recurso");
// $sentencia->execute();
// $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Recursos</h4>
                        <a href="registrar_recurso.php" class="btn icon icon-left btn-success">Nuevo</a>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="columna">Tipo</th>
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Cantidad</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="columna">Herramienta</td>
                                        <td class="columna">Alicate</td>
                                        <td class="columna">?</td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
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