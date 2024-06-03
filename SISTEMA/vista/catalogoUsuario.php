<?php 
session_start();
$nombrePagina = 'Catálogo de Usuario';
require('../header.php');
// include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM `usuario`");
// $sentencia->execute();
// $usuario = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Usuarios</h4>
                        <?php include("modal/modalUsuarioR.php");?>
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
                                     <?php //foreach ($usuario as $usu) :?>

                                    <tr class="fila">
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna" hidden>?</td> 
                                        <td class="columna">?</td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalUsuarioM.php");?>
                                            <div><a name='eliminar' id='eliminar' href='../controlador/ctl_(nombre).php?txtID=<?= $usu['cedula']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                        </td>
                                    </tr>

                                   <?php //endforeach; ?>
            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form action="../controlador/ctl_(nombre).php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

            <script src="Javascript/usuarioModal.js"></script>

        <?php 
        require ('../footer.php');
        ?>