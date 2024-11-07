<?php
// session_start();
$nombrePagina = 'Catálogo de Usuario';
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT sentencia FROM criterio WHERE tabla = 'usuario'");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC)[0];

$sentencia = $resultado['sentencia'];

$sentencia = $conexion->prepare("$sentencia");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-9 m-auto" id="catalogo">
<div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
            
                <div class="col-12">
                    <div class="form-group has-icon-left">
                        <div class=" position-relative filtrador">
                            <input type="text" class="form-control" id="busca" placeholder="Buscar">
                            <div>
                                <a href="reportes/reporte_usuario.php" class="btn btn-primary" style="text-decoration: none;
                                    color:white;">Generar Reporte</a>
                                <?php include ("modal/criterioUsuario.php"); ?>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Usuario</h4>
                    <?php include ("modal/modalUsuarioR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_usuario">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columnas">Cedula</th>
                                <th class="columnas">Nombre</th>
                                <th class="columnas" hidden>Clave</th>
                                <th class="columnas">Estado</th>
                                <th class="columnas" hidden>Pregunta</th>
                                <th class="columnas" hidden>Respuesta</th>
                                <th class="columnas">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultado as $usuario):
                                if($usuario['nombre'] != 'Cofla'):
                                ?>
                                <tr class="fila">
                                    <td class="columnas"><?= $usuario['cedula']; ?></td>
                                    <td class="columnas"><?= $usuario['nombre']; ?></td>
                                    <td class="columnas" hidden><?= $usuario['clave']; ?></td>
                                    <td class="columnas" hidden><?= $usuario['pregunta']; ?></td>
                                    <td class="columnas" hidden><?= $usuario['respuesta']; ?></td>
                                    <td class="columnas"><?= $usuario['estado']; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include ("modal/modalUsuarioM.php"); ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif;?>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="Javascript/usuarioModal.js"></script>

<?php
require ('../footer.php');
?>