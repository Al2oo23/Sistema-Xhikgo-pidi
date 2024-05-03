<?php 
$nombrePagina = 'Catálogo de Lugar';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM lugar");
// $sentencia->execute();
// $lugar = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Lugares</h4>
                        <?php include("modalLugarR.php");?>
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
                                    
                                    <tr class="filas">
                                        <td class="columna">Independencia</td>
                                        <td class="columna">?</td>
                                        <td class="columna">24 km</td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modalLugarM.php");?>
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

    <script src="Javascript/lugarModal.js"></script>

<?php 
require ('../footer.php');
?>