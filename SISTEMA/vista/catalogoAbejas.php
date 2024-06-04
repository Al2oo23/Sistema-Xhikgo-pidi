<?php
session_start();
$nombrePagina = "Catálogo de Abejas";
require('../header.php');
// include('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM `persona`");
// $sentencia->execute();
// $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                        <h4 class="card-title">Incidente de Abejas</h4>
                        <?php include("modal/modalPersonaR.php");?>
                    </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna" style="display: none;">Id</th>
                                <th class="columna">Fecha</th>
                                <th class="columna">Seccion</th>
                                <th class="columna">Municipio</th>
                                <th class="columna">Localidad</th>
                                <th class="columna">Lugar</th>
                                <th class="columna"> Dueño Inmueble</th>
                                <th class="columna">Jefe</th>
                                <th class="columna">Recursos</th>
                                <th class="columna">Cantidad</th>
                                <th class="columna">Efectivo</th>
                                <th class="columna">Unidad</th>
                                <th class="columna">Accion</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                                    <?php //foreach ($persona as $per) :?>

                                    <tr class="fila">
                                    
                                        <td class="columna" style="display: none;"></td>
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
                                            <?php include("modal/modalPersonaM.php");?>
                                            <div><a name='eliminar' id='eliminar' href='../controlador/ctl_(nombre).php?txtID=<?= $per['cedula']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                        </td>
                                    </tr>

                                   <?php //endforeach; ?>
                                </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

            <form action="../controlador/ctl_(nombre).php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

<script src="Javascript/personaModal.js"></script>

<?php
require('../footer.php');
?>