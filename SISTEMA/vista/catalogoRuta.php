<?php 
$nombrePagina = 'Tabla De Ruta';
require('../header.php');
// include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM vehiculo");
// $sentencia->execute();
// $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
         <div class="col-10 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Ruta</h4>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="columna">Estado</th>
                                        <th class="columna">Municipio</th>
                                        <th class="columna">Ruta</th>
                                        <th class="columna">Accion</th>

                                    </tr>
                                </thead>
                                <tbody>
            
                                <tr>

                                        <td class="columna">12566488</td>
                                        <td class="columna">Jose Manuel Perez</td>
                                        <td class="columna">jose34@gmailcom</td>
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