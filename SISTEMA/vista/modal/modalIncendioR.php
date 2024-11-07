<?php
// LLAMAR SECCION:
$sentencia = $conexion->prepare("SELECT numero FROM seccion");
$sentencia->execute();
$seccion = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR ESTACION:

$sentencia = $conexion->prepare("SELECT nombre FROM estacion");
$sentencia->execute();
$estacion = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL TIPO DE AVISO:

$sentencia = $conexion->prepare("SELECT nombre FROM aviso");
$sentencia->execute();
$aviso = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL LUGAR:

$sentencia = $conexion->prepare("SELECT * FROM lugar");
$sentencia->execute();
$lugar = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL NOMBRE RECURSO:

$sentencia = $conexion->prepare("SELECT * FROM recurso");
$sentencia->execute();
$n_recurso = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR UNIDAD 

$sentencia = $conexion->prepare("SELECT unidad FROM vehiculo");
$sentencia->execute();
$n_unidad = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR ASEGURADORA

$sentencia = $conexion->prepare("SELECT nombre FROM seguro WHERE tipo = 'Hogar'");
$sentencia->execute();
$seguro = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>


<!-- Button trigger for login form modal -->
<button type="button" class="btn icon btn-success" data-bs-toggle="modal" data-bs-target="#inlineForm1">
    Registrar Incidente
</button>

<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" id="modal" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Registrar Incendio</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <!-- Contenido del Modal:--------------------------->
            <form action="../controlador/ctl_incendio.php" method="POST" style="text-align: left;">
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Parte Diaria</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="parte_diaria" id="parte_diaria"
                                    placeholder="Parte Diaria">
                                <div class="form-control-icon">
                                    <i class="bi bi-calendar-date"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Seccion de Bomberos</label>
                            <div class="position-relative">
                                <select name="seccion" class="form-select" id="seccion">
                                    <option value="default">Seleccione la Seccion...</option>
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
                            <label for="">Estacion de Bomberos</label>
                            <div class="position-relative">
                                <select name="estacion" class="form-select" id="estacion">
                                    <option value="default">Seleccione la Estacion...</option>
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
                                <select name="tipo_aviso" class="form-select" id="tipo_aviso">
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
                            <label for="">Solicitante</label>
                            <div class="position-relative">
                                <input type="text" id="solicitante" name="solicitante" class="form-control"
                                    placeholder="Solicitante">
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
                                <input type="text" id="receptor" name="receptor" class="form-control"
                                    placeholder="Receptor">
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
                                <input type="text" id="aprobador" name="aprobador" class="form-control"
                                    placeholder="Aprobador">
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
                                <input type="text" id="hora_aviso" name="hora_aviso" class="form-control"
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
                                <input type="text" id="hora_salida" name="hora_salida" class="form-control"
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
                                <input type="text" id="hora_llegada" name="hora_llegada" class="form-control"
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
                                <input type="text" id="hora_regreso" name="hora_regreso" class="form-control"
                                    placeholder="Hora de Regreso">
                                <div class="form-control-icon">
                                    <i class="bi bi-hourglass-bottom"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Lugar</label>
                            <div class="position-relative">
                                <select name="lugar" class="form-select" id="lugar">
                                    <option value="default">Seleccione El Lugar...</option>
                                    <?php foreach ($lugar as $lug):
                                        $lugar = $lug['nombre'];
                                    ?>
                                        <option value="<?= $lugar ?>">
                                            <?= $lugar ?>
                                        </option>

                                    <?php endforeach; ?>

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
                                    <option value="bloques">Bloques de Concreto</option>
                                    <option value="ladrillos">Ladrillos de Arcilla</option>
                                    <option value="paneles">Paneles Prefabricados</option>
                                    <option value="yeso">Yeso</option>
                                    <option value="madera">Madera</option>
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
                                    <option value="laminas">Láminas de Zinc o Acerolit</option>
                                    <option value="tejas_arcilla">Tejas de Arcilla</option>
                                    <option value="concreto_armado">Concreto Armado</option>
                                    <option value="tejas_asfalticas">Tejas Asfálticas</option>
                                    <option value="policarbonato">Policarbonato</option>
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
                                    <option value="ceramica">Cerámica</option>
                                    <option value="porcelanato">Porcelanato</option>
                                    <option value="granito">Granito</option>
                                    <option value="cemento_pulido">Cemento Pulido</option>
                                    <option value="madera">Madera</option>
                                    <option value="marmol">Mármol</option>
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
                                    <option value="aluminio">Aluminio</option>
                                    <option value="pvc">PVC</option>
                                    <option value="hierro">Hierro</option>
                                    <option value="vidrio">Vidrio</option>
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
                                    <option value="madera">Madera</option>
                                    <option value="metal">Metal (Hierro o Acero)</option>
                                    <option value="pvc">PVC</option>
                                    <option value="vidrio_templado">Vidrio Templado</option>
                                    <option value="aluminio">Aluminio</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Propietario de la Vivienda</label>
                            <div class="position-relative">
                                <input type="text" id="propietario" name="propietario" class="form-control"
                                    placeholder="Propietario de la Vivienda">
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
                                <input type="text" name="valor_inmueble" class="form-control" id="valor_inmueble"
                                    placeholder="Valor del Inmueble">
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
                                <input type="text" id="residenciados" name="residenciados" class="form-control"
                                    placeholder="Número de Residenciados">
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
                                <input type="text" id="adolescentes" name="adolescentes" class="form-control"
                                    placeholder="Adolescentes">
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
                                <input type="text" id="adultos" name="adultos" class="form-control"
                                    placeholder="Adultos">
                                <div class="form-control-icon">
                                    <i class="bi bi-hourglass-split"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Información Adicional</label>
                        <textarea class="form-control no-resize" name="info_adicional" id="informacion_adicional"
                            rows="4"></textarea>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Asegurado</label>
                            <div class="position-relative">
                                <label class="form-check-label" for="">SI</label>
                                <input type="radio" class="form-check-input" name="asegurado" value="asegurado"
                                    id="asegurado" onclick="ocultarInput(true)">

                                <label class="form-check-label ms-3" for="">NO</label>
                                <input type="radio" class="form-check-input" name="asegurado" value="no-asegurado"
                                    id="no_asegurado" onclick="ocultarInput(false)">
                            </div>
                        </div>
                    </div>
                    <div id="inputAsegurado" style="display: none;">
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="">Aseguradora</label>
                                <div class="position-relative">
                                    <select name="aseguradora" class="form-select" id="aseguradora">
                                        <option value="">Seleccione El Seguro del Hogar...</option>
                                        <?php foreach ($seguro as $segu):
                                            $seguro = $segu['nombre'];
                                        ?>
                                            <option value="<?= $seguro ?>">
                                                <?= $seguro ?>
                                            </option>

                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="">Número de Poliza de Seguro</label>
                                <div class="position-relative">
                                    <input type="text" id="numero_poliza" name="numero_poliza" class="form-control"
                                        placeholder="Número de Poliza de Seguro">
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
                                    <input type="text" id="valor_asegurado" name="valor_asegurado" class="form-control"
                                        placeholder="Valor Asegurado">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person-x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Valor Perdido</label>
                            <div class="position-relative">
                                <input type="text" id="valor_perdido" name="valor_perdido" class="form-control"
                                    placeholder="Valor Perdido">
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
                                <input type="text" id="valor_salvado" name="valor_salvado" class="form-control"
                                    placeholder="Valor Salvado">
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
                                <input type="text" id="fuente_ignicion" name="fuente_ignicion" class="form-control"
                                    placeholder="Fuente de Ignición">
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
                                <input type="text" id="causa_incendio" name="causa_incendio" class="form-control"
                                    placeholder="Causa de Incendio">
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
                                <input type="text" id="lugar_inicio" name="lugar_inicio" class="form-control"
                                    placeholder="Lugar de Inicio del Incendio">
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
                                <input type="text" id="lugar_fin" name="lugar_fin" class="form-control"
                                    placeholder="Lugar de Fin del Incendio">
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
                                <input type="radio" class="form-check-input" name="reignicion" value="reignicion"
                                    id="reignicion">

                                <label class="form-check-label ms-3" for="">NO</label>
                                <input type="radio" class="form-check-input" name="reignicion" value="no-reignicion"
                                    id="no_reignicion">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Tipo de Combustible</label>
                            <div class="position-relative">
                                <input type="text" id="tipo_combustible" name="tipo_combustible" class="form-control"
                                    placeholder="Tipo de Combustible">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-x"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Declaración del Incendio</label>
                        <textarea class="form-control no-resize" name="declaracion" id="declaracion"
                            rows="4"></textarea>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Hubo Lesionados</label>
                            <div class="position-relative">
                                <label class="form-check-label" for="">SI</label>
                                <input type="radio" class="form-check-input" name="lesion" value="lesion" id="lesion" onclick="ocultarInput2(true)">

                                <label class="form-check-label ms-3" for="">NO</label>
                                <input type="radio" class="form-check-input" name="lesion" value="no-lesion"
                                    id="no_lesion" onclick="ocultarInput2(false)">
                            </div>
                        </div>
                    </div>

                    <div class="col-12" id="inputLesionado" style="display: none;">
                        <div class="form-group has-icon-left">
                            <label for="">Número de Lesionados</label>
                            <div class="position-relative">
                                <input type="text" id="numero_lesionados" name="numero_lesionados" class="form-control"
                                    placeholder="Número de Lesionados">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-x"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-------------------------------------------------------------------------------------------------->

                    <div class="col-12">

                        <div class="form-group has-icon-left grand-plus_Container-recurso">
                            <label for="">Recurso Utilizado</label>
                            <div class="plus-container">
                                <div class="position-relative zero-sibling">
                                    <select name="recurso[]" class="form-select" id="recurso_utilizado">
                                        <option value="">Seleccione el Recurso Utilizado...</option>
                                        <?php foreach ($n_recurso as $recurso) : ?>

                                            <option value="<?= $recurso["id"] ?>"><?= $recurso["nombre"] ?></option>

                                        <?php endforeach; ?>
                                    </select>

                                    <div class="form-group has-icon-left">

                                        <div class="position-relative">
                                            <input type="text" id="cantidad_recurso" name="cantidad[]" class="form-control" placeholder="Cantidad">
                                            <div class="form-control-icon"></div>
                                        </div>
                                    </div>

                                </div>
                                <div id="plus-recurso" class="btn icon btn-primary"><i class="bi bi-plus-lg"></i></div>
                            </div>

                        </div>

                    </div>

                    <div class="col-12">

                        <div class="form-group has-icon-left grand-plus_Container-unidad">
                            <label for="">Unidad</label>
                            <div class="plus-container">
                                <div class="position-relative second-sibling">
                                    <select name="unidad[]" class="form-select" id="unidad">
                                        <option value="">Seleccione la Unidad que asistió</option>
                                        <?php foreach ($n_unidad as $unidad) :
                                            $n_unidad = $unidad["unidad"];
                                        ?>
                                            <option value="<?= $n_unidad ?>"><?= $n_unidad ?></option>

                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div id="plus-unidad" class="btn icon btn-primary"><i class="bi bi-plus-lg"></i></div>
                            </div>

                        </div>

                    </div>

                    <div class="form-group has-icon-left grand-plus_Container-efectivo">
                        <label for="">Efectivo</label>
                        <div class="plus-container">
                            <div class="position-relative first-sibling">
                                <input type="text" id="efectivo" name="efectivos[]" class="form-control" placeholder="Efectivo">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-x"></i>
                                </div>
                            </div>
                            <div id="plus-efectivo" class="btn icon btn-primary"><i class="bi bi-plus-lg"></i></div>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Autoridades Adicionales en el Sitio</label>
                            <div class="position-relative">
                                <label class="form-check-label" for="">PNB</label>
                                <input type="checkbox" class="form-check-input check" name="pnb" value="pnb"
                                    id="check1">

                                <label class="form-check-label ms-3" for="">GNB</label>
                                <input type="checkbox" class="form-check-input check" name="gnb" value="gnb"
                                    id="check2">

                                <label class="form-check-label ms-3" for="">INTT</label>
                                <input type="checkbox" class="form-check-input check" name="intt" value="intt"
                                    id="check3">

                                <label class="form-check-label ms-3" for="">I.N.V.I.T.Y</label>
                                <input type="checkbox" class="form-check-input check" name="invity" value="invity"
                                    id="check4">

                                <label class="form-check-label ms-3" for="">PC</label>
                                <input type="checkbox" class="form-check-input check" name="pc" value="pc" id="check5">

                                <label class="form-check-label ms-3" for="">OTROS</label>
                                <input type="checkbox" class="form-check-input check" name="otros" value="otros"
                                    id="check6">
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

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Jefe de Comisión</label>
                            <div class="position-relative">
                                <input type="text" id="jefe_comision" name="jefe_comision" class="form-control"
                                    placeholder="Ingrese la Cedula del Jefe de Comision">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-video2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Jefe General</label>
                            <div class="position-relative">
                                <input type="text" id="jefe_general" name="jefe_general" class="form-control"
                                    placeholder="Ingrese la Cedula del Jefe General">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-video2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Jefe de Sección</label>
                            <div class="position-relative">
                                <input type="text" id="jefe_seccion" name="jefe_seccion" class="form-control"
                                    placeholder="Ingrese la Cedula del Jefe de Sección">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-video2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Comandante</label>
                            <div class="position-relative">
                                <input type="text" id="comandante" name="comandante" class="form-control"
                                    placeholder="Ingrese la Cedula del Comandante">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-video2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Se Levantó Acta:</label>
                            <div class="position-relative">
                                <label class="form-check-label" for="">SI</label>
                                <input type="radio" class="form-check-input" name="acta" value="SI"
                                    id="acta">

                                <label class="form-check-label ms-3" for="">NO</label>
                                <input type="radio" class="form-check-input" name="acta" value="NO"
                                    id="no_acta">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Observaciones</label>
                        <textarea class="form-control no-resize" name="observaciones" id="observaciones"
                            rows="4"></textarea>
                    </div>
                </div>

                <!-- Footer del modal: ------------------------------>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Cerrar</span>
                    </button>

                    <button type="submit" id="registrar" name="registrar" value="registrar"
                        class="btn btn-primary ms-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Registrar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>