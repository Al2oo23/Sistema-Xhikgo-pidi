<?php
$nombrePagina = "Catálogo de Abejas";
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT le.id, le.fecha, le.seccion, l.nombre, le.direccion, le.jefe FROM `levantamiento` le INNER JOIN lugar l ON le.lugar = l.id");
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
                                <th class="columna">Id</th>
                                <th class="columna">Fecha</th>
                                <th class="columna">Seccion</th>
                                <th class="columna">Lugar</th>
                                <th class="columna">Direccion</th>
                                <th class="columna">Jefe</th>
                                <th class="columna">Accion</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($levas as $leva): ?>

                                <tr class="fila">
                                    <td class="columna"><?= $leva["id"]; ?></td>
                                    <td class="columna"><?= $leva["fecha"]; ?></td>
                                    <td class="columna"><?= $leva["seccion"]; ?></td>                    
                                    <td class="columna"><?= $leva["nombre"]; ?></td>
                                    <td class="columna"leva><?= $leva["direccion"]; ?></td>
                                    <td class="columna"><?= $leva["jefe"]; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm1"><i class="bi bi-pencil"></i></button>
                                            
                                        <div><a name='eliminar' id='eliminar'
                                                    href='../controlador/ctl_leva.php?txtID=<?= $leva['id']; ?>'
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

<script src="Javascript/levaModal.js"></script>
<script src="Javascript/plusAbejas.js"></script>

<?php
require ('../footer.php');
?>