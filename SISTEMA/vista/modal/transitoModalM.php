
    <?php 
        
        $sentencia = $conexion->prepare("SELECT * FROM seccion");
        $sentencia->execute();
        $secciones = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia = $conexion->prepare("SELECT * FROM estacion");
        $sentencia->execute();
        $estaciones = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia = $conexion->prepare("SELECT * FROM estacion");
        $sentencia->execute();
        $estaciones = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia = $conexion->prepare("SELECT * FROM tipo_incidente");
        $sentencia->execute();
        $tipos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia = $conexion->prepare("SELECT * FROM aviso");
        $sentencia->execute();
        $avisos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia = $conexion->prepare("SELECT * FROM recurso");
        $sentencia->execute();
        $recursos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia = $conexion->prepare("SELECT unidad FROM vehiculo");
        $sentencia->execute();
        $n_unidad = $sentencia->fetchAll(PDO::FETCH_ASSOC) 
    ?>
    
    <!-- Button trigger for login form modal -->

        <!--login form Modal -->
        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content" id="modalM" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Modificar Incidente de Transito</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_transito.php" method="POST" style="text-align: left;" >
                        <div class="modal-body">
                        <div class="col-12">
                                <div class="form-group has-icon-left">

                                <input type="hidden" id="id" name="id">

                                <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Parte Diaria</label>
                                    <div class="position-relative">
                                        <input type="text" id="fechaM" name="fecha" class="form-control" placeholder="Parte Diaria">
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
                                         <select name="seccion" class="form-select" id="seccionM">
                                        <?php foreach ($secciones as $seccion) : ?>

                                            <option value="<?=$seccion["id"]?>"><?=$seccion["numero"]?></option>

                                        <?php endforeach;?>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estación</label>
                                    <div class="position-relative">
                                         <select name="estacion" class="form-select" id="estacionM">
                                        <?php foreach ($estaciones as $estacion) : ?>

                                            <option value="<?=$estacion["id"]?>"><?=$estacion["nombre"]?></option>

                                        <?php endforeach;?>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Atención de Emergencia</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="emergencia" value="Si" id="emergencia">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="emergencia" value="No" id="no_emergencia">
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
                                         <select name="incidente" class="form-select" id="tipoM">
                                         <option value="">Seleccionar</option>
                                        <?php foreach ($tipos as $tipo) : ?>

                                            <option value="<?=$tipo["id"]?>"><?=$tipo["incidente"]?></option>

                                        <?php endforeach;?>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Aviso</label>
                                    <div class="position-relative">
                                        <select name="taviso" class="form-select" id="tavisoM">
                                            <option value="">Seleccionar</option>
                                            <?php foreach ($avisos as $aviso) : ?>

                                                <option value="<?=$aviso["id"]?>"><?=$aviso["nombre"]?></option>

                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Solicitante</label>
                                    <div class="position-relative">
                                        <input type="text" id="solicitanteM" name="solicitante" class="form-control" placeholder="Solicitante">
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
                                        <input type="text" id="recibidoM" name="recibido" class="form-control" placeholder="Solicitante">
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
                                        <input type="text" id="avisoM" name="aviso" class="form-control" placeholder="Hora de Aviso">
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
                                        <input type="text" id="salidaM" name="salida" class="form-control" placeholder="Hora de Salida">
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
                                        <input type="text" id="llegadaM" name="llegada" class="form-control" placeholder="Hora de Llegada">
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
                                        <input type="text" id="regresoM" name="regreso" class="form-control" placeholder="Hora de Regreso">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-bottom"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                           
                                <div class="form-group has-icon-left grand-plus_Container-vehiculoM">
                                    <label for="">Vehiculo</label>
                                    <div class="plus-container">
                                        <div class="position-relative forth-siblingM">
                                            <input type="text" id="niv" name="niv[]" class="form-control" placeholder="Serial">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-x"></i>
                                            </div>
                                        </div>
                                        <div id="plus-vehiculoM" class="btn icon btn-primary"><i class="bi bi-pencil"></i></div>
                                    </div>
                                    
                                </div>
                                
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Número de Lesionados</label>
                                    <div class="position-relative">
                                        <input type="text" id="lesionadosM" name="lesionados" class="form-control" placeholder="Número de Lesionados">
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
                                        <input type="text" id="occisosM" name="occisos" class="form-control" placeholder="Número de Occisos">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Observaciones</label>
                                <textarea class="form-control no-resize" id="observacionesM" name="observaciones" rows="4"></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hubo Incendios</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="incendio" value="Si" id="incendios">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="incendio" value="No" id="no_incendios">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                           
                                <div class="form-group has-icon-left grand-plus_Container-recursoM">
                                    <label for="">Recurso Utilizado</label>
                                    <div class="plus-container">
                                        <div class="position-relative zero-siblingM">
                                            <select name="recurso[]" class="form-select" id="recurso_utilizado">
                                                <?php foreach ($recursos as $recurso) : ?>

                                                    <option value="<?=$recurso["id"]?>"><?=$recurso["nombre"]?></option>

                                                <?php endforeach;?>
                                            </select>

                                            <div class="form-group has-icon-left">
                                                
                                                <div class="position-relative">
                                                    <input type="text" id="cantidad_recurso" name="cantidad[]" class="form-control" placeholder="Cantidad">
                                                    <div class="form-control-icon"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="plus-recursoM" class="btn icon btn-primary"><i class="bi bi-pencil"></i></div>
                                    </div>
                                    
                                </div>
                                
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe Comisión</label>
                                    <div class="position-relative">
                                        <input type="text" id="jefeM" name="jefe" class="form-control" placeholder="Jefe de Comisión">
                                        <div class="form-control-icon">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                           
                                <div class="form-group has-icon-left grand-plus_Container-efectivoM">
                                    <label for="">Efectivo</label>
                                    <div class="plus-container">
                                        <div class="position-relative first-siblingM">
                                            <input type="text" id="efectivo" name="efectivos[]" class="form-control" placeholder="Efectivo">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-x"></i>
                                            </div>
                                        </div>
                                        <div id="plus-efectivoM" class="btn icon btn-primary"><i class="bi bi-pencil"></i></div>
                                    </div>
                                    
                                </div>
                                
                            </div>

                            <div class="col-12">
                           
                                <div class="form-group has-icon-left grand-plus_Container-unidadM">
                                    <label for="">Unidad</label>
                                    <div class="plus-container">
                                        <div class="position-relative second-siblingM">
                                            <select name="unidad[]" class="form-select" id="unidad">
                                            <?php foreach ($n_unidad as $unidad) : 
                                                $n_unidad = $unidad["unidad"];
                                            ?>
                                                <option value="<?=$n_unidad?>"><?=$n_unidad?></option>

                                            <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div id="plus-unidadM" class="btn icon btn-primary"><i class="bi bi-pencil"></i></div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Autoridades Adicionales en el Sitio</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">PNB</label>
                                        <input type="checkbox" class="form-check-input check" value="pnb" id="check7">

                                        <label class="form-check-label ms-3" for="">GNB</label>
                                        <input type="checkbox" class="form-check-input check" value="gnb" id="check8">

                                        <label class="form-check-label ms-3" for="">INTT</label>
                                        <input type="checkbox" class="form-check-input check" value="intt" id="check9">

                                        <label class="form-check-label ms-3" for="">I.N.V.I.T.Y</label>
                                        <input type="checkbox" class="form-check-input check" value="invity" id="check10">

                                        <label class="form-check-label ms-3" for="">PC</label>
                                        <input type="checkbox" class="form-check-input check" value="pc" id="check11">

                                        <label class="form-check-label ms-3" for="">OTROS</label>
                                        <input type="checkbox" class="form-check-input check" value="otros" id="check12">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput7" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I PNB</label>
                                    <div class="position-relative">
                                        <input type="text" name="pnb" id="pnbM" class="form-control" placeholder="C.I PNB">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput8" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I GNB</label>
                                    <div class="position-relative">
                                        <input type="text" name="gnb" id="gnbM" class="form-control" placeholder="C.I GNB">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput9" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I INTT</label>
                                    <div class="position-relative">
                                        <input type="text" name="intt" id="inttM" class="form-control" placeholder="C.I INTT">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput10" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I INVITY</label>
                                    <div class="position-relative">
                                        <input type="text" name="invity" id="invityM" class="form-control" placeholder="C.I INVITY">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput11" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I PC</label>
                                    <div class="position-relative">
                                        <input type="text" name="pc" id="pcM" class="form-control" placeholder="C.I PC">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput12" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I OTROS</label>
                                    <div class="position-relative">
                                        <input type="text" name="otro" id="otroM" class="form-control" placeholder="C.I OTROS">
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

                                <button type="submit" id="modificar" name="modificar" value="modificar" class="btn btn-primary ms-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>