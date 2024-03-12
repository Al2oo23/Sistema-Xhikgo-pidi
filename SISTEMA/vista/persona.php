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
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cédula</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Cédula">
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
                                        <input type="text" class="form-control" placeholder="Nombre">
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
                                        <input type="text" class="form-control" placeholder="Edad">
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
                                        <input type="text" class="form-control" placeholder="Correo">
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
                                        <input type="text" class="form-control" placeholder="Teléfono">
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
                                        <select name="tipo-persona" class="form-select" id="tipo-persona">
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
                                        <input type="text" class="form-control" placeholder="Cargo">
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
                                        <input type="text" class="form-control" placeholder="Dirección">
                                        <div class="form-control-icon">
                                            <i class="bi bi-pin-map"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Género</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Género">
                                        <div class="form-control-icon">
                                            <i class="bi bi-gender-trans"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Sección</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Sección">
                                        <div class="form-control-icon">
                                            <i class="bi bi-grid"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estación</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Estación">
                                        <div class="form-control-icon">
                                            <i class="bi bi-train-front"></i>
                                        </div>
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