<?php 
$nombrePagina = "Localidad";
require('../header.php');
?>



    <div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Registro de la Localidad </h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon"> Estado </label>
                                    <select class="form-select" id="estado">
                                        <option> Seleccione el Estado </option>

                                    </select>
                                </div>
                            </div>
                        </div>

        
                        <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for=""> Municipio </label>
                                    <div class="position-relative">
                                        <select name="tipo-aviso" class="form-select" id="municipio">
                                            <option value="">Seleccione el Municipio </option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="">Localidad </label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder=" Localidad ">
                                    <div class="form-control-icon">
                                        <i class="bi bi-house-heart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Registrar</button>
                            </div>
                        </div>
                </form>

<?php
require('../footer.php');
?>