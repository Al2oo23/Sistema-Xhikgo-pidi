<?php 

// LLAMAR MARCA VEHICULO
$sentencia = $conexion->prepare("SELECT nombre FROM marca");
$sentencia->execute();
$marca = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR MODELO VEHICULO
$sentencia = $conexion->prepare("SELECT nombre FROM modelo");
$sentencia->execute();
$modelo = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
    <!-- Button trigger for login form modal -->
    <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
        <i class="bi bi-pencil"></i>
    </button>

        <!--login form Modal -->
        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content" id="modalM" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Modificar Vehiculo</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_vehiculo.php" method="POST" style="text-align: left;" onsubmit="return validarVehiculoM()">
                        <div class="modal-body">
                        <div class="col-12">

                                <div class="form-group has-icon-left">
                                    <label for="">Numero de Identidad Vehicular (NIV):</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="niv" id="nivM" placeholder="Identidad Vehicular">
                                        <div class="form-control-icon">
                                            <i class="bi bi-postcard"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon"> Tipo de Vehiculo</label>
                                    <select class="form-select" name="tipo" id="tipoM">
                                        <option value="Unidad">Unidad</option>
                                        <option value="Particular">Vehiculo Particular</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Numero de Unidad:</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="unidad" id="nunidadM" placeholder="Numero de Unidad">
                                        <div class="form-control-icon">
                                        <i class="bi bi-car-front-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>  

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Marca:</label>
                                    <select class="form-select" name="marca" id="marcaM">
                                        <?php foreach ($marca as $marc) : 
                                        $marca = $marc["nombre"];
                                        ?>
                                        <option value="<?= $marca?>"><?= $marca?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Modelo:</label>
                                    <div class="position-relative">
                                        <select name="modelo" class="form-select" id="modeloM">
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
                                        <input type="text" class="form-control" name="serial" id="serialM" placeholder="Serial">
                                        <div class="form-control-icon">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cilindrada:</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="cilindrada" id="cilindradaM" placeholder="Cilindrada">
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
                                        <input type="text" class="form-control" name="carburante" id="carburanteM" placeholder="Carburante">
                                        <div class="form-control-icon">
                                        <i class="bi bi-car-front-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Estado del Seguro</label>
                                    <select class="form-select"  name="seguro" id="seguroM">
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Identificacion del Propietario (Cedula):</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="propietario" id="cedulaM" placeholder="Cedula">
                                        <div class="form-control-icon">
                                        <i class="bi bi-person-lines-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
            <!-- Footer del modal: ------------------------------>

                           <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cerrar</span>
                                </button>

                                <button type="submit" name="modificar" value="modificar" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Modificar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>