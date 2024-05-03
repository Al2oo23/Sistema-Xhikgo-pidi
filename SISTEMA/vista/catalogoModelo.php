<?php 
$nombrePagina = 'Catálogo de Modelo';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM modelo");
// $sentencia->execute();
// $modelo = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-6 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Modelo de Vehiculos</h4>
                        <?php include("modalModeloR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna">Modelo</th>
                                        <th class="columna">Marca</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="filas">
                                        <td class="columna">Aveo</td>
                                        <td class="columna">Chevrolet</td>
                                        
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modalModeloM.php");?>
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

    <script src="Javascript/modeloModal.js"></script>

<?php 
require ('../footer.php');
?>