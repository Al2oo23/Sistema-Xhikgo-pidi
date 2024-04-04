<?php 
$nombrePagina = 'Tabla De Mantenimiento de Unidades';
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
                        <h4 class="card-title">Mantenimiento de Unidades</h4>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="columna">Id del Mantenimiento</th>
                                        <th class="columna">N° Unidad</th>
                                        <th class="columna">Id De Accidente previo </th>
                                        <th class="columna">Incidente Previo</th>
                                        <th class="columna">Fecha</th>
                                        <th class="columna">Estado Del Mantenimiento</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="columna">1</td>
                                        <td class="columna">1234</td>
                                        <td class="columna">2</td>
                                        <td class="columna">Accidente de abejas</td>
                                        <td class="columna">04-03-2024</td>
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