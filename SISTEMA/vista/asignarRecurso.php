<?php
$nombrePagina = "Asignacion de Recurso";
require('../header.php');

?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Asignar Recurso</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" onsubmit="return validarAsignacion()">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="">Recurso</label>
                                            <div class="position-relative">
                                                <select name="jefe-comision" id="recurso_asignado" class="form-select">
                                                    <option value="">Seleccione el Recurso a Asignar...</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="first-name-icon">Cantidad del Recurso</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="cantidad_recurso" placeholder="Ingrese la Cantidad del Recurso a asignar">
                                        <div class="form-control-icon">
                                            <i class="bi bi-postcard"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Asignar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require('../footer.php');
?>