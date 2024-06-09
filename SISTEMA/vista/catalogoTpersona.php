<?php
$nombrePagina = 'Catálogo Tipos de Persona';

require('../header.php');

include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM tipo_persona");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">

<div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Buscador</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="tipo_persona_buscador">Tipo de Persona</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="tipo_persona_buscador" class="form-control" placeholder="Tipo de Persona Buscada">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="descripcion_tipo_buscador">Descripcion</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="descripcion_tipo_buscador" class="form-control" placeholder="Descripcion Buscada">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Tipos de Persona</h4>
                    <?php include("modal/modalTpersonaR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_Tpersona">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna">Tipo</th>
                                <th class="columna">Descripcion</th>
                                <th class="columna">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $tipo_persona) : ?>
                                    <tr class="fila">
                                        <td class="columna" hidden><?= $tipo_persona['id'] ?></td>
                                        <td class="columna"><?= $tipo_persona['tipo']; ?></td>
                                        <td class="columna"><?= $tipo_persona['descripcion']; ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include("modal/modalTpersonaM.php"); ?>
                                                <div class="flex-item"><a href='../controlador/ctl_Tpersona.php?txtID=<?= $tipo_persona['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

    <script src="Javascript/tpersonaModal.js"></script>

    <?php
    require('../footer.php');
    ?>