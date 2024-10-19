   <?php 

   ?>
   
   <!-- Button trigger for login form modal -->
    <button type="button" class="btn icon icon-left btn-secondary" data-bs-toggle="modal" data-bs-target="#inlineForm2">
    <i class="bi bi-search"></i>  Buscar Criterio
    </button>

        <!--login form Modal -->
        <div class="modal fade text-left" id="inlineForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content" id="modal">

            <!-- Header del Modal: ----------------------------->

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Criterio Municipio</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="#" method="POST" style="text-align: left;" onsubmit="return validarCriterio()">
                        <div class="modal-body">

                        <div class="col-12">
                            <div class="form-group has-icon-left">
                            <label>Seleccionar Tabla</label>
                                <div class="position-relative">
                                    <select name="tabla" class="form-select" id="tabla">
                                        <option value="">Seleccione una Tabla...</option>
                                        <option value="">Ejemplo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                                
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                            <label>Seleccionar Campo</label>
                                <div class="position-relative">
                                    <select name="campo" class="form-select" id="campo">
                                        <option value="">Seleccione un Campo...</option>
                                        <option value="">Ejemplo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                           <div class="form-group has-icon-left">
                           <label>Seleccionar Criterio</label>
                                <div class="position-relative">
                                    <select name="criterio" class="form-select" id="criterio">
                                        <option value="">Seleccione un Criterio...</option>
                                        <option value="">Ejemplo</option>
                                    </select>
                                </div>
                           </div>
                        </div>
                
                        <!-- Para colocar icono (en el div: form-group): has-icon-left -->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Valor</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="valor" name="valor" placeholder="Coloque un Valor...">
                                    <div class="form-control-icon">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group has-icon-left">
                            <label>Seleccionar Orden</label>
                                <div class="position-relative">
                                    <select name="orden" class="form-select" id="orden">
                                        <option value="">Seleccione un Orden...</option>
                                        <option value="">Ejemplo</option>
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

                                <button type="submit" name="buscar" value="buscar" class="btn btn-primary ms-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Buscar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>