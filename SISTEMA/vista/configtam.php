<?php
$nombrePagina = "Institucion";
require ('../header.php');

?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Configuracion del tamaño de los catalogos </h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" method="POST" enctype="multipart/form-data"
                    action="../controlador/ctl_institucion.php" onsubmit="return validarDatosInstitucion()">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Alto</label>
                                    <div class="position-relative">
                                        <input type="number" name="nombre" class="form-control" id="nombre_institucion"
                                            placeholder="#">
                                        <div class="form-control-icon">
                                            <i class="bi bi-house-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="">Ancho</label>
                                        <div class="position-relative">
                                            <input type="number" name="rif" class="form-control" id="rif"
                                                placeholder="#">
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-checklist"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" name="registrar" value="registrar"
                                                class="btn btn-primary ms-1">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Editar</span>
                                            </button>
                                            <!-- <button type="submit" name="editar" value="editar" class="btn btn-primary me-1 mb-1">Editar</button> -->
                                        </div>
                                    </div>
                                    <?php
                                    require ('../footer.php');
                                    ?>