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
$n_unidad = $sentencia->fetchAll(PDO::FETCH_ASSOC)

?>

<!-- Button trigger for login form modal -->
<!-- <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
    <i class="bi bi-pencil"></i>
</button> -->

<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" id="modalM" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Modificar Registro de Incendio</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <!-- Contenido del Modal:--------------------------->
            <form action="../controlador/ctl_incendio.php" method="POST" style="text-align: left;" onsubmit="return validarIncendioM()">
                <div class="modal-body">

                    <input type="hidden" id="id" name="id">

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Parte Diaria</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="parte_diaria" id="parte_diariaM" placeholder="Parte Diaria">
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
                                <select name="seccion" class="form-select" id="seccionM">
                                    <option value="default">Seleccione la Seccion...</option>
                                    <?php foreach ($seccion as $sec) :
                                        $seccion = $sec['numero'];
                                    ?>
                                        <option value="<?= $seccion ?>"><?= $seccion ?></option>

                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Estacion de Bomberos</label>
                            <div class="position-relative">
                                <select name="estacion" class="form-select" id="estacionM">
                                    <option value="default">Seleccione la Estacion...</option>
                                    <?php foreach ($estacion as $estac) :
                                        $estacion = $estac['nombre'];
                                    ?>
                                        <option value="<?= $estacion ?>"><?= $estacion ?></option>

                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Tipo de Aviso</label>
                            <div class="position-relative">
                                <select name="tipo_aviso" class="form-select" id="tipo_avisoM">
                                    <option value="">Seleccione el Tipo de Aviso...</option>
                                    <?php foreach ($aviso as $avis) :
                                        $aviso = $avis['nombre'];
                                    ?>
                                        <option value="<?= $aviso ?>"><?= $aviso ?></option>

                                    <?php endforeach; ?>
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
                            <label for="">Receptor</label>
                            <div class="position-relative">
                                <input type="text" id="receptorM" name="receptor" class="form-control" placeholder="Receptor">
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
                                <input type="text" id="aprobadorM" name="aprobador" class="form-control" placeholder="Aprobador">
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
                                <input type="text" id="hora_avisoM" name="hora_aviso" class="form-control" placeholder="Hora de Aviso">
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
                                <input type="text" id="hora_salidaM" name="hora_salida" class="form-control" placeholder="Hora de Salida">
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
                                <input type="text" id="hora_llegadaM" name="hora_llegada" class="form-control" placeholder="Hora de Llegada">
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
                                <input type="text" id="hora_regresoM" name="hora_regreso" class="form-control" placeholder="Hora de Regreso">
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
                                <select name="municipio" class="form-select" id="municipioM">
                                    <option value="default">Seleccione el Municipio...</option>
                                    <?php foreach ($lugar as $muni) :
                                        $municipio = $muni['municipio'];
                                    ?>
                                        <option value="<?= $municipio ?>"><?= $municipio ?></option>

                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Localidad</label>
                            <div class="position-relative">
                                <select name="localidad" class="form-select" id="localidadM">
                                    <option value="default">Seleccione la Localidad...</option>
                                    <?php foreach ($lugar as $locali) :
                                        $localidad = $locali['nombre'];
                                    ?>
                                        <option value="<?= $localidad ?>"><?= $localidad ?></option>

                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Direccion</label>
                        <textarea class="form-control no-resize" id="direccionM" name="direccion" rows="4"></textarea>
                    </div>


                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Material de Paredes</label>
                            <div class="position-relative">
                                <select name="material_paredes" class="form-select" id="material_paredesM">
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
                                <select name="material_techo" class="form-select" id="material_techoM">
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
                                <select name="material_piso" class="form-select" id="material_pisoM">
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
                                <select name="material_ventanas" class="form-select" id="material_ventanasM">
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
                                <select name="material_puertas" class="form-select" id="material_puertasM">
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
                                <select name="otros_materiales" class="form-select" id="otros_materialesM">
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
                                <input type="text" id="propietarioM" name="propietario" class="form-control" placeholder="Propietario de la Vivienda">
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
                                <input type="text" name="valor_inmueble" class="form-control" id="valor_inmuebleM" placeholder="Valor del Inmueble">
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
                                <input type="text" id="residenciadosM" name="residenciados" class="form-control" placeholder="Número de Residenciados">
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
                                <input type="text" id="ninosM" name="ninos" class="form-control" placeholder="Niños">
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
                                <input type="text" id="adolescentesM" name="adolescentes" class="form-control" placeholder="Adolescentes">
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
                                <input type="text" id="adultosM" name="adultos" class="form-control" placeholder="Adultos">
                                <div class="form-control-icon">
                                    <i class="bi bi-hourglass-split"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Información Adicional</label>
                        <textarea class="form-control no-resize" name="info_adicional" id="informacion_adicionalM" rows="4"></textarea>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Asegurado</label>
                            <div class="position-relative">
                                <label class="form-check-label" for="">SI</label>
                                <input type="radio" class="form-check-input" name="asegurado" value="asegurado" id="aseguradoM">

                                <label class="form-check-label ms-3" for="">NO</label>
                                <input type="radio" class="form-check-input" name="asegurado" value="no-asegurado" id="no_aseguradoM">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Aseguradora</label>
                            <div class="position-relative">
                                <select name="aseguradora" class="form-select" id="aseguradoraM">
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
                                <input type="text" id="numero_polizaM" name="numero_poliza" class="form-control" placeholder="Número de Poliza de Seguro">
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
                                <input type="text" id="valor_aseguradoM" name="valor_asegurado" class="form-control" placeholder="Valor Asegurado">
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
                                <input type="text" id="valor_perdidoM" name="valor_perdido" class="form-control" placeholder="Valor Perdido">
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
                                <input type="text" id="valor_salvadoM" name="valor_salvado" class="form-control" placeholder="Valor Salvado">
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
                                <input type="text" id="fuente_ignicionM" name="fuente_ignicion" class="form-control" placeholder="Fuente de Ignición">
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
                                <input type="text" id="causa_incendioM" name="causa_incendio" class="form-control" placeholder="Causa de Incendio">
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
                                <input type="text" id="lugar_inicioM" name="lugar_inicio" class="form-control" placeholder="Lugar de Inicio del Incendio">
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
                                <input type="text" id="lugar_finM" name="lugar_fin" class="form-control" placeholder="Lugar de Fin del Incendio">
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
                                <input type="radio" class="form-check-input" name="reignicion" value="reignicion" id="reignicionM">

                                <label class="form-check-label ms-3" for="">NO</label>
                                <input type="radio" class="form-check-input" name="reignicion" value="no-reignicion" id="no_reignicionM">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Tipo de Combustible</label>
                            <div class="position-relative">
                                <input type="text" id="tipo_combustibleM" name="tipo_combustible" class="form-control" placeholder="Tipo de Combustible">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-x"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Declaración del Incendio</label>
                        <textarea class="form-control no-resize" name="declaracion" id="declaracionM" rows="4"></textarea>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Hubo Lesionados</label>
                            <div class="position-relative">
                                <label class="form-check-label" for="">SI</label>
                                <input type="radio" class="form-check-input" name="lesion" value="lesion" id="lesionM">

                                <label class="form-check-label ms-3" for="">NO</label>
                                <input type="radio" class="form-check-input" name="lesion" value="no-lesion" id="no_lesionM">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Número de Lesionados</label>
                            <div class="position-relative">
                                <input type="text" id="numero_lesionadosM" name="numero_lesionados" class="form-control" placeholder="Número de Lesionados">
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
                                <input type="text" id="cedula_lesionadoM" name="cedula_lesionado" class="form-control" placeholder="Datos de Lesionado">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-x"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-------------------------------------------------------------------------------------------------->

                    <div class="col-12">
                           
                           <div class="form-group has-icon-left grand-plus_Container-recursoM">
                               <label for="">Recurso Utilizado</label>
                               <div class="plus-container">
                                   <div class="position-relative zero-siblingM">
                                       <select name="recurso[]" class="form-select" id="recurso_utilizado">
                                           <?php foreach ($n_recurso as $recurso) : ?>

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
                            <label for="">Jefe de Comisión</label>
                            <div class="position-relative">
                                <select name="jefe_comision" class="form-select" id="jefe_comisionM">
                                    <option value="">Seleccione el Jefe de comision...</option>
                                    <option value="1">1</option>
                                </select>
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
                        <div class="form-group has-icon-left">
                            <label for="">Autoridades Adicionales en el Sitio</label>
                            <div class="position-relative">
                                <label class="form-check-label" for="">PNB</label>
                                <input type="checkbox" class="form-check-input check" name="pnb" value="pnb" id="check7">

                                <label class="form-check-label ms-3" for="">GNB</label>
                                <input type="checkbox" class="form-check-input check" name="gnb" value="gnb" id="check8">

                                <label class="form-check-label ms-3" for="">INTT</label>
                                <input type="checkbox" class="form-check-input check" name="intt" value="intt" id="check9">

                                <label class="form-check-label ms-3" for="">I.N.V.I.T.Y</label>
                                <input type="checkbox" class="form-check-input check" name="invity" value="invity" id="check10">

                                <label class="form-check-label ms-3" for="">PC</label>
                                <input type="checkbox" class="form-check-input check" name="pc" value="pc" id="check11">

                                <label class="form-check-label ms-3" for="">OTROS</label>
                                <input type="checkbox" class="form-check-input check" name="otros" value="otros" id="check12">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 campoInput" id="campoInput7" style="display: none;">
                        <div class="form-group has-icon-left">
                            <label for="">C.I PNB</label>
                            <div class="position-relative">
                                <input type="text" name="ci_pnb" id="ci_pnbM" class="form-control" placeholder="C.I PNB">
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
                                <input type="text" name="ci_gnb" id="ci_gnbM" class="form-control" placeholder="C.I GNB">
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
                                <input type="text" name="ci_intt" id="ci_inttM" class="form-control" placeholder="C.I INTT">
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
                                <input type="text" name="ci_invity" id="ci_invityM" class="form-control" placeholder="C.I INVITY">
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
                                <input type="text" name="ci_pc" id="ci_pcM" class="form-control" placeholder="C.I PC">
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
                                <input type="text" name="ci_otros" id="ci_otrosM" class="form-control" placeholder="C.I OTROS">
                                <div class="form-control-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Observaciones</label>
                        <textarea class="form-control no-resize" name="observaciones" id="observacionesM" rows="4"></textarea>
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
                        <span class="d-none d-sm-block">Modificar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

