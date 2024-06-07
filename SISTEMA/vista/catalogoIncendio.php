<?php
session_start();

$nombrePagina = 'Catálogo Incendios';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM incendio");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12 m-auto">

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Incendios</h4>
                    <?php include("modal/modalIncendioR.php"); ?>
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
                            <?php foreach ($resultado as $incendio) : ?>
                                <tr class="fila">
                                    <td class="columna" hidden><?= $incendio['id'] ?></td>
                                    <td class="columna"><?= $incendio['fecha']; ?></td>
                                    <td class="columna"><?= $incendio['seccion']; ?></td>
                                    <td class="columna"><?= $incendio['municipio']; ?></td>
                                    <td class="columna"><?= $incendio['localidad']; ?></td>
                                    <td class="columna"><?= $incendio['propietario']; ?></td>
                                    <td class="columna"><?= $incendio['valor_inmueble']; ?></td>
                                    <td class="columna"><?= $incendio['num_residenciados']; ?></td>
                                    <td class="columna"><?= $incendio['fuente_ignicion']; ?></td>
                                    <td class="columna"><?= $incendio['causa_incendio']; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalTpersonaM.php"); ?>
                                            <div class="flex-item"><a href='../controlador/ctl_incendio.php?txtID=<?= $incendio['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

    <script src="Javascript/tpersonaModal.js"></script>

    <?php
    require('../footer.php');
    ?>