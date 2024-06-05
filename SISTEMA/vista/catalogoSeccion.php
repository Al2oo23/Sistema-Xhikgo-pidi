<?php 
$nombrePagina = 'Catálogo de Seccion';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM seccion");
 $sentencia->execute();
 $secciones = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-4 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Seciones</h4>
                        <?php include("modal/modalSeccionR.php"); ?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr class="fila">
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($secciones as $seccion) :?>
                                    <tr class="fila">
                                    <td class="columna" style="display: none;"><?php echo $seccion ["id"]; ?></td>
                                    <td class="columna"><?php echo $seccion ["numero"]; ?></td>
                                    
                                    <td class="columna">
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalSeccionM.php"); ?>
                                            <div><a href="../controlador/ctl_seccion.php?txtID=<?= $seccion['id']; ?>" class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                        </td>

                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

<script src="Javascript/seccionModal.js"> </script>

<?php 
require ('../footer.php');
?>