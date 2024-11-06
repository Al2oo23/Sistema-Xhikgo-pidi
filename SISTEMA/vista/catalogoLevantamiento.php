<?php
$nombrePagina = 'Catálogo Levantamiendo de Cadaver';
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM levantamiento");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
include ("modal/modalLevantamientoM.php");
?>

<div class="col-12" id="catalogo">
<div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">

                <div class="col-12">
                    <div class="form-group has-icon-left">
                        <div class=" position-relative filtrador">
                            <input type="text" class="form-control" id="busca" placeholder="Buscar">
                            <div>
                                <a href="reportes/reporte_usuario.php" class="btn btn-primary" style="text-decoration: none;
                                    color:white;">Generar Reporte</a>
                                <?php include("modal/criterioUsuario.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Levantamiento</h4>
                    <?php include ("modal/modalLevantamientoR.php"); ?>
                </div>

                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_levantamiento">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columnas" hidden>ID</th>
                                <th class="columnas">Fecha</th>
                                <th class="columnas">Direccion</th>
                                <th class="columnas">Municipio</th>
                                <th class="columnas">Lugar</th>
                                <th class="columnas">Estado Encontrado</th>
                                <th class="columnas">Causa</th>
                                <th class="columnas">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultado as $levantamiento): ?>
                                <tr class="fila">
                                    <td class="columnas" hidden><?= $levantamiento['id']?></td>
                                    <td class="columnas"><?= $levantamiento['fecha'];?></td>
                                    <td class="columnas"><?= $levantamiento['direccion'];?></td>
                                    <td class="columnas"><?= $levantamiento['municipio'];?></td>
                                    <td class="columnas"><?= $levantamiento['lugar'];?></td>
                                    <td class="columnas"><?= $levantamiento['estado_encontrado'];?></td>
                                    <td class="columnas"><?= $levantamiento['causa'];?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm"><i class="bi bi-pencil"></i></button>
                                            <div class="flex-item"><a
                                                    href='../controlador/ctl_levantamiento.php?txtID=<?= $levantamiento['id'];?>'
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

    <script src="Javascript/levantamientoModal.js"></script>
    <script src="Javascript/plusLevantamiento.js"></script>

    <?php
    require ('../footer.php');
    ?>