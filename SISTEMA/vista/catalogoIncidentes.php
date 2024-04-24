<?php 
$nombrePagina = 'Catálogo Incidentes';
require('../header.php');
include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM marca");
// $sentencia->execute();
// $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Incidentes</h4>
            
                        <div class="dropdown icon-right">
                                    <button class="btn btn-success dropdown-toggle me-1" type="button" id="dropdownMenuButtonIconRight" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Nuevo
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonIconRight">
                                        <a class="dropdown-item" href="incendio.php">Incendio</a>
                                        <a class="dropdown-item" href="transito.php">Transito</a>
                                        <a class="dropdown-item" href="abejas.php">Abejas</a>
                                    </div>
                        </div>
                    </div>

                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="columna">Tipo</th>
                                        <th class="columna">Fecha</th>
                                        <th class="columna">Seccion</th>
                                        <th class="columna">N° Unidad</th>
                                        <th class="columna">CI Solicitante</th>
                                        <th class="columna">Hora de Aviso</th>
                                        <th class="columna">Hora de Salida</th>
                                        <th class="columna">Hora de Llegada</th>
                                        <th class="columna">Hora de Regreso</th>
                                        <th class="columna">Municipio</th>
                                        <th class="columna">Direccion</th>
                                        <th class="columna">Ruta</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="filas">
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td class="columna">?</td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modalIncidente.php");?>
                                            <div class="flex-item"><a href="#" class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                            <div><a href="#" class="btn icon btn-dark"><i class="bi bi-clipboard-heart-fill"></i></a></div>
                                        </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    <script src="Javascript/incidenteModal.js"></script>

<?php 
require ('../footer.php');
?>