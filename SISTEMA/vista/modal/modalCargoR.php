<!-- Button trigger for login form modal -->
<button type="button" class="btn icon btn-success" data-bs-toggle="modal" data-bs-target="#inlineForm1">
       Registrar Cargo
 </button>

        <!--login form Modal -->
        <div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content" id="modal">

            <!-- Header del Modal: ----------------------------->

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Registrar Cargo de Bomberos</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_cargo.php" method="POST" style="text-align: left;" onsubmit="return validarCargo()">
                        <div class="modal-body">
                        <div class="col-12">
                              <div class="form-group has-icon-left">
                                  <label for="first-name-icon">Nombre del Cargo</label>

                                  <div class="position-relative">
                                      <input type="text" class="form-control" name="nombre" placeholder="Coloque el nombre del cargo del bombero" id="cargo">
                                      <div class="form-control-icon">
                                      <i class="bi bi-postcard"></i>
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

                                <button type="submit" id="registrar" value="registrar" name="registrar" class="btn btn-primary ms-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>