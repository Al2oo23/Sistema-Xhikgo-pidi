<?php 
session_start();
$nombrePagina = 'Catálogo de Lugar';
require('../header.php');
include('../modelo/conexion.php');

$SQL = "SELECT * FROM lugar";
$preparado = $conexion->prepare($SQL);
$preparado->execute();
$lugares = $preparado->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Lugares</h4>
                        <?php include("modal/modalLugarR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna">Municipio</th>
                                        <th class="columna">Nombre</th> 
                                        <th class="columna">Distancia</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lugares as $lugar): ?>
                                        <tr class="fila">
                                            <td class="columna" hidden><?= $lugar["id"]?></td>
                                            <td class="columna"><?= $lugar["municipio"]?></td>
                                            <td class="columna"><?= $lugar["nombre"]?></td>
                                            <td class="columna"><?= $lugar["distancia"]?></td>
                                            <td>
                                            <div class="botones" style="justify-content:space-evenly;"> 
                                            <?php include("modal/modalLugarM.php"); ?>
                                            <div><a name='eliminar' id='eliminar' href='../controlador/ctl_lugar.php?txtID=<?= $lugar['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form action="../controlador/ctl_lugar.php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

    <script src="Javascript/lugarModal.js"></script>

<?php 
require ('../footer.php');
?>