<?php
$nombrePagina = 'Catálogo de Municipio';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM municipio");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">
    <div class="card">

        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Municipio</h4>
                    
                    <div class="form-group has-icon-left">
                        <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Buscar">
                            <div class="form-control-icon">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <a href="reportes/reporte_municipio.php" type="submit" class="btn btn-primary">Generar PDF</a>
                        <?php include("modal/modalMunicipioR.php"); ?>  
                    </div>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_municipio">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna" hidden>ID</th>
                                <th class="columna">Municipio</th>
                                <th class="columna">Codigo Postal</th>
                                <th class="columna">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $municipio) : ?>

                                    <tr class="fila">
                                        <td class="columna" hidden><?= $municipio["id"]; ?></td>
                                        <td class="columna"><?= $municipio["nombre"]; ?></td>
                                        <td class="columna"><?= $municipio["codigo"]; ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include("modal/modalMunicipioM.php"); ?>
                                                <div><a name='eliminar' id='eliminar' href='../controlador/ctl_municipio.php?txtID=<?= $municipio['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

<form action="../controlador/ctl_municipio.php" method="POST" style="display: none;">
    <input type="hidden" id="idBorrar" name="id">
</form>

<script src="Javascript/municipioModal.js"></script>

<?php
require('../footer.php');
?>