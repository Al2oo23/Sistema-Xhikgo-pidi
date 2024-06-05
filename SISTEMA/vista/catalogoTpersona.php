<?php
session_start();

$nombrePagina = 'Catálogo Tipos de Persona';

require('../header.php');

include('../modelo/conexion.php');

if (isset($_SESSION['resultado_busqueda_Tpersona'])) {
    $resultado = $_SESSION['resultado_busqueda_Tpersona'];
}
?>

<div class="col-8 m-auto">

    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscador</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action="../buscadores/buscador_Tpersona.php">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">

                                        <label for="nombre_tipo_buscado">Nombre del Tipo de Persona</label>
                                        <input type="text" id="nombre_tipo_buscado" class="form-control" placeholder="Nombre del Tipo de Persona" name="nombre_tipo_buscado" value="<?= isset($_POST['nombre_tipo_buscado']) ? $_POST['nombre_tipo_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">

                                        <label for="descripcion_tipo_buscado">Descripcion del Tipo de Persona</label>
                                        <input type="text" id="descripcion_tipo_buscado" class="form-control" placeholder="Descripcion del Tipo de Persona" name="descripcion_tipo_buscado" value="<?= isset($_POST['descripcion_tipo_buscado']) ? $_POST['descripcion_tipo_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" id="limpiar_tipo" name="limpiar_tipo" class="btn btn-danger me-1 mb-1">Limpiar</button>
                                    <button type="submit" id="buscar_tipo" name="buscar_tipo" class="btn btn-primary me-1 mb-1">Buscar</button>
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
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna">Tipo</th>
                                <th class="columna">Descripcion</th>
                                <th class="columna">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $filtrado) : ?>
                                    <tr class="fila">
                                        <td class="columna" hidden><?= $filtrado['id'] ?></td>
                                        <td class="columna"><?= $filtrado['tipo']; ?></td>
                                        <td class="columna"><?= $filtrado['descripcion']; ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include("modal/modalTpersonaM.php"); ?>
                                                <div class="flex-item"><a href='../controlador/ctl_Tpersona.php?txtID=<?= $filtrado['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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