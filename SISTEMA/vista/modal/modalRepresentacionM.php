<?php
// LLAMAR SECCION
$sentencia = $conexion->prepare("SELECT numero FROM seccion");
$sentencia->execute();
$seccion = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR ESTACION

$sentencia = $conexion->prepare("SELECT nombre FROM estacion");
$sentencia->execute();
$estacion = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL TIPO DE AVISO

$sentencia = $conexion->prepare("SELECT nombre FROM aviso");
$sentencia->execute();
$aviso = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL LUGAR

$sentencia = $conexion->prepare("SELECT * FROM lugar");
$sentencia->execute();
$lugar = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL NOMBRE RECURSO

$sentencia = $conexion->prepare("SELECT * FROM recurso");
$sentencia->execute();
$n_recurso = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" id="modalM" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Modificar Representación Institucional</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <!-- Contenido del Modal:--------------------------->

            <form action="../controlador/ctl_representacion.php" method="POST" style="text-align: left;" onsubmit="return validarRepresentacionM()">
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group has-icon-left">

                        <input type="hidden" name="id" id="id">

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Fecha</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="fechaM" id="fechaM"
                                            placeholder="Fecha">
                                        <div class="form-control-icon">
                                            <i class="bi bi-calendar-date"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Sección de Bomberos</label>
                                    <div class="position-relative">
                                        <select name="seccionM" class="form-select" id="seccionM">
                                            <option value="default">Seleccione la Sección...</option>
                                            <?php foreach ($seccion as $sec):
                                                $seccion = $sec['numero'];
                                            ?>
                                                <option value="<?= $seccion ?>">
                                                    <?= $seccion ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estación de Bomberos</label>
                                    <div class="position-relative">
                                        <select name="estacionM" class="form-select" id="estacionM">
                                            <option value="default">Seleccione la Estación...</option>
                                            <?php foreach ($estacion as $estac):
                                                $estacion = $estac['nombre'];
                                            ?>
                                                <option value="<?= $estacion ?>">
                                                    <?= $estacion ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Aviso</label>
                                    <div class="position-relative">
                                        <select name="tipo_avisoM" class="form-select" id="tipo_avisoM">
                                            <option value="">Seleccione el Tipo de Aviso...</option>
                                            <?php foreach ($aviso as $avis):
                                                $aviso = $avis['nombre'];
                                            ?>
                                                <option value="<?= $aviso ?>">
                                                    <?= $aviso ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Aviso</label>
                                    <div class="position-relative">
                                        <input type="text" id="hora_avisoM" name="hora_avisoM" class="form-control"
                                            placeholder="Hora de Aviso">
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
                                        <input type="text" id="hora_salidaM" name="hora_salidaM" class="form-control"
                                            placeholder="Hora de Salida">
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
                                        <input type="text" id="hora_llegadaM" name="hora_llegadaM" class="form-control"
                                            placeholder="Hora de Llegada">
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
                                        <input type="text" id="hora_regresoM" name="hora_regresoM" class="form-control"
                                            placeholder="Hora de Regreso">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-bottom"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Causa</label>
                                    <div class="position-relative">
                                        <input type="text" id="causaM" name="causaM" class="form-control"
                                            placeholder="Causa">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-bottom"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Dirección</label>
                                <textarea class="form-control no-resize" id="direccionM" name="direccionM" rows="4"></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Número de Efectivos</label>
                                    <div class="position-relative">
                                        <input type="text" id="num_efectivosM" name="num_efectivosM" class="form-control"
                                            placeholder="Número de Efectivos">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-bottom"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Maletín de Primeros Auxilios</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="maletinM" value="SI"
                                            id="maletinM">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="maletinM" value="NO"
                                            id="no_maletinM">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Explicación</label>
                                <textarea class="form-control no-resize" id="explicacionM" name="explicacionM" rows="4"></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Autoridades Adicionales en el Sitio</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">PNB</label>
                                        <input type="checkbox" class="form-check-input check" name="pnbM" value="pnbM"
                                            id="check7">

                                        <label class="form-check-label ms-3" for="">GNB</label>
                                        <input type="checkbox" class="form-check-input check" name="gnbM" value="gnbM"
                                            id="check8">

                                        <label class="form-check-label ms-3" for="">INTT</label>
                                        <input type="checkbox" class="form-check-input check" name="inttM" value="inttM"
                                            id="check9">

                                        <label class="form-check-label ms-3" for="">I.N.V.I.T.Y</label>
                                        <input type="checkbox" class="form-check-input check" name="invityM" value="invityM"
                                            id="check10">

                                        <label class="form-check-label ms-3" for="">PC</label>
                                        <input type="checkbox" class="form-check-input check" name="pcM" value="pcM" id="check11">

                                        <label class="form-check-label ms-3" for="">OTROS</label>
                                        <input type="checkbox" class="form-check-input check" name="otrosM" value="otrosM"
                                            id="check12">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput7" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I PNB</label>
                                    <div class="position-relative">
                                        <input type="text" name="ci_pnbM" class="form-control" placeholder="C.I PNB">
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
                                        <input type="text" name="ci_gnbM" class="form-control" placeholder="C.I GNB">
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
                                        <input type="text" name="ci_inttM" class="form-control" placeholder="C.I INTT">
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
                                        <input type="text" name="ci_invityM" class="form-control" placeholder="C.I INVITY">
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
                                        <input type="text" name="ci_pcM" class="form-control" placeholder="C.I PC">
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
                                        <input type="text" name="ci_otroM" class="form-control" placeholder="C.I OTROS">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe de Comisión</label>
                                    <div class="position-relative">
                                        <select name="jefe_comisionM" class="form-select" id="jefe_comisionM">
                                            <option value="">Seleccione el Jefe de Comisión...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe General</label>
                                    <div class="position-relative">
                                        <select name="jefe_generalM" class="form-select" id="jefe_generalM">
                                            <option value="">Seleccione el Jefe General...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe Sección</label>
                                    <div class="position-relative">
                                        <select name="jefe_seccionM" class="form-select" id="jefe_seccionM">
                                            <option value="">Seleccione el Jefe Sección...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Comandante</label>
                                    <div class="position-relative">
                                        <select name="comandanteM" class="form-select" id="comandanteM">
                                            <option value="">Seleccione el Comandante...</option>
                                            <option value="1">1</option>
                                        </select>
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

                    <button type="submit" name="modificar" id="modificar" value="modificar" class="btn btn-primary ms-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Modificar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>