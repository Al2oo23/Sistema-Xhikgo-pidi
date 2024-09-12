
    <?php 
        
        $sentencia = $conexion->prepare("SELECT * FROM seccion");
        $sentencia->execute();
        $secciones = $sentencia->fetchAll(PDO::FETCH_ASSOC);

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
    <button type="button" class="btn icon btn-success" data-bs-toggle="modal" data-bs-target="#inlineForm1">
        Registrar Incidente
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

                    <form action="../controlador/ctl_transito.php" method="POST" style="text-align: left;" >
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
                                         <select name="seccion" class="form-select" id="seccion">
                                         <option value="">Seleccionar</option>
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
                                         <select name="estacion" class="form-select" id="estacion">
                                         <option value="">Seleccionar</option>
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
                                         <select name="incidente" class="form-select" id="tipo">
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
                                        <select name="taviso" class="form-select" id="tipo_aviso">
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
                                        <input type="text" id="hora_aviso" name="aviso" class="form-control" placeholder="Hora de Aviso">
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
                                        <input type="text" id="niv" name="niv" class="form-control" placeholder="Serial">
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
                                        <input type="text" id="numero_occisos" name="occisos" class="form-control" placeholder="Número de Occisos">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Observaciones</label>
                                <textarea class="form-control no-resize" id="observaciones" name="observaciones" rows="4"></textarea>
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
                           
                                <div class="form-group has-icon-left grand-plus_Container-recurso">
                                    <label for="">Recurso Utilizado</label>
                                    <div class="plus-container">
                                        <div class="position-relative zero-sibling">
                                            <select name="recurso" class="form-select" id="recurso_utilizado">
                                                <option value="">Seleccione el Recurso Utilizado...</option>
                                                <?php foreach ($recursos as $recurso) : ?>

                                                    <option value="<?=$recurso["id"]?>"><?=$recurso["nombre"]?></option>

                                                <?php endforeach;?>
                                            </select>

                                            <div class="form-group has-icon-left">
                                                <label for="">Cantidad de Recurso utilizado</label>
                                                <div class="position-relative">
                                                    <input type="text" id="cantidad_recurso" name="cantidad" class="form-control" placeholder="Número de Recurso">
                                                    <div class="form-control-icon"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="plus-recurso" class="btn icon btn-primary"><i class="bi bi-pencil"></i></div>
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
                                        <input type="text" id="jefe" name="jefe" class="form-control" placeholder="Cedula del Jefe">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                           
                                <div class="form-group has-icon-left grand-plus_Container-efectivo">
                                    <label for="">Efectivo</label>
                                    <div class="plus-container">
                                        <div class="position-relative first-sibling">
                                            <input type="text" id="efectivo" name="efectivos" class="form-control" placeholder="Efectivo">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-x"></i>
                                            </div>
                                        </div>
                                        <div id="plus-efectivo" class="btn icon btn-primary"><i class="bi bi-pencil"></i></div>
                                    </div>
                                    
                                </div>
                                
                            </div>

                            <div class="col-12">
                           
                                <div class="form-group has-icon-left grand-plus_Container-unidad">
                                    <label for="">Unidad</label>
                                    <div class="plus-container">
                                        <div class="position-relative second-sibling">
                                            <select name="unidad" name="unidad" class="form-select" id="unidad">
                                                <option value="">Seleccione la Unidad que asistió</option>
                                            <?php foreach ($n_unidad as $unidad) : 
                                                $n_unidad = $unidad["unidad"];
                                            ?>
                                                <option value="<?=$n_unidad?>"><?=$n_unidad?></option>

                                            <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div id="plus-unidad" class="btn icon btn-primary"><i class="bi bi-pencil"></i></div>
                                    </div>
                                    
                                </div>
                                
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Autoridades Adicionales en el Sitio</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">PNB</label>
                                        <input type="checkbox" class="form-check-input check" value="pnb" id="check1">

                                        <label class="form-check-label ms-3" for="">GNB</label>
                                        <input type="checkbox" class="form-check-input check" value="gnb" id="check2">

                                        <label class="form-check-label ms-3" for="">INTT</label>
                                        <input type="checkbox" class="form-check-input check" value="intt" id="check3">

                                        <label class="form-check-label ms-3" for="">I.N.V.I.T.Y</label>
                                        <input type="checkbox" class="form-check-input check" value="invity" id="check4">

                                        <label class="form-check-label ms-3" for="">PC</label>
                                        <input type="checkbox" class="form-check-input check" value="pc" id="check5">

                                        <label class="form-check-label ms-3" for="">OTROS</label>
                                        <input type="checkbox" class="form-check-input check" value="otros" id="check6">
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
                                        <input type="text" name="otro" class="form-control" placeholder="C.I OTROS">
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
      <script src="Javascript/plus.js"></script>