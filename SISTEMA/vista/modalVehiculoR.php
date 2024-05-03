
    <!-- Button trigger for login form modal -->
    <button type="button" class="btn icon btn-success" data-bs-toggle="modal" data-bs-target="#inlineForm1">
        Nuevo
    </button>

        <!--login form Modal -->
        <div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content" id="modal" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Registrar Vehiculo</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="#" style="text-align: left;">
                        <div class="modal-body">
                            
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon"> Tipo de Vehiculo</label>
                                    <select class="form-select" id="tipo">
                                        <option> Seleccione el Tipo De Vehiculo</option>

                                    </select>
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

                        </div>
                       
            <!-- Footer del modal: ------------------------------>

                           <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cerrar</span>
                                </button>

                                <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>