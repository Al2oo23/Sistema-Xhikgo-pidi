
    <!-- Button trigger for login form modal -->
    <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
        <i class="bi bi-pencil"></i>
    </button>

        <!--login form Modal -->
        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content" id="modalM">

            <!-- Header del Modal: ----------------------------->

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Modificar Municipio</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_aseguradora.php" method="POST" style="text-align: left;" onsubmit="return validarAseguradoraM()">
                        <div class="modal-body">

                            <input type="hidden" id="id" name="id">

                            <label>Nombre de la Aseguradora:</label>
                            <div class="form-group">
                                <input type="text" value="" id="nombreM" name="nombre" class="form-control" >
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Aseguradora:</label>
                                    <div class="position-relative">
                                    <select name="tipo_aseguradora" class="form-select" id="tipoM">
                                        <option value="Vehiculo">Vehiculo</option>
                                        <option value="Hogar">Hogar</option>
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

                                <button type="submit" value="modificar" name="modificar" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Modificar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>