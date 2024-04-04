<?php
$nombrePagina = "Mantenimiento de Unidades";
require('../header.php');
?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Registro de Mantenimiento de Unidades</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                            <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="">ID De Mantenimiento</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="1">
                                    <div class="form-control-icon">
                                    <i class="bi bi-sign-turn-left"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="">Numero de Unidad</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Numero de Unidad">
                                    <div class="form-control-icon">
                                    <i class="bi bi-car-front-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="">Incidente Previo </label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Incidente Previo">
                                    <div class="form-control-icon">
                                    <i class="bi bi-sign-turn-left"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group has-icon-left">
                                    <label for="">Fecha</label>
                                    <div class="position-relative">
                                        <input type="date" class="form-control" placeholder="Parte Diaria">
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="">Estado de Mantenimiento</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Estado de Mantenimiento">
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