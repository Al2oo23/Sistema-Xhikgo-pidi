<?php 
$nombrePagina = 'Catalogo de Mantenimiento de Unidades';
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
                        <h4 class="card-title">Cronograma de Mantenimiento</h4>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna">N° Unidad</th>
                                        <th class="columna">Incidente Previo</th>
                                        <th class="columna">Fecha</th>
                                        <th class="columna">Estado Del Mantenimiento</th>
                                        <th class="columna">Accion</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr class="fila">
                                        <td class="columna">1234</td>
                                        <td class="columna">Accidente de abejas</td>
                                        <td class="columna">04-03-2024</td>
                                        <td class="columna">Buenas condiciones</td>
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