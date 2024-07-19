<?php
$nombrePagina = 'Catálogo de Tipo de Aviso';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM aviso");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-5 m-auto" id="catalogo">

    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscador</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action="reportes/reporte_tipo_aviso.php">
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tipo_aviso_buscador">Tipo de aviso</label>
                                        <input type="text" id="tipo_aviso_buscador" class="form-control" placeholder="Tipo de Aviso" name="tipo_aviso_buscador">
                                    </div>
                                </div>
                                <div class="col-md-12 form-group d-flex justify-content-between">
                                    <form>
                                        <div class="col-4">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <select name="tamano" class="form-select" id="tamano" onchange="cambiarTamano()">
                                                        <option value="pequeno" selected>Pequeño</option>
                                                        <option value="mediano">Mediano</option>
                                                        <option value="grande">Grande</option>
                                                        <option value="extragrande">Extra Grande</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <button type="submit" class="btn btn-primary">Generar PDF</button>
                                </div>
                            </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <div class="card-header">
                                <h4 class="card-title">Tipo de Aviso</h4>
                                <?php include("modal/modalTavisoR.php"); ?>
                            </div>
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="tabla_tipo_aviso">
                                    <thead>
                                        <tr class="fila">
                                            <th class="columnas">Tipo de Aviso</th>
                                            <th class="columnas">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if (isset($resultado)) : ?>
                                            <?php foreach ($resultado as $tipo_aviso) : ?>
                                                <tr class="fila">
                                                    <td class="columnas" hidden><?= $tipo_aviso['id'] ?></td>
                                                    <td class="columnas"><?= $tipo_aviso['nombre']; ?></td>
                                                    <td>
                                                        <div class="botones" style="justify-content:space-evenly;">
                                                            <?php include("modal/modalTavisoM.php"); ?>
                                                            <div><a href='../controlador/ctl_Taviso.php?txtID=<?= $tipo_aviso['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="Javascript/TavisoModal.js"></script>

    <?php
    require('../footer.php');
    ?>