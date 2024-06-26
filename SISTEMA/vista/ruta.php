<?php
$nombrePagina = "Ruta";
require('../header.php');
?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Registro de Ruta</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" onsubmit="return validarRuta()">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Municipio</label>
                                    <div class="position-relative">
                                        <select name="tipo-aviso" class="form-select" id="municipio">
                                            <option value="">Seleccione el Municipio </option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Nombre de la Ruta</label>
                                    <div class="position-relative">
                                        <input type="text" id="nombre_ruta" class="form-control" placeholder="Nombre">
                                        <div class="form-control-icon">
                                            <i class="bi bi-sign-turn-left"></i>
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