   <?php 
   $sentencia = $conexion->prepare("SELECT * FROM marca");
   $sentencia->execute();
   $marca = $sentencia->fetchAll(PDO::FETCH_ASSOC);
   ?>
   
   <!-- Button trigger for login form modal -->
    <button type="button" class="btn icon btn-success" data-bs-toggle="modal" data-bs-target="#inlineForm1">
        Registrar Modelo
    </button>

        <!--login form Modal -->
        <div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content" id="modal">

            <!-- Header del Modal: ----------------------------->

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Registrar Modelo de Vehiculo</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_modelo.php" method="POST" style="text-align: left;" onsubmit="return validarModelo()">
                        <div class="modal-body">

                       
                                     <label>Marca</label>
                            <div class="position-relative">
                                         <select name="marca" class="form-select" id="marca_vehiculo">
                                         <option value="">Seleccione la Marca...</option>
                                        <?php foreach ($marca as $marc) : 
                                            $marca = $marc["nombre"];
                                        ?>

                                            <option value="<?=$marca?>"><?=$marca?></option>

                                        <?php endforeach;?>

                                        </select>
                             </div>
                
                        
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="">Modelo del Vehiculo</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="modelo_vehiculo" name="nombre" placeholder="Modelo">
                                    <div class="form-control-icon">
                                        <i class="bi bi-car-front-fill"></i>
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

                                <button type="submit" name="agregar" value="agregar" class="btn btn-primary ms-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>