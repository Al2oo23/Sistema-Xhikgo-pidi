<?php
$nombrePagina = "Persona";
require('../header.php');
?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Registro de Persona</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" onsubmit="return validarPersona()">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cédula</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="cedula" placeholder="Cédula">
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
                                        <input type="text" class="form-control" id="nombre_persona" placeholder="Nombre">
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
                                        <input type="text" class="form-control" id="edad" placeholder="Edad">
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
                                        <input type="text" class="form-control" id="correo" placeholder="Correo">
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
                                        <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                                        <div class="form-control-icon">
                                            <i class="bi bi-phone"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Persona</label>
                                    <div class="position-relative">
                                        <select name="tipo-persona" class="form-select" id="tipo_persona">
                                            <option value="">Seleccione un tipo de Persona...</option>
                                            <option value="bombero">Bombero</option>
                                            <option value="usuario">Usuario</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cargo</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="cargo" placeholder="Cargo">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-video2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Dirección</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="direccion" placeholder="Dirección">
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
                                            <option value="masculino">Masculino</option>
                                            <option value="usuario">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Seccion</label>
                                    <div class="position-relative">
                                        <select name="seccion" class="form-select" id="seccion">
                                            <option value="">Seleccione una Seccion...</option>
                                            <option value="algo">Algo</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estacion</label>
                                    <div class="position-relative">
                                        <select name="estacion" class="form-select" id="estacion">
                                            <option value="">Seleccione una Estacion...</option>
                                            <option value="uno">Uno</option>
                                            <option value="dos">Dos</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>



<?php
require('../footer.php');
?>