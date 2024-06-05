<?php 
session_start();
$nombrePagina = 'Catálogo de Seccion';
require('../header.php');
include('../modelo/conexion.php');

if (isset($_SESSION['resultado_busqueda_seccion'])) {
    $resultado = $_SESSION['resultado_busqueda_seccion'];
}
?>

<div class="col-4 m-auto">

<div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscador</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action="../buscadores/buscador_seccion.php">
                            <div class="row">

                                <div class="col-md-7 col-12">
                                    <div class="form-group">
                                        <label for="nombre_seccion_buscado">Nombre de la Seccion</label>
                                        <input type="text" id="numero_seccion_buscado" class="form-control" placeholder="Numero de la Seccion" name="numero_seccion_buscado" value="<?= isset($_POST['numero_seccion_buscado']) ? $_POST['numero_seccion_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" id="limpiar_seccion" name="limpiar_seccion" class="btn btn-danger me-1 mb-1">Limpiar</button>
                                    <button type="submit" id="buscar_seccion" name="buscar_seccion" class="btn btn-primary me-1 mb-1">Buscar</button>
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
                        <h4 class="card-title">Secciones</h4>
                        <?php include("modal/modalSeccionR.php"); ?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr class="fila">
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($resultado)) : ?>
                                <?php foreach ($resultado as $seccion) :?>
                                    <tr class="fila">
                                    <td class="columna" style="display: none;"><?php echo $seccion ["id"]; ?></td>
                                    <td class="columna"><?php echo $seccion ["numero"]; ?></td>
                                    
                                    <td class="columna">
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalSeccionM.php"); ?>
                                            <div><a href="../controlador/ctl_seccion.php?txtID=<?= $seccion['id']; ?>" class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                        </td>

                                    </tr>
                                    <?php endforeach;?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

<script src="Javascript/seccionModal.js"> </script>

<?php 
require ('../footer.php');
?>