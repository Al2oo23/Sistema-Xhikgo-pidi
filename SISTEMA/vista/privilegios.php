<?php
$nombrePagina = 'Privilegios';
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
                <form class="form form-horizontal" action="reportes/reporte_.php" method="POST">
                    <div class="form-body">
                        <div class="row">
                            
                            <div class="col-md-12 form-group">
                                <input type="text" id="cedula_usuario_buscador" name="cedula" class="form-control" placeholder="Buscar...">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Privilegios</h4>
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
                                            <?php include("modal/modalPrivilegios.php"); ?>
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
<script src="Javascript/privilegios.js"></script>

<?php
require('../footer.php');
?>