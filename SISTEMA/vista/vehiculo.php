<?php
$nombrePagina = "Vehiculo";
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM marca");
$sentencia->execute();
$marca = $sentencia->fetchAll(PDO::FETCH_ASSOC);

$sentencia2 = $conexion->prepare("SELECT nombre FROM modelo");
$sentencia2->execute();
$modelo = $sentencia2->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Vehiculo (Unidad)</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" onsubmit="return validarVehiculo()">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Tipo de Vehiculo</label>
                                    <select class="form-select" id="tipo_vehiculo">
                                        <option value=""> Seleccione el Tipo De Vehiculo</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">Marca</label>
                                <select class="form-select" id="marca">
                                    <option value=""> Seleccione la Marca...</option>
                                    <option value="1">1</option>
                                    <?php foreach ($marca as $marc) :
                                        $marca = $marc["nombre"];
                                    ?>
                                        <option value="<?= $marca ?>"><?= $marca ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Modelo</label>
                            <div class="position-relative">
                                <select name="solicitante" class="form-select" id="modelo">
                                    <option value="">Seleccione el Modelo...</option>
                                    <option value="1">1</option>
                                    <?php foreach ($modelo as $model) :
                                        $modelo = $model["nombre"];
                                    ?>

                                        <option value="<?= $modelo ?>"><?= $modelo ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Serial</label>
                            <div class="position-relative">
                                <input type="text" id="serial" class="form-control" placeholder="Serial">
                                <div class="form-control-icon">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Numero de Identidad Vehicular (NIV)</label>
                            <div class="position-relative">
                                <input type="text" id="identidad_vehicular" class="form-control" placeholder="Identidad Vehicular">
                                <div class="form-control-icon">
                                    <i class="bi bi-postcard"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Cilindrada</label>
                            <div class="position-relative">
                                <input type="text" id="cilindrada" class="form-control" placeholder="Cilindrada">
                                <div class="form-control-icon">
                                    <i class="bi bi-car-front-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Carburante</label>
                            <div class="position-relative">
                                <input type="text" id="carburante" class="form-control" placeholder="Carburante">
                                <div class="form-control-icon">
                                    <i class="bi bi-car-front-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Estado del Seguro</label>
                                    <select class="form-select" id="estado_seguro">
                                        <option value=""> Seleccione el Estado del Seguro</option>
                                        <option value="activo">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Identificacion del Propietario (Cedula)</label>
                            <div class="position-relative">
                                <input type="text" id="cedula_propietario" class="form-control" placeholder="Cedula">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-lines-fill"></i>
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
            </div>
        </div>

        <?php
        require('../footer.php');
        ?>