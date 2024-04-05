<?php
$nombrePagina = "Catálogo de Persona";
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM `persona`");
$sentencia->execute();
$persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                        <h4 class="card-title">Personas</h4>
                        <a href="persona.php" class="btn icon icon-left btn-success">Nuevo</a>
                    </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="columna">Cedula</th>
                                <th class="columna">Nombre</th>
                                <th class="columna">Edad</th>
                                <th class="columna">Correo</th>
                                <th class="columna">telefono</th>
                                <th class="columna">Cargo</th>
                                <th class="columna">Direccion</th>
                                <th class="columna">Sexo</th>
                                <th class="columna">Tipo</th>
                                <th class="columna">Seccion</th>
                                <th class="columna">Estacion</th>
                                <th class="columna">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($persona as $fila) : ?>
                                <tr>
                                    <td class="columna"><?= $fila['cedula'] ?></td>
                                    <td class="columna"><?= $fila['nombre'] ?></td>
                                    <td class="columna"><?= $fila['edad'] ?></td>
                                    <td class="columna"><?= $fila['correo'] ?></td>
                                    <td class="columna"><?= $fila['telefono'] ?></td>
                                    <td class="columna"><?= $fila['cargo'] ?></td>
                                    <td class="columna"><?= $fila['direccion'] ?></td>
                                    <td class="columna"><?= $fila['sexo'] ?></td>
                                    <td class="columna"><?= $fila['tipo_persona'] ?></td>
                                    <td class="columna"><?= $fila['seccion'] ?></td>
                                    <td class="columna"><?= $fila['estacion'] ?></td>
                                    <td class="columna">
                                        <div class='d-flex justify-content-around w-100'>
                                            <div class=""><a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a></div>
                                            <div><a href="#" class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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
    </div>
</section>


<?php
require('../footer.php');
?>