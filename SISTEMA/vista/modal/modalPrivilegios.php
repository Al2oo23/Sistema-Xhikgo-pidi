
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
                        <h4 class="modal-title" id="myModalLabel33">Establecer Privilegios</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_privilegio.php" method="POST" style="text-align: left;">
                        <div class="modal-body">
                            <label>Cedula:</label>
                            <div class="form-group">
                                <input type="text" name="cedula" id="cedulaPriv" class="form-control" onfocus="this.blur()">
                            </div>
                            
                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Gestión de Institucion</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="insti" value="si" id="flexSwitchCheckChecked" checked>
                                </div>
                            </div>
                            
                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Gestión de Configuración</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="confi" value="si" id="flexSwitchCheckChecked" checked>
                                </div>
                            </div>         

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked2">Gestión de Municipios</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="municipio" value="si" id="flexSwitchCheckChecked2" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked3">Gestión de Lugares</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="lugar" value="si" id="flexSwitchCheckChecked3" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked4">Gestión de Estaciones</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="estacion" value="si" id="flexSwitchCheckChecked4" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked5">Gestión de Secciones</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="seccion" value="si" id="flexSwitchCheckChecked5" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked6">Gestión de Tipo de Persona</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="tipoPersona" value="si" id="flexSwitchCheckChecked6" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked7">Gestión de Cargos</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="cargo" value="si" id="flexSwitchCheckChecked7" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked8">Gestión de Personas</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="persona" value="si" id="flexSwitchCheckChecked8" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked9">Gestión de Usuarios</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="usuario" value="si" id="flexSwitchCheckChecked9" checked>
                                </div>
                            </div>
                            
                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked10">Gestión de Aseguradoras</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="aseguradora" value="si" id="flexSwitchCheckChecked10" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked11">Gestión de Marcas de Vehiculo</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="marcas" value="si" id="flexSwitchCheckChecked11" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked12">Gestión de Modelos de Vehiculo</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="modelo" value="si" id="flexSwitchCheckChecked12" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked13">Gestión de Vehiculos</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="vehiculo" value="si" id="flexSwitchCheckChecked13" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked14">Gestión de Mantenimiento</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="mantenimiento" value="si" id="flexSwitchCheckChecked14" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked15">Gestión de Recursos</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="recurso" value="si" id="flexSwitchCheckChecked15" checked>
                                </div>
                            </div>

                            <div class="checkbox-container">
                                <label class="form-check-label" for="flexSwitchCheckChecked17">Gestión de Incidentes</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="incidente" value="si" id="flexSwitchCheckChecked17" checked>
                                </div>
                            </div>

                        </div>
                       
            <!-- Footer del modal: ------------------------------>

                           <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cerrar</span>
                                </button>

                                <button type="submit" value="agregar" name="agregar" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Establecer</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>