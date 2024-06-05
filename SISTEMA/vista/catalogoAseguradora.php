<?php 
session_start();
$nombrePagina = 'Catálogo de Aseguradora';
require('../header.php');

if (isset($_SESSION['resultado_busqueda_aseguradora'])) {
    $resultado = $_SESSION['resultado_busqueda_aseguradora'];
}
?>
    <div class="col-6 m-auto">

           <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscador</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action="../buscadores/buscador_aseguradora.php">
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_aseguradora_buscado">Nombre de la Aseguradora</label>
                                        <input type="text" id="nombre_aseguradora_buscado" class="form-control" placeholder="Nombre del Aseguradora" name="nombre_aseguradora_buscado" value="<?= isset($_POST['nombre_aseguradora_buscado']) ? $_POST['nombre_aseguradora_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tipo_aseguradora_buscado">Tipo de Aseguradora</label>
                                        <input type="text" id="tipo_aseguradora_buscado" class="form-control" placeholder="Tipo de la Aseguradora" name="tipo_aseguradora_buscado" value="<?= isset($_POST['tipo_aseguradora_buscado']) ? $_POST['tipo_aseguradora_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" id="limpiar_aseguradora" name="limpiar_aseguradora" class="btn btn-danger me-1 mb-1">Limpiar</button>
                                    <button type="submit" id="buscar_aseguradora" name="buscar_aseguradora" class="btn btn-primary me-1 mb-1">Buscar</button>
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
                        <h4 class="card-title">Aseguradoras</h4>
                        <?php include("modal/modalAseguradoraR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna" hidden></th>
                                        <th class="columna">Nombre</th>
                                        <th class="columna">Tipo</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($resultado)) : ?>
                                    <?php foreach ($resultado as $seguro) :?>

                                    <tr class="fila">
                                        <td class="columna" hidden><?= $seguro["id"];?></td>
                                        <td class="columna"><?= $seguro["nombre"];?></td>
                                        <td class="columna"><?= $seguro["tipo"];?></td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalAseguradoraM.php");?>
                                            <div><a name='eliminar' id='eliminar' href='../controlador/ctl_aseguradora.php?txtID=<?= $seguro['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

    <script src="Javascript/aseguradoraModal.js"></script>

<?php 
require ('../footer.php');
?>