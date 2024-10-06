<?php
$nombrePagina = "Preguntas de Seguridad";
require('../header.php');

$_SESSION["datosUsuarioR"] = $_POST;
?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Preguntas de Seguridad</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" method="POST" action="../controlador/ctl_usuario.php">
                    <div class="form-body">
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Formular Pregunta de seguridad</label>
                                    <div class="position-relative">
                                        <input type="text" id="pregunta" name="pregunta" class="form-control" placeholder="Pregunta">
                                        <div class="form-control-icon">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Respueta</label>
                                    <div class="position-relative">
                                        <input type="text" id="respuesta" name="respuesta" class="form-control" placeholder="Respuesta">
                                        <div class="form-control-icon">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" name="agregar" value="agregar" class="btn btn-primary me-1 mb-1">Registrar</button>
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