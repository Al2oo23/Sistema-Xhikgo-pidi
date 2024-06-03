<?php 
session_start();
$nombrePagina = 'Catálogo de Aseguradora';
require('../header.php');
// include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM aseguradora");
// $sentencia->execute();
// $aseguradora = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
           <div class="col-4 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Aseguradoras</h4>
                        <?php include ("modal/modalAseguradoraR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                    <th class="columna" hidden>?</th>
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Tipo</th>
                                        <th class="columna">Accion</th> 
                                     </tr>
                                </thead>
                                <tbody>
                                    <?php //foreach ($aseguradora as $aseg) :?>
                                    <tr class="fila">
                                        <td class="columna" hidden>?</td>
                                        <td class="columna">Tealca</td>
                                        <td class="columna">Vehiculo</td>
                                        <td>

                                        <div class="botones" style="justify-content:space-evenly;">
                                                <?php include ("modal/modalAseguradoraM.php");?>
                                                <div><a name='eliminar' id='eliminar' href='../controlador/ctl_(nombre).php?txtID=<?= $aseg['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

    <script src="Javascript/aseguradoraModal.js"></script>

<?php 
require ('../footer.php');
?>