<?php 
session_start();
$nombrePagina = 'Catálogo de Municipio';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM municipio");
$sentencia->execute();
$municipio = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Municipios</h4>
                        <?php include("modal/modalMunicipioR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna" hidden></th>
                                        <th class="columna">Municipio</th>
                                        <th class="columna">Codigo Postal</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($municipio as $mun) :?>

                                    <tr class="fila">
                                        <td class="columna" hidden><?= $mun["id"];?></td>
                                        <td class="columna"><?= $mun["nombre"];?></td>
                                        <td class="columna"><?= $mun["codigo"];?></td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalMunicipioM.php");?>
                                            <div><a name='eliminar' id='eliminar' href='../controlador/ctl_municipio.php?txtID=<?= $mun['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

            <form action="../controlador/ctl_municipio.php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

    <script src="Javascript/municipioModal.js"></script>

<?php 
require ('../footer.php');
?>