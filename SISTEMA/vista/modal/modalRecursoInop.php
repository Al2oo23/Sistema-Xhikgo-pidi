<?php 
    // LLAMAR AL RECURSO
   $sentencia = $conexion->prepare("SELECT nombre FROM recurso");
   $sentencia->execute();
   $recurso = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Button trigger for login form modal -->
<button type="button" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#inlineForm3">
    Reportar Recurso
</button>

<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" id="modal">

            <!-- Header del Modal: ----------------------------->

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Reportar Recurso</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <!-- Contenido del Modal:--------------------------->

            <form action="../controlador/ctl_recurso.php" method="POST" style="text-align: left;" onsubmit="return validarRecursoInoperativo()">
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group has-icon-left">

                        <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="">Recurso</label>
                                            <div class="position-relative">
                                                <select name="recurso_inoperativo" class="form-select" id="recurso_inoperativo">
                                                    <option value="">Seleccione el Recurso que quedó Inoperativo...</option>
                                                    <?php foreach ($recurso as $nombre) : 
                                                        $recurso = $nombre["nombre"];
                                                     ?>

                                                     <option value="<?=$recurso?>"><?=$recurso?></option>

                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="first-name-icon">Cantidad del Recurso</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="cantidad_recurso" placeholder="Ingrese la Cantidad Inoperativa del Recurso" id="cantidad_recursoI">
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

                    <button type="submit" name="reportar" id="reportar" value="reportar" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Reportar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>