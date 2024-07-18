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
 <button type="button" class="btn icon btn-success" data-bs-toggle="modal" data-bs-target="#inlineForm1">
       Registrar Persona
 </button>

        <!--login form Modal -->
        <div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content" id="modal" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Registrar Persona</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_persona.php" method="POST" style="text-align: left;" onsubmit="return validarPersona()">
                        <div class="modal-body">
                        
                        <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cédula</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cédula">
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
                                        <input type="text" class="form-control" name="nombre" id="nombre_persona" placeholder="Nombre">
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
                                        <input type="text" class="form-control" name="edad" id="edad" placeholder="Edad">
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
                                        <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo">
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
                                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
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
                                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección">
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
                                        <select name="genero" class="form-select" id="genero">
                                            <option value="">Seleccione un Genero...</option>
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
                                        <select name="tipo_persona" class="form-select" id="tipo_persona">
                                            <option value="">Seleccione un tipo de Persona...</option>
                                            <?php foreach ($tpersona as $tipo) : 
                                            $tpersona = $tipo["tipo"];
                                        ?>
                                            <option value="<?=$tpersona?>"><?=$tpersona?></option>

                                        <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cargo</label>
                                    <div class="position-relative">
                                    <div class="position-relative">
                                        <select name="cargo" class="form-select" id="cargo">
                                            <option value="">Seleccione un Cargo...</option>
                                            <?php foreach ($cargo as $carg) : 
                                            $cargo = $carg["nombre"];
                                        ?>
                                            <option value="<?=$cargo?>"><?=$cargo?></option>

                                        <?php endforeach;?>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Seccion</label>
                                    <div class="position-relative">
                                        <select name="seccion" class="form-select" id="seccion">
                                            <option value="">Seleccione una Seccion...</option>
                                            <?php foreach ($seccion as $secc) : 
                                            $seccion = $secc["numero"];
                                        ?>
                                            <option value="<?=$seccion?>"><?=$seccion?></option>

                                        <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estación</label>
                                    <div class="position-relative">
                                        <select name="estacion" class="form-select" id="estacion">
                                            <option value="">Seleccione una Estacion...</option>
                                            <?php foreach ($estacion as $estac) : 
                                            $estacion = $estac["nombre"];
                                        ?>
                                            <option value="<?=$estacion?>"><?=$estacion?></option>

                                        <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estado</label>
                                    <div class="position-relative">
                                         <select name="estado" class="form-select" id="estado">
                                            <option value="">Seleccione el Estado de la Persona...</option>
                                            <option value="A">Activo</option>
                                            <option value="I">Inactivo</option>                  
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

                                <button type="submit" name="registrar" value="registrar" class="btn btn-primary ms-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>