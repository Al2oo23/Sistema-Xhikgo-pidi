<?php
session_start();
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
                        <?php include("modal/modalPersonaR.php");?>
                    </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columna">Cedula</th>
                                <th class="columna">Nombre</th>
                                <th class="columna">Edad</th>
                                <th class="columna" hidden>Correo</th>
                                <th class="columna">telefono</th>
                                <th class="columna" hidden>Direccion</th>
                                <th class="columna">Sexo</th>
                                <th class="columna">Tipo</th>
                                <th class="columna">Cargo</th>
                                <th class="columna">Seccion</th>
                                <th class="columna">Estacion</th>
                                <th class="columna">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                                    <?php foreach ($persona as $per) :?>

                                    <tr class="fila">
                                    
                                        <td class="columna"><?= $per['cedula']?></td>
                                        <td class="columna"><?= $per['nombre']?></td>
                                        <td class="columna"><?= $per['edad']?></td>
                                        <td class="columna" hidden><?= $per['correo']?></td>
                                        <td class="columna"><?= $per['telefono']?></td>
                                        <td class="columna" hidden><?= $per['direccion']?></td>
                                        <td class="columna"><?= $per['sexo']?></td>
                                        <td class="columna"><?= $per['tipo_persona']?></td>
                                        <td class="columna"><?= $per['cargo']?></td>
                                        <td class="columna"><?= $per['seccion']?></td>
                                        <td class="columna"><?= $per['estacion']?></td>
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalPersonaM.php");?>
                                            <div><a name='eliminar' id='eliminar' href='../controlador/ctl_persona.php?txtID=<?= $per['cedula']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                        </td>
                                    </tr>

                                   <?php endforeach; ?>
                                </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

            <form action="../controlador/ctl_persona.php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

<script src="Javascript/personaModal.js"></script>

<?php
require('../footer.php');
?>
