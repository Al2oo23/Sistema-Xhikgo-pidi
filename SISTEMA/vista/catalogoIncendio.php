<?php
session_start();

$nombrePagina = 'Catálogo Incendios';

require('../header.php');

include('../modelo/conexion.php');
?>

<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                        <h4 class="card-title">Incendios</h4>
                        <?php //include("modal/modalAbejasR.php");?>
                    </div>

            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="columna">Fecha</th>
                            <th class="columna">Seccion</th>
                            <th class="columna">Municipio</th>
                            <th class="columna">Localidad</th>
                            <th class="columna">Propietario Vivienda</th>
                            <th class="columna">Valor Inmueble</th>
                            <th class="columna">Numero Residenciados</th>
                            <th class="columna">Fuente de Ignicion</th>
                            <th class="columna">Causa Incendio</th>
                            <th class="columna">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fila">
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
                                    <?php //include("modalIncendioM.php"); ?>
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
</section>

<script src="Javascript/incendioModal.js"></script>

<?php
require('../footer.php');
?>