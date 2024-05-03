<?php
$nombrePagina="Marca";
require('../header.php');

?>

<div class="col-sm-12 col-md-8 col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Registro de Marca de Vehiculos</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" onsubmit="return validarMarca()">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Nombre de la Marca</label>
                                                
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Coloque el nombre de la marca del vehiculo" id="nombre_marca">
                                                    <div class="form-control-icon">
                                                    <i class="bi bi-postcard"></i>
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

<?php
require('../footer.php');
?>