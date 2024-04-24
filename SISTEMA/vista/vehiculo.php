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
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon"> Tipo de Vehiculo</label>
                                    <select class="form-select" id="tipo">
                                        <option> Seleccione el Tipo De Vehiculo</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Marca:</label>
                                    <select class="form-select" id="marca">
                                        <option> Seleccione la Marca...</option>
                                        <?php foreach ($marca as $marc) : 
                                        $marca = $marc["nombre"];
                                        ?>
                                        <option value="<?= $marca?>"><?= $marca?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Modelo:</label>
                                    <div class="position-relative">
                                        <select name="solicitante" class="form-select" id="modelo">
                                            <option value="">Seleccione el Modelo...</option>

                                            <?php foreach ($modelo as $model) : 
                                            $modelo = $model["nombre"];
                                            ?>

                                            <option value="<?= $modelo?>"><?= $modelo?></option>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Serial:</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Serial">
                                        <div class="form-control-icon">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Numero de Identidad Vehicular (NIV):</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Identidad Vehicular">
                                        <div class="form-control-icon">
                                            <i class="bi bi-postcard"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cilindrada:</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Cilindrada">
                                        <div class="form-control-icon">
                                        <i class="bi bi-car-front-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Carburante:</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Carburante">
                                        <div class="form-control-icon">
                                        <i class="bi bi-car-front-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estado del Seguro:</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Estado del Seguro">
                                        <div class="form-control-icon">
                                            <i class="bi bi-postcard"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Identificacion del Propietario (Cedula):</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Cedula">
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








