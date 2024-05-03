<?php 
$nombrePagina = 'Catálogo de Usuario';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM `usuario`");
$sentencia->execute();
$usuario = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Usuarios</h4>
                        <?php include("modalUsuarioR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna">Cedula</th>
                                        <th class="columna">Tipo de Usuario</th>
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Estado</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($usuario as $user) : ?>

                                    <tr class="filas">
                                        <td class="columna"><?= $user["cedula"]?></td>
                                        <td class="columna"><?= $user["tipo"]?></td>
                                        <td class="columna"><?= $user["nombre"]?></td>
                                        <td class="columna" hidden><?= $user["clave"]?></td>
                                        <td class="columna"><?= $user["estado"]?></td>
                                        <td>
                                        <div class='d-flex justify-content-around w-100'>
                                            
                                            <div class="">
                                               <?php include("modalUsuarioM.php");?>
                                            </div>

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

            <script src="Javascript/usuarioModal.js"></script>

        <?php 
        require ('../footer.php');
        ?>