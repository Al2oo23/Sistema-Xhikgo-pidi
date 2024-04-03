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
                    <h4 class="card-title">Registros de Personas</h4>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>CÉDULA</th>
                                <th>NOMBRE</th>
                                <th>EDAD</th>
                                <th>CORREO</th>
                                <th>TELÉFONO</th>
                                <th>DIRECCIÓN</th>
                                <th>SEXO</th>
                                <th>TIPO DE PERSONA</th>
                                <th>CARGO</th>
                                <th>SECCIÓN</th>
                                <th>ESTACIÓN</th>
                                <th>ACCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($persona as $fila) : ?>
                                <tr>
                                    <td class="text-bold-500"><?= $fila['cedula'] ?></td>
                                    <td><?= $fila['nombre'] ?></td>
                                    <td><?= $fila['edad'] ?></td>
                                    <td><?= $fila['correo'] ?></td>
                                    <td><?= $fila['telefono'] ?></td>
                                    <td><?= $fila['direccion'] ?></td>
                                    <td><?= $fila['sexo'] ?></td>
                                    <td><?= $fila['tipo_persona'] ?></td>
                                    <td><?= $fila['cargo'] ?></td>
                                    <td><?= $fila['seccion'] ?></td>
                                    <td><?= $fila['estacion'] ?></td>
                                    <td>
                                        <div class='d-flex justify-content-around w-100'>
                                            <a name='editar' id='editar' class='btn btn-primary mx-2' role='button'>Editar</a>
                                            <a name='eliminar' id='eliminar' class='btn btn-danger mx-2' role='button'>Eliminar</a>
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