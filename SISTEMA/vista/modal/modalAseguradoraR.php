
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
                        <h4 class="modal-title" id="myModalLabel33">Registrar Aseguradora</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_(nombre).php" method="POST" style="text-align: left;" onsubmit="return validarAseguradora()">
                        <div class="modal-body">
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="">Nombre de la Aseguradora:</label>
                                <div class="position-relative">
                                    <input type="text" id="nombre_aseguradora" name="nombre" class="form-control" placeholder="Nombre">
                                    <div class="form-control-icon">
                                    <i class="bi bi-person-hearts"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Aseguradora:</label>
                                    <div class="position-relative">
                                        <select name="tipo_aseguradora" class="form-select" id="tipo_aseguradora">
                                            <option value="">Seleccione un tipo de Aseguradora:</option>
                                            <option value="vehiculo">Vehiculo</option>
                                            <option value="hogar">Hogar</option>
                                        </select>
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

                                <button type="submit" name="agregar" value="agregar" class="btn btn-primary ms-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>