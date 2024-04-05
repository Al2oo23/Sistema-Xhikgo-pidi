<?php
$nombrePagina = "Registro de Usuario";
require('../header.php');
?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Registro de Usuario</h4>
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
                                    <label for="">Tipo de Usuario</label>
                                    <div class="position-relative">
                                        <select name="tipo-persona" class="form-select" id="tipo-usuario">
                                            <option value="">Seleccione un tipo de Usuario</option>
                                            <option value="bombero">Supervisor</option>
                                            <option value="usuario">Administrador</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Nombre</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Nombre de Usuario">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Clave</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Clave de Usuario">
                                        <div class="form-control-icon">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Repetir Clave</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Repetir la Clave del Usuario">
                                        <div class="form-control-icon">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Registrar</button>
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