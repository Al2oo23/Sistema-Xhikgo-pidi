<?php 
session_start();
$nombrePagina = 'Catálogo de Lugar';
require('../header.php');
include('../modelo/conexion.php');

if (isset($_SESSION['resultado_busqueda_lugar'])) {
    $resultado = $_SESSION['resultado_busqueda_lugar'];
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
                        <form class="form" method="post" action="../buscadores/buscador_lugar.php">
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_lugar_buscado">Nombre del lugar</label>
                                        <input type="text" id="nombre_lugar_buscado" class="form-control" placeholder="Nombre del lugar" name="nombre_lugar_buscado" value="<?= isset($_POST['nombre_lugar_buscado']) ? $_POST['nombre_lugar_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_lugar_buscado">Municipio del lugar</label>
                                        <input type="text" id="municipio_lugar_buscado" class="form-control" placeholder="Municipio del lugar" name="municipio_lugar_buscado" value="<?= isset($_POST['municipio_lugar_buscado']) ? $_POST['municipio_lugar_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_lugar_buscado">Distancia del lugar</label>
                                        <input type="text" id="distancia_lugar_buscado" class="form-control" placeholder="Distancia del lugar" name="distancia_lugar_buscado" value="<?= isset($_POST['distancia_lugar_buscado']) ? $_POST['distancia_lugar_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" id="limpiar_lugar" name="limpiar_lugar" class="btn btn-danger me-1 mb-1">Limpiar</button>
                                    <button type="submit" id="buscar_lugar" name="buscar_lugar" class="btn btn-primary me-1 mb-1">Buscar</button>
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
                        <h4 class="card-title">Lugares</h4>
                        <?php include("modal/modalLugarR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Municipio</th>
                                        <th class="columna">Distancia</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($resultado)) : ?>
                                    <?php foreach ($resultado as $lugar): ?>
                                        <tr class="fila">
                                            <td class="columna" hidden><?= $lugar["id"]?></td>
                                            <td class="columna"><?= $lugar["nombre"]?></td>
                                            <td class="columna"><?= $lugar["municipio"]?></td>
                                            <td class="columna"><?= $lugar["distancia"]?></td>
                                            <td>
                                            <div class="botones" style="justify-content:space-evenly;"> 
                                            <?php include("modal/modalLugarM.php"); ?>
                                            <div><a name='eliminar' id='eliminar' href='../controlador/ctl_lugar.php?txtID=<?= $lugar['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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
            
    <script src="Javascript/lugarModal.js"></script>

<?php 
require ('../footer.php');
?>