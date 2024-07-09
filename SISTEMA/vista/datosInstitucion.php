<?php
$nombrePagina = "Institucion";
require('../header.php');

?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Configuracion de los Datos de la Institucion </h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" method="POST" action="../controlador/ctl_institucion.php" onsubmit="return validarDatosInstitucion()">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for=""> Nombre de la Institucion </label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="nombre_institucion" placeholder="Nombre">
                                        <div class="form-control-icon">
                                            <i class="bi bi-house-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for=""> Rif </label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" id="rif" placeholder="Rif">
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-checklist"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="form-label">Descripcion</label>
                                        <textarea class="form-control no-resize" id="descripcion" rows="4"></textarea>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for=""> Logo de la Institucion </label>
                                            <div class="position-relative">
                                                <input type="file" class="basic-filepond">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="">Firma</label>
                                            <div class="position-relative">
                                                <input type="file" class="basic-filepond">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" name="editar" value="editar" class="btn btn-primary me-1 mb-1">Editar</button>
                                        </div>
                                    </div>
 <?php
require('../footer.php');
?>