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
                        <h4 class="modal-title" id="myModalLabel33">Registrar Persona</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="#" style="text-align: left;" onsubmit="return validarPersona()">
                        <div class="modal-body">
                        
                        <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cédula</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="cedula" placeholder="Cédula">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-lines-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Nombre</label>
                                    <div class=" position-relative">
                                        <input type="text" class="form-control" id="nombre_persona" placeholder="Nombre">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Edad</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="edad" placeholder="Edad">
                                        <div class="form-control-icon">
                                            <i class="bi bi-balloon-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Correo</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="correo" placeholder="Correo">
                                        <div class="form-control-icon">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Teléfono</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                                        <div class="form-control-icon">
                                            <i class="bi bi-phone"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Persona</label>
                                    <div class="position-relative">
                                        <select name="tipo-persona" class="form-select" id="tipo_persona">
                                            <option value="">Seleccione un tipo de Persona...</option>
                                            <option value="bombero">Bombero</option>
                                            <option value="usuario">Usuario</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cargo</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="cargo" placeholder="Cargo">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-video2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Dirección</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="direccion" placeholder="Dirección">
                                        <div class="form-control-icon">
                                            <i class="bi bi-pin-map"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Genero</label>
                                    <div class="position-relative">
                                        <select name="genero" class="form-select" id="genero">
                                            <option value="">Seleccione un Genero...</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="usuario">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Seccion</label>
                                    <div class="position-relative">
                                        <select name="seccion" class="form-select" id="seccion">
                                            <option value="">Seleccione una Seccion...</option>
                                            <option value="algo">Algo</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estacion</label>
                                    <div class="position-relative">
                                        <select name="estacion" class="form-select" id="estacion">
                                            <option value="">Seleccione una Estacion...</option>
                                            <option value="uno">Uno</option>
                                            <option value="dos">Dos</option>
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

                                <button type="submit" class="btn btn-primary ms-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>