<!-- Button trigger for login form modal -->
<button type="button" class="btn icon btn-success" data-bs-toggle="modal" data-bs-target="#inlineForm2">
    Criterio Vehiculo
</button>

<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" id="modal">

            <!-- Header del Modal: ----------------------------->

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Criterio Vehiculo</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <!-- Contenido del Modal:--------------------------->

            <form action="../controlador/ctl_criterio.php" method="POST" style="text-align: left;">
                <input type="hidden" name="tabla" value="vehiculo">
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Orden</label>
                            <div class="position-relative">
                                <select name="orden" class="form-select" id="">
                                    <option value="no">Ninguno</option>
                                    <option value="niv">NIV</option>
                                    <option value="tipo">Tipo</option>
                                    <option value="propiedad">Propiedad</option>
                                    <option value="unidad">N° Unidad</option>
                                    <option value="marca">Marca</option>
                                    <option value="modelo">Modelo</option>
                                    <option value="seguro">Seguro</option>
                                    <option value="carburante" hidden>Carburante</option>
                                    <option value="cedula">CI Propietario</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Campo</label>
                            <div class="position-relative">
                                <select name="campo" class="form-select" id="">
                                    <option value="no">Ninguno</option>
                                    <option value="niv">NIV</option>
                                    <option value="tipo">Tipo</option>
                                    <option value="propiedad">Propiedad</option>
                                    <option value="unidad">N° Unidad</option>
                                    <option value="marca">Marca</option>
                                    <option value="modelo">Modelo</option>
                                    <option value="seguro">Seguro</option>
                                    <option value="carburante" hidden>Carburante</option>
                                    <option value="cedula">CI Propietario</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Criterio</label>
                            <div class="position-relative">
                                <select name="criterio" class="form-select" id="">
                                    <option value="no">Ninguno</option>
                                    <option value="=">Igual que</option>
                                    <option value="!=">Diferente que</option>
                                    <option value=">">Mayor que</option>
                                    <option value="<">Menor que</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Valor</label>
                            <div class="position-relative">
                                <input type="text" id="" name="valor" class="form-control" placeholder="Valor">
                                <div class="form-control-icon">
                                    <i class="bi bi-lock"></i>
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

                    <button type="submit" value="agregar" name="agregar" class="btn btn-primary ms-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Aplicar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>