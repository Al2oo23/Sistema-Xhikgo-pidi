<?php
$nombrePagina = 'Catálogo Estado de Cadaver';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM estado_cadaver");
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
                        <form class="form" method="post" action="reportes/reporte_estado_cadaver.php">
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="incendio">Estado de Cadaver</label>
                                        <input type="text" id="estado_cadaver_buscador" class="form-control"
                                            placeholder="Estado de Cadaver" name="estado_cadaver_buscador">
                                    </div>
                                </div>
                                
                                <div class="col-md-14 form-group d-flex justify-content-between">
                                    <form>
                                        <div class="col-6">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">

                                                    <select name="tamano" class="form-select" id="tamano"
                                                        onchange="cambiarTamano()">
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
                                <h4 class="card-title">Estado de Cadaver</h4>
                                <?php include("modal/modalEcadaverR.php"); ?>
                            </div>
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="tabla_estado_cadaver">
                                    <thead>
                                        <tr class="fila">
                                            <th class="columnas">Estado de Cadaver</th>
                                            <th class="columnas">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if (isset($resultado)): ?>
                                            <?php foreach ($resultado as $estado_cadaver): ?>
                                                <tr class="fila">
                                                    <td class="columnas" hidden><?= $estado_cadaver['id'] ?></td>
                                                    <td class="columnas"><?= $estado_cadaver['cadaver']; ?></td>
                                                    <td>
                                                        <div class="botones" style="justify-content:space-evenly;">
                                                            <?php include("modal/modalEcadaverM.php"); ?>
                                                            <div><a href='../controlador/ctl_Ecadaver.php?txtID=<?= $estado_cadaver['id']; ?>'
                                                                    class="btn icon btn-danger"><i class="bi bi-x"></i></a>
                                                            </div>
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

    <script src="Javascript/EcadaverModal.js"></script>

    <?php
    require('../footer.php');
    ?>