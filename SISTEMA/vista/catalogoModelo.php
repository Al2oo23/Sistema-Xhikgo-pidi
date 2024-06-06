<?php 
session_start();
$nombrePagina = 'Catálogo de Modelo';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM modelo");
$sentencia->execute();
 $modelo = $sentencia->fetchAll(PDO::FETCH_ASSOC);

 if (isset($_SESSION['resultado_busqueda_modelo'])) {
    $resultado = $_SESSION['resultado_busqueda_modelo'];
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
                        <form class="form" method="post" action="../buscadores/buscador_modelo.php">
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_modelo_buscado">Nombre del Modelo</label>
                                        <input type="text" id="nombre_modelo_buscado" class="form-control" placeholder="Nombre del Modelo" name="nombre_modelo_buscado" value="<?= isset($_POST['nombre_modelo_buscado']) ? $_POST['nombre_modelo_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_modelo_buscado">Marca del Modelo</label>
                                        <input type="text" id="marca_modelo_buscado" class="form-control" placeholder="Nombre de la Marca " name="marca_modelo_buscado" value="<?= isset($_POST['marca_modelo_buscado']) ? $_POST['marca_modelo_buscado'] : '' ?>">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" id="limpiar_modelo" name="limpiar_modelo" class="btn btn-danger me-1 mb-1">Limpiar</button>
                                    <button type="submit" id="buscar_modelo" name="buscar_modelo" class="btn btn-primary me-1 mb-1">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<div class="col-6 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Modelo de Vehiculos</h4>
                        <?php include("modal/modalModeloR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna" hidden>?</th>
                                        <th class="columna">Modelo</th>
                                        <th class="columna">Marca</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($modelo as $model) :?>

                                    <tr class="fila">
                                        <td class="columna" hidden><?php echo $model["id"]?></td>
                                        <td class="columna"><?php echo $model["nombre"]?></td>
                                        <td class="columna"><?php echo $model["marca"]?></td>
                                        
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modal/modalModeloM.php");?>
                                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_modelo.php?txtID=<?= $model['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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

            <form action="../controlador/ctl_modelo.php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

    <script src="Javascript/modeloModal.js"></script>

<?php 
require ('../footer.php');
?>