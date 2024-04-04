<?php
$nombrePagina = "Reporte de Recurso Inoperativo";
require('../header.php');

?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Reporte de Recurso Inoperativo</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="">Recurso</label>
                                            <div class="position-relative">
                                                <select name="jefe-comision" class="form-select" id="recurso_inoperativo">
                                                    <option value="">Seleccione el Recurso que quedó Inoperativo...</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="first-name-icon">Nombre del Recurso</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Ingrese la Cantidad Inoperativa del Recurso" id="first-name-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-postcard"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Reportar</button>
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