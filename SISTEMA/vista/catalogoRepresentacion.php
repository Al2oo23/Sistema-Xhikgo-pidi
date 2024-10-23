<?php
$nombrePagina = 'Catálogo Representación Institucional';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM representacion_institucional");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
include ("modal/modalRepresentacionM.php");
?>

<div class="col-12 m-auto" id="catalogo">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="reportes/reporte_representacion.php" method="POST">
                    <div class="form-body">
                        <div class="row">
                            <form>
                                <div class="col-md-12 form-group d-flex justify-content-between">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <select name="tamano" class="form-select" id="tamano"
                                                onchange="cambiarTamano()">
                                                <option value="pequeno">Pequeño</option>
                                                <option value="mediano">Mediano</option>
                                                <option value="grande">Grande</option>
                                                <option value="extragrande" selected>Extra Grande</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Generar PDF</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <div class="card-header">
                <h4 class="card-title">Representación Institucional</h4>
                <?php include("modal/modalRepresentacionR.php"); ?>
            </div>
            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="tabla_representacion">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="columnas" hidden>ID</th>
                            <th class="columnas">Fecha</th>
                            <th class="columnas">Sección</th>
                            <th class="columnas">Estación</th>
                            <th class="columnas" hidden>Tipo de Aviso</th>
                            <th class="columnas" hidden>Hora Aviso</th>
                            <th class="columnas" hidden>Hora Salida</th>
                            <th class="columnas" hidden>Hora Llegada</th>
                            <th class="columnas" hidden>Hora Regreso</th>
                            <th class="columnas" hidden>Causa</th>
                            <th class="columnas" hidden>Direccion</th>
                            <th class="columnas">Número Efectivos</th>
                            <th class="columnas" hidden>Maletín Primeros Auxilios</th>
                            <th class="columnas" hidden>Explicación</th>
                            <th class="columnas" hidden>CI PNB</th>
                            <th class="columnas" hidden>CI GNB</th>
                            <th class="columnas" hidden>CI INTT</th>
                            <th class="columnas" hidden>CI INVITY</th>
                            <th class="columnas" hidden>CI PC</th>
                            <th class="columnas" hidden>CI OTRO</th>
                            <th class="columnas">Jefe Comisión</th>
                            <th class="columnas">Jefe General</th>
                            <th class="columnas">Jefe Sección</th>
                            <th class="columnas">Comandante</th>
                            <th class="columnas">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultado as $representacion): ?>
                            <tr class="fila">
                                <td class="columnas" hidden><?= $representacion['id'] ?></td>
                                <th class="columnas"><?= $representacion['fecha'] ?></th>
                                <th class="columnas"><?= $representacion['seccion'] ?></th>
                                <th class="columnas"><?= $representacion['estacion'] ?></th>
                                <th class="columnas" hidden><?= $representacion['aviso'] ?></th>
                                <th class="columnas" hidden><?= $representacion['hora'] ?></th>
                                <th class="columnas" hidden><?= $representacion['salida'] ?></th>
                                <th class="columnas" hidden><?= $representacion['llegada'] ?></th>
                                <th class="columnas" hidden><?= $representacion['regreso'] ?></th>
                                <th class="columnas" hidden><?= $representacion['causa'] ?></th>
                                <th class="columnas" hidden><?= $representacion['direccion'] ?></th>
                                <th class="columnas"><?= $representacion['num_efectivos'] ?></th>
                                <th class="columnas" hidden><?= $representacion['material'] ?></th>
                                <th class="columnas" hidden><?= $representacion['explicacion'] ?></th>
                                <th class="columnas" hidden><?= $representacion['ci_pnb'] ?></th>
                                <th class="columnas" hidden><?= $representacion['ci_gnb'] ?></th>
                                <th class="columnas" hidden><?= $representacion['ci_intt'] ?></th>
                                <th class="columnas" hidden><?= $representacion['ci_invity'] ?></th>
                                <th class="columnas" hidden><?= $representacion['ci_pc'] ?></th>
                                <th class="columnas" hidden><?= $representacion['ci_otro'] ?></th>
                                <th class="columnas"><?= $representacion['jefe_comision'] ?></th>
                                <th class="columnas"><?= $representacion['jefe_generales'] ?></th>
                                <th class="columnas"><?= $representacion['jefe_seccion'] ?></th>
                                <th class="columnas"><?= $representacion['comandante'] ?></th>
                                <td>
                                    <div class="botones" style="justify-content:space-evenly;">
                                        <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm1"><i class="bi bi-pencil"></i></button>
                                        <div class="flex-item"><a
                                                href='../controlador/ctl_representacion.php?txtID=<?= $representacion['id']; ?>'
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


<script src="Javascript/representacionModal.js"></script>

<?php
require('../footer.php');
?>