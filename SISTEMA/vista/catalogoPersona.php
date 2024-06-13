<?php
$nombrePagina = "Catálogo de Persona";
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM persona");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form" action="reportes/reporte_persona.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="cedula_persona_buscador">Cedula</label>
                                <input type="text" id="cedula_persona_buscador" name="cedula_persona_buscador" class="form-control" placeholder="Cedula Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="nombre_persona_buscador">Nombre</label>
                                <input type="text" id="nombre_persona_buscador" name="nombre_persona_buscador" class="form-control" placeholder="Nombre Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="edad_persona_buscador">Edad</label>
                                <input type="text" id="edad_persona_buscador" name="edad_persona_buscador" class="form-control" placeholder="Edad Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="telefono_persona_buscador">Telefono</label>
                                <input type="text" id="telefono_persona_buscador" name="telefono_persona_buscador" class="form-control" placeholder="Telefono Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="sexo_persona_buscador">Sexo</label>
                                <input type="text" id="sexo_persona_buscador" name="sexo_persona_buscador" class="form-control" placeholder="Sexo Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="tipo_persona_buscador">Tipo de Persona</label>
                                <input type="text" id="tipo_persona_buscador" name="tipo_persona_buscador" class="form-control" placeholder="Tipo de Persona Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="cargo_persona_buscador">Cargo</label>
                                <input type="text" id="cargo_persona_buscador" name="cargo_persona_buscador" class="form-control" placeholder="Cargo Buscado">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="seccion_persona_buscador">Seccion</label>
                                <input type="text" id="seccion_persona_buscador" name="seccion_persona_buscador" class="form-control" placeholder="Seccion Buscada">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="estacion_persona_buscador">Estacion</label>
                                <input type="text" id="estacion_persona_buscador" name="estacion_persona_buscador" class="form-control" placeholder="Estacion Buscada">
                            </div>
                        </div>
                        <div class="col-md-12 form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Generar PDF</button>
                        </div>
                </form>
            </div>
        </div>
    </div>


    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Personas</h4>
                    <?php include("modal/modalPersonaR.php"); ?>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_persona">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columnas">Cedula</th>
                                <th class="columnas">Nombre</th>
                                <th class="columnas">Edad</th>
                                <th class="columnas" hidden>Correo</th>
                                <th class="columnas">Telefono</th>
                                <th class="columnas" hidden>Direccion</th>
                                <th class="columnas">Sexo</th>
                                <th class="columnas">Tipo</th>
                                <th class="columnas">Cargo</th>
                                <th class="columnas">Seccion</th>
                                <th class="columnas">Estacion</th>
                                <th class="columnas">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultado as $persona) : ?>
                                <tr class="fila">
                                    <td class="columnas"><?= $persona['cedula']; ?></td>
                                    <td class="columnas"><?= $persona['nombre']; ?></td>
                                    <td class="columnas"><?= $persona['edad']; ?></td>
                                    <td class="columnas" hidden><?= $persona['correo']; ?></td>
                                    <td class="columnas"><?= $persona['telefono']; ?></td>
                                    <td class="columnas" hidden><?= $persona['direccion']; ?></td>
                                    <td class="columnas"><?= $persona['sexo']; ?></td>
                                    <td class="columnas"><?= $persona['tipo_persona']; ?></td>
                                    <td class="columnas"><?= $persona['cargo']; ?></td>
                                    <td class="columnas"><?= $persona['seccion']; ?></td>
                                    <td class="columnas"><?= $persona['estacion']; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalPersonaM.php"); ?>
                                            <div><a name='eliminar' id='eliminar' href='../controlador/ctl_persona.php?txtID=<?= $persona['cedula']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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
<script src="Javascript/personaModal.js"></script>

<?php
require('../footer.php');
?>