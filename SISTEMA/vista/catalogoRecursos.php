<?php 
$nombrePagina = 'Catálogo de Recursos';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM recurso");
// $sentencia->execute();
// $recurso = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Recursos</h4>
                        <a href="registrar_recurso.php" class="btn icon icon-left btn-success">Nuevo</a>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="columna">Tipo</th>
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Cantidad</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr class="filas">
                                        <td class="columna" hidden>1</td>
                                        <td class="columna">Herramienta</td>
                                        <td class="columna">Llave Inglesa</td>
                                        <td class="columna">50</td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modalRecurso.php");?>
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

    <script src="Javascript/recursoModal.js"></script>

<?php 
require ('../footer.php');
?>