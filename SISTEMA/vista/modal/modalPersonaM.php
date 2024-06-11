<?php
// LLAMAR AL TIPO DE PERSONA
$sentencia = $conexion->prepare("SELECT tipo FROM tipo_persona");
$sentencia->execute();
$tpersona = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL CARGO
$sentencia = $conexion->prepare("SELECT nombre FROM cargo");
$sentencia->execute();
$cargo = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR A LA SECCION
$sentencia = $conexion->prepare("SELECT numero FROM seccion");
$sentencia->execute();
$seccion = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR A LA ESTACION
$sentencia = $conexion->prepare("SELECT nombre FROM estacion");
$sentencia->execute();
$estacion = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- Button trigger for login form modal -->
<button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
    <i class="bi bi-pencil"></i>
</button>

<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" id="modalM" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Modificar Persona</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <!-- Contenido del Modal:--------------------------->

            <form action="../controlador/ctl_persona.php" method="POST" style="text-align: left;" onsubmit="return validarPersonaM()">
                <div class="modal-body">

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Cédula</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="cedula" id="cedulaM" placeholder="Cédula">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-lines-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Nombre</label>
                            <div class=" position-relative">
                                <input type="text" class="form-control" name="nombre" id="nombreM" placeholder="Nombre">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Edad</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="edad" id="edadM" placeholder="Edad">
                                <div class="form-control-icon">
                                    <i class="bi bi-balloon-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Correo</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="correo" id="correoM" placeholder="Correo">
                                <div class="form-control-icon">
                                    <i class="bi bi-lock"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Teléfono</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="telefono" id="telefonoM" placeholder="Teléfono">
                                <div class="form-control-icon">
                                    <i class="bi bi-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Dirección</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="direccion" id="direccionM" placeholder="Dirección">
                                <div class="form-control-icon">
                                    <i class="bi bi-pin-map"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Genero</label>
                            <div class="position-relative">
                                <select name="genero" class="form-select" id="generoM">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Tipo de Persona</label>
                            <div class="position-relative">
                                <select name="tipo_persona" class="form-select" id="tipo_personaM">
                                    <?php foreach ($tpersona as $tipo) :
                                        $tpersona = $tipo["tipo"];
                                    ?>
                                        <option value="<?= $tpersona ?>"><?= $tpersona ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Cargo</label>
                            <div class="position-relative">
                                <div class="position-relative">
                                    <select name="cargo" class="form-select" id="cargoM">
                                        <?php foreach ($cargo as $carg) :
                                            $cargo = $carg["nombre"];
                                        ?>
                                            <option value="<?= $cargo ?>"><?= $cargo ?></option>

                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Seccion</label>
                            <div class="position-relative">
                                <select name="seccion" class="form-select" id="seccionM">
                                    <?php foreach ($seccion as $secc) :
                                        $seccion = $secc["numero"];
                                    ?>
                                        <option value="<?= $seccion ?>"><?= $seccion ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Estacion</label>
                            <div class="position-relative">
                                <select name="estacion" class="form-select" id="estacionM">
                                    <?php foreach ($estacion as $estac) :
                                        $estacion = $estac["nombre"];
                                    ?>
                                        <option value="<?= $estacion ?>"><?= $estacion ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer del modal: ------------------------------>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Cerrar</span>
                    </button>

                    <button type="submit" name="modificar" value="modificar" id="modificar" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Modificar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>