<?php 
session_start();
$nombrePagina = 'Catálogo de Marca';
require('../header.php');
include('../modelo/conexion.php');

$SQL = "SELECT * FROM marca";
$preparado = $conexion->prepare($SQL);
$preparado->execute();
$marcas = $preparado->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-5 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Marcas de Vehiculos</h4>
                        <?php include("modal/modalMarcaR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                    <th class="columna" hidden>?</th>
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($marcas as $marca) :?>
                                    <tr class="fila">
                                    <td class="columna" hidden><?= $marca["id"]?></td>
                                    <td class="columna"><?= $marca["nombre"]?></td>
                                        
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modal/modalMarcaM.php");?>
                                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_marca.php?txtID=<?= $marca['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

            <form action="../controlador/ctl_marca.php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

    <script src="Javascript/marcaModal.js"></script>

<?php 
require ('../footer.php');
?>