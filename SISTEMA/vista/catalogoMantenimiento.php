<?php 
$nombrePagina = 'Catalogo de Mantenimiento de Unidades';
require('../header.php');
include('../modelo/conexion.php');

 $sentencia = $conexion->prepare("SELECT * FROM mantenimiento");
 $sentencia->execute();
 $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
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
                                <?php foreach ($resultado as $mantenimiento) : ?>
                                    <tr class="fila">
                                    <td class="columna"><?= $mantenimiento['unidad'] ?></td>
                                    <td class="columna"><?= $mantenimiento['incidente'] ?></td>
                                    <td class="columna"><?= $mantenimiento['fecha'] ?></td>
                                    <td class="columna"><?= $mantenimiento['estado'] ?></td>
                                  
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <div><a name="listo" href="../controlador/ctl_mantenimiento.php?txtID=<?= $mantenimiento['id']; ?>" class="btn icon btn-success"><i class="bi bi-check-lg"></i></a></div>
                                        </div>
                                        </td>
                                        </tr>

                                        <?php endforeach; ?>
                                       
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

<?php 
require ('../footer.php');
?>