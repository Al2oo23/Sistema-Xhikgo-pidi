<?php 
session_start();
$nombrePagina = 'Catálogo de Modelo';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM modelo");
$sentencia->execute();
 $modelo = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-6 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Modelo de Vehiculos</h4>
                        <?php include("modal/modalModeloR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna" hidden>?</th>
                                        <th class="columna">Modelo</th>
                                        <th class="columna">Marca</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($modelo as $model) :?>

                                    <tr class="fila">
                                        <td class="columna" hidden><?php echo $model["id"]?></td>
                                        <td class="columna"><?php echo $model["nombre"]?></td>
                                        <td class="columna"><?php echo $model["marca"]?></td>
                                        
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modal/modalModeloM.php");?>
                                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_modelo.php?txtID=<?= $model['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

            <form action="../controlador/ctl_modelo.php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

    <script src="Javascript/modeloModal.js"></script>

<?php 
require ('../footer.php');
?>