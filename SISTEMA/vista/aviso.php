<?php
$nombrePagina = "Aviso";
require('../header.php');
?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Registro del Aviso  </h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for=""> Tipo de Aviso </label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder=" Aviso">
                                    <div class="form-control-icon">
                                        <i class="bi bi-sign-stop-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Registrar</button>
                            </div>
                        </div>

<?php
require('../footer.php');
?>