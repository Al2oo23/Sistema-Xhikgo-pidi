<?php
// LLAMAR AL MUNICIPIO:

$sentencia = $conexion->prepare("SELECT nombre FROM municipio");
$sentencia->execute();
$municipio = $sentencia->fetchAll(PDO::FETCH_ASSOC);


?>
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
                        <h4 class="modal-title" id="myModalLabel33">Modificar Lugar</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_lugar.php" style="text-align: left;" method="POST">
                        <div class="modal-body">

                        <label>Nombre:</label>
                            <div class="form-group">
                                <input type="text" value="" id="nombreM" class="form-control" name="nombre">
                        </div>

                            <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="">Municipio</label>
                                            <div class="position-relative">                                               
                                                <select name="municipio" class="form-select" id="municipioM">                                                     
                                                    <?php foreach ($municipio as $mun) : 
                                                $municipio = $mun["nombre"];
                                                ?>
                                            <option value="<?=$municipio?>"><?=$municipio?></option>

                                                 <?php endforeach;?>                                              
                                                </select>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    
                            <label>Distancia:</label>
                            <div class="form-group">
                                <input type="text" value="" id="distanciaM" class="form-control" name="distancia">
                            </div>
                        </div>
                       
            <!-- Footer del modal: ------------------------------>

                           <div class="modal-footer">
                                <input type="hidden" name="id" id="id">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cerrar</span>
                                </button>

                                <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal" name="modificar" value="modificar">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Modificar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>