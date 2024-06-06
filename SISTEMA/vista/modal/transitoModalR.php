
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
                        <h4 class="modal-title" id="myModalLabel33">Registrar Incidente de Transito</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_marca.php" method="POST" style="text-align: left;" >
                        <div class="modal-body">
                        <div class="col-12">
                                <div class="form-group has-icon-left">
                                <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Parte Diaria</label>
                                    <div class="position-relative">
                                        <input type="text" id="parte_diaria" name="fecha" class="form-control" placeholder="Parte Diaria">
                                        <div class="form-control-icon">
                                            <i class="bi bi-calendar-date"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Sección</label>
                                    <div class="position-relative">
                                        <select name="seccion" name="seccion" class="form-select" id="seccion">
                                            <option value="">Seleccione la Sección...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estación</label>
                                    <div class="position-relative">
                                        <select name="estacion" name="estacion" class="form-select" id="estacion">
                                            <option value="">Seleccione la Estación...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Atención de Emergencia</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="emergencia" value="Si" id="inspeccion">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="emergencia" value="No" id="no_inspeccion">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Amerita Inspección</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="inspeccion" value="Si" id="inspeccion">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="inspeccion" value="No" id="no_inspeccion">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Incidente</label>
                                    <div class="position-relative">
                                        <select name="seccion" name="incidente" class="form-select" id="seccion">
                                            <option value="">Seleccione la Sección...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Aviso</label>
                                    <div class="position-relative">
                                        <select name="tipo_aviso" name="aviso" class="form-select" id="tipo_aviso">
                                            <option value="">Seleccione el Tipo de Aviso...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Solicitante</label>
                                    <div class="position-relative">
                                        <input type="text" id="nombre_solicitante" name="solicitante" class="form-control" placeholder="Solicitante">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Recibido por</label>
                                    <div class="position-relative">
                                        <input type="text" id="nombre_solicitante" name="recibido" class="form-control" placeholder="Solicitante">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Aviso</label>
                                    <div class="position-relative">
                                        <input type="text" id="hora_aviso" name="hora" class="form-control" placeholder="Hora de Aviso">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Salida</label>
                                    <div class="position-relative">
                                        <input type="text" id="hora_salida" name="salida" class="form-control" placeholder="Hora de Salida">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-top"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Llegada</label>
                                    <div class="position-relative">
                                        <input type="text" id="hora_llegada" name="llegada" class="form-control" placeholder="Hora de Llegada">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Regreso</label>
                                    <div class="position-relative">
                                        <input type="text" id="hora_regreso" name="regreso" class="form-control" placeholder="Hora de Regreso">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-bottom"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Vehiculo</label>
                                    <div class="position-relative">
                                        <input type="text" id="niv" name="niv" class="form-control" placeholder="Cédula del Conductor">
                                        <div class="form-control-icon">
                                            <i class="bi bi-calendar-date"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Número de Lesionados</label>
                                    <div class="position-relative">
                                        <input type="text" id="numero_lesionados" name="lesionados" class="form-control" placeholder="Número de Lesionados">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Número de Occisos</label>
                                    <div class="position-relative">
                                        <input type="text" id="numero_occisos" class="form-control" placeholder="Número de Occisos">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Observaciones</label>
                                <textarea class="form-control no-resize" id="observaciones" name="observaciones "rows="4"></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hubo Incendios</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="incendios" value="Si" id="incendios">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="incendios" value="No" id="no_incendios">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Recurso Utilizado</label>
                                    <div class="position-relative">
                                        <select name="recurso_utilizado" name="recurso" class="form-select" id="recurso_utilizado">
                                            <option value="">Seleccione el Recurso Utilizado...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cantidad de Recurso utilizado</label>
                                    <div class="position-relative">
                                        <input type="text" id="cantidad_recurso" name="cantidad" class="form-control" placeholder="Número de Recurso">
                                        <div class="form-control-icon">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe de Comisión</label>
                                    <div class="position-relative">
                                        <select name="jefe_comision" name="jefe" class="form-select" id="jefe_comision">
                                            <option value="">Seleccione al Jefe de Comisión...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Efectivo</label>
                                    <div class="position-relative">
                                        <select name="efectivo" name="efectivos" class="form-select" id="efectivo">
                                            <option value="">Seleccione el Efectivo que asistió...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Unidad</label>
                                    <div class="position-relative">
                                        <select name="unidad" name="unidad" class="form-select" id="unidad">
                                            <option value="">Seleccione la Unidad que asistió...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Autoridades Adicionales en el Sitio</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">PNB</label>
                                        <input type="checkbox" class="form-check-input check" name="pnb" value="pnb" id="check1">

                                        <label class="form-check-label ms-3" for="">GNB</label>
                                        <input type="checkbox" class="form-check-input check" name="gnb" value="gnb" id="check2">

                                        <label class="form-check-label ms-3" for="">INTT</label>
                                        <input type="checkbox" class="form-check-input check" name="intt" value="intt" id="check3">

                                        <label class="form-check-label ms-3" for="">I.N.V.I.T.Y</label>
                                        <input type="checkbox" class="form-check-input check" name="invity" value="invity" id="check4">

                                        <label class="form-check-label ms-3" for="">PC</label>
                                        <input type="checkbox" class="form-check-input check" name="pc" value="pc" id="check5">

                                        <label class="form-check-label ms-3" for="">OTROS</label>
                                        <input type="checkbox" class="form-check-input check" name="otros" value="otros" id="check6">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput1" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I PNB</label>
                                    <div class="position-relative">
                                        <input type="text" name="pnb" class="form-control" placeholder="C.I PNB">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput2" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I GNB</label>
                                    <div class="position-relative">
                                        <input type="text" name="gnb" class="form-control" placeholder="C.I GNB">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput3" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I INTT</label>
                                    <div class="position-relative">
                                        <input type="text" name="intt" class="form-control" placeholder="C.I INTT">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput4" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I INVITY</label>
                                    <div class="position-relative">
                                        <input type="text" name="invity" class="form-control" placeholder="C.I INVITY">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput5" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I PC</label>
                                    <div class="position-relative">
                                        <input type="text" name="pc" class="form-control" placeholder="C.I PC">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput6" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I OTROS</label>
                                    <div class="position-relative">
                                        <input type="text" name="otros" class="form-control" placeholder="C.I OTROS">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
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

                                <button type="submit" id="registrar" name="agregar" value="agregar" class="btn btn-primary ms-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>