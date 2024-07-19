<?php
$nombrePagina = 'Catálogo de Aseguradora';
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM seguro");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-7 m-auto" id="catalogo">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="reportes/reporte_aseguradora.php" method="POST">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nombre_aseguradora_buscador">Nombre de la Aseguradora</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nombre_aseguradora_buscador" name="nombre_aseguradora_buscador"
                                    class="form-control" placeholder="Nombre del Aseguradora Buscado">
                            </div>
                            <div class="col-md-4">
                                <label for="tipo_aseguradora_buscador">Tipo de Aseguradora</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="tipo_aseguradora_buscador" name="tipo_aseguradora_buscador"
                                    class="form-control" placeholder="Tipo de Aseguradora Buscado">
                            </div>
                            <div class="col-md-12 form-group d-flex justify-content-between">
                                <form>
                                    <div class="col-4">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <select name="tamano" class="form-select" id="tamano"
                                                    onchange="cambiarTamano()">
                                                    <option value="pequeno">Pequeño</option>
                                                    <option value="mediano" selected>Mediano</option>
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
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Aseguradora</h4>
                    <?php include ("modal/modalAseguradoraR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_aseguradora">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columnas" hidden>ID</th>
                                <th class="columnas">Nombre</th>
                                <th class="columnas">Tipo</th>
                                <th class="columnas">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado)): ?>
                                <?php foreach ($resultado as $seguro): ?>
                                    <tr class="fila">
                                        <td class="columnas" hidden><?= $seguro["id"]; ?></td>
                                        <td class="columnas"><?= $seguro["nombre"]; ?></td>
                                        <td class="columnas"><?= $seguro["tipo"]; ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include ("modal/modalAseguradoraM.php"); ?>
                                                <div><a name='eliminar' id='eliminar'
                                                        href='../controlador/ctl_aseguradora.php?txtID=<?= $seguro['id']; ?>'
                                                        class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

    <script src="Javascript/aseguradoraModal.js"></script>

    <?php
    require ('../footer.php');
    ?>