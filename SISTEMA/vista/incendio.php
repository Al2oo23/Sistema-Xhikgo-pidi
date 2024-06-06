<?php
$nombrePagina = "Registro de Incendio";
require('../header.php');
?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Registro de Incendio</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" action="../controlador/ctl_incendio.php" method="POST" onsubmit="return validarIncendio()">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Parte Diaria</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="parte_diaria" id="parte_diaria" placeholder="Parte Diaria">
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
                                            <option value="">Seleccione la Sección...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estación</label>
                                    <div class="position-relative">
                                        <select name="estacion" class="form-select" id="estacion">
                                            <option value="">Seleccione la Estación...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Aviso</label>
                                    <div class="position-relative">
                                        <select name="tipo_aviso" class="form-select" id="tipo_aviso">
                                            <option value="">Seleccione el Tipo de Aviso...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Solicitante</label>
                                    <div class="position-relative">
                                        <input type="text" id="solicitante" name="solicitante" class="form-control" placeholder="Solicitante">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Receptor</label>
                                    <div class="position-relative">
                                        <input type="text" id="receptor" name="receptor" class="form-control" placeholder="Receptor">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Aprobador</label>
                                    <div class="position-relative">
                                        <input type="text" id="aprobador" name="aprobador" class="form-control" placeholder="Aprobador">
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
                                        <input type="text" id="hora_aviso" name="hora_aviso" class="form-control" placeholder="Hora de Aviso">
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
                                        <input type="text" id="hora_salida" name="hora_salida" class="form-control" placeholder="Hora de Salida">
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
                                        <input type="text" id="hora_llegada" name="hora_llegada" class="form-control" placeholder="Hora de Llegada">
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
                                        <input type="text" id="hora_regreso" name="hora_regreso" class="form-control" placeholder="Hora de Regreso">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-bottom"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Municipio</label>
                                    <div class="position-relative">
                                        <select name="municipio" class="form-select" id="municipio">
                                            <option value="">Seleccione el Municipio...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Localidad</label>
                                    <div class="position-relative">
                                        <select name="localidad" class="form-select" id="localidad">
                                            <option value="">Seleccione la Localidad...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Direccion</label>
                                <textarea class="form-control no-resize" id="direccion" name="direccion" rows="4"></textarea>
                            </div>


                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Material de Paredes</label>
                                    <div class="position-relative">
                                        <select name="material_paredes" class="form-select" id="material_paredes">
                                            <option value="">Seleccione el Material de las Paredes...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Material de Techo</label>
                                    <div class="position-relative">
                                        <select name="material_techo" class="form-select" id="material_techo">
                                            <option value="">Seleccione el Material de los Techos...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Material de Piso</label>
                                    <div class="position-relative">
                                        <select name="material_piso" class="form-select" id="material_piso">
                                            <option value="">Seleccione el Material de los Pisos...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Material de Ventanas</label>
                                    <div class="position-relative">
                                        <select name="material_ventanas" class="form-select" id="material_ventanas">
                                            <option value="">Seleccione el Material de las Ventanas...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Material de Puertas</label>
                                    <div class="position-relative">
                                        <select name="material_puertas" class="form-select" id="material_puertas">
                                            <option value="">Seleccione el Material de las Puertas...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Otros Materiales</label>
                                    <div class="position-relative">
                                        <select name="otros_materiales" class="form-select" id="otros_materiales">
                                            <option value="">Seleccione Otros Materiales que desee agregar...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Propietario de la Vivienda</label>
                                    <div class="position-relative">
                                        <input type="text" id="propietario" name="propietario" class="form-control" placeholder="Propietario de la Vivienda">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Valor del Inmueble</label>
                                    <div class="position-relative">
                                        <input type="text" name="valor_inmueble" class="form-control" id="valor_inmueble" placeholder="Valor del Inmueble">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Número de Residenciados</label>
                                    <div class="position-relative">
                                        <input type="text" id="residenciados" name="residenciados" class="form-control" placeholder="Número de Residenciados">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Niños</label>
                                    <div class="position-relative">
                                        <input type="text" id="ninos" name="ninos" class="form-control" placeholder="Niños">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Adolescentes</label>
                                    <div class="position-relative">
                                        <input type="text" id="adolescentes" name="adolescentes" class="form-control" placeholder="Adolescentes">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Adultos</label>
                                    <div class="position-relative">
                                        <input type="text" id="adultos" name="adultos" class="form-control" placeholder="Adultos">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Información Adicional</label>
                                <textarea class="form-control no-resize" name="info_adicional" id="informacion_adicional" rows="4"></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Asegurado</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="asegurado" value="asegurado" id="asegurado">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="asegurado" value="no-asegurado" id="no_asegurado">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Aseguradora</label>
                                    <div class="position-relative">
                                        <select name="aseguradora" class="form-select" id="aseguradora">
                                            <option value="">Seleccione la Aseguradora...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Número de Poliza de Seguro</label>
                                    <div class="position-relative">
                                        <input type="text" id="numero_poliza" name="numero_poliza" class="form-control" placeholder="Número de Poliza de Seguro">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Valor Asegurado</label>
                                    <div class="position-relative">
                                        <input type="text" id="valor_asegurado" name="valor_asegurado" class="form-control" placeholder="Valor Asegurado">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Valor Perdido</label>
                                    <div class="position-relative">
                                        <input type="text" id="valor_perdido" name="valor_perdido" class="form-control" placeholder="Valor Perdido">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Valor Salvado</label>
                                    <div class="position-relative">
                                        <input type="text" id="valor_salvado" name="valor_salvado" class="form-control" placeholder="Valor Salvado">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Fuente de ignición</label>
                                    <div class="position-relative">
                                        <input type="text" id="fuente_ignicion" name="fuente_ignicion" class="form-control" placeholder="Fuente de Ignición">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Causa de Incendio</label>
                                    <div class="position-relative">
                                        <input type="text" id="causa_incendio" name="causa_incendio" class="form-control" placeholder="Causa de Incendio">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Lugar de Inicio del Incendio</label>
                                    <div class="position-relative">
                                        <input type="text" id="lugar_inicio" name="lugar_inicio" class="form-control" placeholder="Lugar de Inicio del Incendio">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Lugar de Fin del Incendio</label>
                                    <div class="position-relative">
                                        <input type="text" id="lugar_fin" name="lugar_fin" class="form-control" placeholder="Lugar de Fin del Incendio">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Reignición</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="reignicion" value="reignicion" id="reignicion">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="reignicion" value="no-reignicion" id="no_reignicion">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Combustible</label>
                                    <div class="position-relative">
                                        <input type="text" id="tipo_combustible" name="tipo_combustible" class="form-control" placeholder="Tipo de Combustible">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Declaración del Incendio</label>
                                <textarea class="form-control no-resize" name="declaracion" id="declaracion" rows="4"></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hubo Lesionados</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="lesion" value="lesion" id="lesion">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="lesion" value="no-lesion" id="no_lesion">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Número de Lesionados</label>
                                    <div class="position-relative">
                                        <input type="text" id="numero_lesionados" name="numero_lesionados" class="form-control" placeholder="Número de Lesionados">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- AQUI DEBE IR UN FOREACH PARA QUE SE AGREGUEN TANTOS INPUTS COMO CANTIDAD DE LESIONADOS HAYA -->

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Datos del Lesionado</label>
                                    <div class="position-relative">
                                        <input type="text" id="cedula_lesionado" name="cedula_lesionado" class="form-control" placeholder="Datos de Lesionado">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-------------------------------------------------------------------------------------------------->

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Recurso Utilizado</label>
                                    <div class="position-relative">
                                        <select name="recurso_utilizado" class="form-select" id="recurso_utilizado">
                                            <option value="">Seleccione el Recurso Utilizado...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Cantidad de Recurso utilizado</label>
                                    <div class="position-relative">
                                        <input type="text" id="cantidad_recurso" name="cantidad_recurso" class="form-control" placeholder="Número de Recurso">
                                        <div class="form-control-icon">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Unidad</label>
                                    <div class="position-relative">
                                        <select name="unidad" class="form-select" id="unidad">
                                            <option value="">Seleccione la Unidad que asistió...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe de Comisión</label>
                                    <div class="position-relative">
                                        <select name="jefe_comision" class="form-select" id="jefe_comision">
                                            <option value="">Seleccione el Jefe de comision...</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Efectivo</label>
                                    <div class="position-relative">
                                        <select name="efectivo" class="form-select" id="efectivo">
                                            <option value="">Seleccione el Efectivo que asistió...</option>
                                            <option value="1">1</option>
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
                                        <input type="text" name="ci_pnb" class="form-control" placeholder="C.I PNB">
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
                                        <input type="text" name="ci_gnb" class="form-control" placeholder="C.I GNB">
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
                                        <input type="text" name="ci_intt" class="form-control" placeholder="C.I INTT">
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
                                        <input type="text" name="ci_invity" class="form-control" placeholder="C.I INVITY">
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
                                        <input type="text" name="ci_pc" class="form-control" placeholder="C.I PC">
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
                                        <input type="text" name="ci_otros" class="form-control" placeholder="C.I OTROS">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Observaciones</label>
                                <textarea class="form-control no-resize" name="observaciones" id="observaciones" rows="4"></textarea>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" name="registrar" value="registrar" id="registrar" class="btn btn-primary me-1 mb-1">Registrar</button>
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