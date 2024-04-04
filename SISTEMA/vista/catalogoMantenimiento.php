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
                                        <th class="columna">N° Unidad</th>
                                        <th class="columna">Incidente Previo</th>
                                        <th class="columna">Fecha</th>
                                        <th class="columna">Estado Del Mantenimiento</th>
                                        <th class="columna">Accion</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="columna">1234</td>
                                        <td class="columna">Accidente de abejas</td>
                                        <td class="columna">04-03-2024</td>
                                        <th class="columna">Buenas condiciones </th>
                                        <td>

                                        <div class="botones" style="justify-content:space-evenly;">
                                        <div><a href="#" class="btn icon btn-success"><i class="bi bi-check-lg"></i></a></div>
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