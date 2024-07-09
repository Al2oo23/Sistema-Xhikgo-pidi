<?php 
session_start();
$nombrePagina = 'Catálogo de Tipos de Incidente';
require('../header.php');
include('../modelo/conexion.php');

if (isset($_SESSION['resultado_busqueda_incidente'])) {
$resultado = $_SESSION['resultado_busqueda_incidente'];
}
?>

<div class="col-5 m-auto">

    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscador</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action="../buscadores/buscador_Tincidente.php">
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="aviso_Tincidente_buscado">Tipo de Incidente</label>
                                        <input type="text" id="aviso_Tincidente_buscado" class="form-control" placeholder="Tipo de Incidente" name="incidente_Tincidente_buscado" value="<?= isset($_POST['incidente_Tincidente_buscado']) ? $_POST['incidente_Tincidente_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" id="limpiar_Tincidente" name="limpiar_Tincidente" class="btn btn-danger me-1 mb-1">Limpiar</button>
                                    <button type="submit" id="buscar_Tincidente" name="buscar_Tincidente" class="btn btn-primary me-1 mb-1">Buscar</button>
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
                        <h4 class="card-title">Tipo de Incidente</h4>
                        <?php include("modal/modalTincidenteR.php"); ?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr class="fila">
                                        <th class="columna">Tipo de Incidente</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                <?php if (isset($resultado)) : ?>
                                <?php foreach  ($resultado as $filtrado) : ?>
                                    <tr class="fila">
                                    <td class="columna" hidden><?= $filtrado['id'] ?></td>
                                        <td class="columna"><?= $filtrado['incidente']; ?></td>
                                        <td>
                                            <div class="botones" style="justify-content:space-evenly;">
                                                <?php include("modal/modalTincidenteM.php"); ?>
                                                <div><a href='../controlador/ctl_Tincidente.php?txtID=<?= $filtrado['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

            <script src="Javascript/TincidenteModal.js"></script>

<?php 
require ('../footer.php');
?>