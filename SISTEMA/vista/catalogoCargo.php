<?php 
session_start();
$nombrePagina = 'Catálogo Cargo de Bomberos';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM cargo_bomberos");
// $sentencia->execute();
// $cargo = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-5 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Cargo de Bomberos</h4>
                        <?php include("modal/modalCargoR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna" hidden>?</th>
                                        <th class="columna">Cargo</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php //foreach ($cargo as $carg) :?>
                                    <tr class="fila">
                                        <td class="columna" hidden>?</td>
                                        <td class="columna">?</td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modal/modalCargoM.php");?>
                                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_(nombre).php?txtID=<?= $carg['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                        </td>

                                    </tr>
                                   <? //endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form action="../controlador/ctl_(nombre).php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

    <script src="Javascript/cargoModal.js"></script>

<?php 
require ('../footer.php');
?>