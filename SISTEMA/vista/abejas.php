<?php
$nombrePagina = "Registro de Accidente de Abejas";
require('../header.php');
?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Registro de Accidente de Abejas</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Parte Diaria</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Parte Diaria">
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
                                        <select name="tipo-aviso" class="form-select" id="seccion">
                                            <option value="">Seleccione la Sección...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estación</label>
                                    <div class="position-relative">
                                        <select name="tipo-aviso" class="form-select" id="estacion">
                                            <option value="">Seleccione la Estación...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Aviso</label>
                                    <div class="position-relative">
                                        <select name="tipo-aviso" class="form-select" id="tipo-aviso">
                                            <option value="">Seleccione el Tipo de Aviso...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Aviso</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Hora de Aviso">
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
                                        <input type="text" class="form-control" placeholder="Hora de Salida">
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
                                        <input type="text" class="form-control" placeholder="Hora de Llegada">
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
                                        <input type="text" class="form-control" placeholder="Hora de Regreso">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-bottom"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Localidad</label>
                                    <div class="position-relative">
                                        <select name="marca-vehiculo" class="form-select" id="localidad">
                                            <option value="">Seleccione la Localidad...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Municipio</label>
                                    <div class="position-relative">
                                        <select name="marca-vehiculo" class="form-select" id="municipio">
                                            <option value="">Seleccione el Municipio...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estado</label>
                                    <div class="position-relative">
                                        <select name="marca-vehiculo" class="form-select" id="estado">
                                            <option value="">Seleccione el Estado...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Dirección</label>
                                    <div class="position-relative">
                                        <select name="marca-vehiculo" class="form-select" id="direccion">
                                            <option value="">Seleccione la Dirección...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Ubicación del Panal</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Ubicación del Panal">
                                        <div class="form-control-icon">
                                            <i class="bi bi-calendar-date"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Recurso Utilizado</label>
                                    <div class="position-relative">
                                        <select name="marca-vehiculo" class="form-select" id="recurso">
                                            <option value="">Seleccione el Recurso Utilizado...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Propietario del Inmueble</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Propietario del Inmueble">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe de Comisión</label>
                                    <div class="position-relative">
                                        <select name="jefe-comision" class="form-select" id="jefe-comision">
                                            <option value="">Seleccione al Jefe de Comisión...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Efectivo</label>
                                    <div class="position-relative">
                                        <select name="marca-vehiculo" class="form-select" id="efectivo">
                                            <option value="">Seleccione el Efectivo que asistió...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Unidad</label>
                                    <div class="position-relative">
                                        <select name="marca-vehiculo" class="form-select" id="unidades">
                                            <option value="">Seleccione la Unidad que asistió...</option>

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
                                        <input type="text" class="form-control" placeholder="C.I PNB">
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
                                        <input type="text" class="form-control" placeholder="C.I GNB">
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
                                        <input type="text" class="form-control" placeholder="C.I INTT">
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
                                        <input type="text" class="form-control" placeholder="C.I INVITY">
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
                                        <input type="text" class="form-control" placeholder="C.I PC">
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
                                        <input type="text" class="form-control" placeholder="C.I OTROS">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php
require('../footer.php');
?>