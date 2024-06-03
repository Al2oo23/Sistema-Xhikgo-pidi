
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

                    <form action="../controlador/ctl_(nombre).php" method="POST" style="text-align: left;">
                        <div class="modal-body">
                            <label>Numero de Identidad Vehicular (NIV):</label>
                            <div class="form-group">
                                <input type="text" value="" name="niv" disabled id="nivM" class="form-control" >
                            </div>
                            
                            <label>Tipo de Vehiculo:</label>
                            <div class="form-group">
                                <input type="text" value="" name="tipo_vehiculo" id="tvehiculoM" class="form-control" >
                            </div>   

                            <label>Numero de Unidad:</label>
                            <div class="form-group">
                                <input type="text" value="" name="nunidad" id="nunidadM" class="form-control" >
                            </div>   

                            <label>Marca:</label>
                            <div class="form-group">
                                <input type="text" value="" name="marca" id="marcaM" class="form-control" >
                            </div>

                            <label >Modelo</label>
                           <div class="form-group">
                               <input type="text" value="" name="modelo" id="modeloM" class="form-control">
                           </div>

                           <label>Serial:</label>
                            <div class="form-group">
                                <input type="text" value="" name="serial" id="serialM" class="form-control">
                            </div>

                            <label >Cilindrada</label>
                           <div class="form-group">
                               <input type="text" value="" name="cilindrada" id="cilindroM" class="form-control">
                           </div>

                           <label>Carburante:</label>
                           <div class="form-group">
                               <input type="text" value="" name="carburante" id="carburanteM" class="form-control">
                           </div>

                           <label>Seguro:</label>
                            <div class="form-group">
                                <input type="text" value="" name="estado_seguro" id="seguroM" class="form-control">
                            </div>

                            <label >CI. del Propietario:</label>
                           <div class="form-group">
                               <input type="text" value="" name="cedula_propietario" id="cedulaM" class="form-control">
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