<?php 
$nombrePagina = 'Catálogo Cargo de Bomberos';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM municipio");
// $sentencia->execute();
// $municipio = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-5 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Cargo de Bomberos</h4>
                        <?php include("modalCargoR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna" hidden>ID</th>
                                        <th class="columna">Cargo</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="filas">
                                        <td class="columna">?</td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        
                                            <div><a href="#" class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                        </td>

                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    <script src="Javascript/municipioModal.js"></script>

<?php 
require ('../footer.php');
?>