<?php
$nombrePagina = "Catálogo de Abejas";
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM `levantamiento`");
$sentencia->execute();
$levas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
include ("modal/modalLevaM.php");
?>

<div class="col-12" id="catalogo">
    

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Levantamiento de Cadaver</h4>
                    <?php include ("modal/modalLevaR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_abejas">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna" hidden>Id</th>
                                <th class="columna">Fecha</th>
                                <th class="columna">Seccion</th>
                                <th class="columna">Ubicacion</th>
                                <th class="columna">Lugar</th>
                                <th class="columna">Dueño Inmueble</th>
                                <th class="columna">Jefe</th>
                                <th class="columna">Accion</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($levas as $leva): ?>

                                <tr class="fila">
                                    <td class="columna" hidden><?= $abej["id"]; ?></td>
                                    <td class="columna"><?= $abej["fecha"]; ?></td>
                                    <td class="columna"><?= $abej["seccion"]; ?></td>
                                    <td class="columna" hidden><?= $abej["estacion"]; ?></td>
                                    <td class="columna" hidden><?= $abej["aviso"]; ?></td>
                                    <td class="columna" hidden><?= $abej["hora"]; ?></td>
                                    <td class="columna" hidden><?= $abej["salida"]; ?></td>
                                    <td class="columna" hidden><?= $abej["llegada"]; ?></td>
                                    <td class="columna" hidden><?= $abej["regreso"]; ?></td>
                                    <td class="columna"><?= $abej["panal"]; ?></td>
                                    <td class="columna" hidden><?= $abej["direccion"]; ?></td>
                                    <td class="columna"><?= $abej["lugar"]; ?></td>
                                    <td class="columna"><?= $abej["inmueble"]; ?></td>
                                    <td class="columna"><?= $abej["jefe"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_pnb"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_gnb"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_intt"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_invity"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_pc"]; ?></td>
                                    <td class="columna" hidden><?= $abej["ci_otro"]; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm1"><i class="bi bi-pencil"></i></button>
                                            
                                        <div><a name='eliminar' id='eliminar'
                                                    href='../controlador/ctl_abejas.php?txtID=<?= $abej['id']; ?>'
                                                    class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="Javascript/abejasModal.js"></script>
<script src="Javascript/plusAbejas.js"></script>

<?php
require ('../footer.php');
?>