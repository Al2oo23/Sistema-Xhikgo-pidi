<?php
session_start();
$nombrePagina = 'Catálogo de Usuario';
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM usuario");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-8 m-auto">
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
                                <label for="cedula_usuario_buscador">Cedula</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="cedula_usuario_buscador" class="form-control" placeholder="Cedula Buscada">
                            </div>
                            <div class="col-md-4">
                                <label for="nombre_usuario_buscador">Nombre de Usuario</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nombre_usuario_buscador" class="form-control" placeholder="Nombre de Usuario Buscado">
                            </div>
                            <div class="col-md-4">
                                <label for="estado_usuario_buscador">Estado</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="estado_usuario_buscador" class="form-control" placeholder="Estado Buscado">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Usuarios</h4>
                    <?php include("modal/modalUsuarioR.php"); ?>
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
                            <?php foreach ($resultado as $usuario) :
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
                                            <?php include("modal/modalUsuarioM.php"); ?>
                                        </div>
                                    </td>
                                </tr>
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
require('../footer.php');
?>