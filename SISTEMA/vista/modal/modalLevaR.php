<?php
// LLAMAR SECCION:
$sentencia = $conexion->prepare("SELECT numero FROM seccion");
$sentencia->execute();
$seccion = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR ESTACION:

$sentencia = $conexion->prepare("SELECT nombre FROM estacion");
$sentencia->execute();
$estacion = $sentencia->fetchAll(PDO::FETCH_ASSOC);

//LLAMAR AL TIPO DE AVISO:

$sentencia = $conexion->prepare("SELECT nombre FROM aviso");
$sentencia->execute();
$aviso = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL MUNICIPIO:

$sentencia = $conexion->prepare("SELECT * FROM municipio");
$sentencia->execute();
$municipios = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL NOMBRE RECURSO:

$sentencia = $conexion->prepare("SELECT * FROM recurso");
$sentencia->execute();
$n_recurso = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL TIPO DE AVISO:

$sentencia = $conexion->prepare("SELECT nombre FROM aviso");
$sentencia->execute();
$aviso = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL LUGAR:

$sentencia = $conexion->prepare("SELECT * FROM lugar");
$sentencia->execute();
$lugares = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL ESTADO DEL CADAVER:

$sentencia = $conexion->prepare("SELECT * FROM estado_cadaver");
$sentencia->execute();
$cadaver = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR UNIDAD 

$sentencia = $conexion->prepare("SELECT unidad FROM vehiculo WHERE tipo = 'Unidad'");
$sentencia->execute();
$n_unidad = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>


<!-- Button trigger for login form modal -->
<button type="button" class="btn icon btn-success" data-bs-toggle="modal" data-bs-target="#inlineForm">
        Registrar Incidente
    </button>

        <!--login form Modal -->
        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content" id="modal" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Registrar Incidente de Levantamiento</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_leva.php" method="POST" style="text-align: left;" onsubmit="return validarAbejas()">
                        <div class="modal-body">
    
                        <!--------------FECHA--------------->
                        <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Fecha</label>
                                    <div class="position-relative">
                                        <input type="text" id="parte_diaria" name="fecha" class="form-control" placeholder="Parte Diaria">
                                        <div class="form-control-icon">
                                        <i class="bi bi-calendar3"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Seccion--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Seccion de Bomberos</label>
                                    <div class="position-relative">
                                         <select name="seccion" class="form-select" id="seccion">
                                         <option value="default">Seleccione la Seccion...</option>
                                        <?php foreach ($seccion as $sec) : 
                                            $seccion = $sec["numero"];
                                        ?>
                                            <option value="<?=$seccion?>"><?=$seccion?></option>

                                        <?php endforeach;?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <!--------------Estacion--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estacion de Bomberos</label>
                                    <div class="position-relative">
                                         <select name="estacion" class="form-select" id="estacion">
                                         <option value="default">Seleccione la Estacion...</option>
                                        <?php foreach ($estacion as $estac) : 
                                            $estacion = $estac["nombre"];
                                        ?>
                                            <option value="<?=$estacion?>"><?=$estacion?></option>

                                        <?php endforeach;?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <!--------------TIPO AVISO--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Aviso</label>
                                    <div class="position-relative">
                                        <select name="tipo_aviso" class="form-select" id="tipo_aviso">
                                            <option value="">Seleccione el Tipo de Aviso...</option>
                                            <?php foreach ($aviso as $avis) : 
                                            $aviso = $avis["nombre"];
                                        ?>
                                            <option value="<?=$aviso?>"><?=$aviso?></option>

                                        <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--------------SOLICITANTE--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Solicitante</label>
                                    <div class="position-relative">
                                        <input type="text" id="solicitante" class="form-control" name="solicitante" placeholder="Cedula">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------RECIBIDOR--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Recibidor</label>
                                    <div class="position-relative">
                                        <input type="text" id="recibidor" class="form-control" name="recibidor" placeholder="Cedula">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------AVISO--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Aviso</label>
                                    <div class="position-relative">
                                        <input type="text" id="Haviso" class="form-control" name="hora_aviso" placeholder="Hora de Aviso">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------SALIDA--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Salida</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="hora_salida" id="hora_salida" placeholder="Hora de Salida">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-top"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------LLEGADA--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Llegada</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="hora_llegada" id="hora_llegada" placeholder="Hora de Llegada">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------REGRESO--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Regreso</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="hora_regreso" id="hora_regreso" placeholder="Hora de Regreso">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-bottom"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------DIRECCION--------------->
                            <div class="form-group">
                                <label for="" class="form-label">Direccion</label>
                                <textarea class="form-control no-resize" name="direccion" id="direccion" rows="4"></textarea>
                            </div>

                            <!--------------municipio--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Municipio</label>
                                    <div class="position-relative">
                                         <select name="municipio" class="form-select" id="municipio">
                                         <option value="">Seleccionar</option>
                                        <?php foreach ($municipios as $municipio) : 
                                        ?>
                                            <option value="<?=$municipio['id']?>"><?=$municipio['nombre']?></option>

                                        <?php endforeach;?>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--------------Lugar--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Lugar</label>
                                    <div class="position-relative">
                                        <select name="lugar" class="form-select" id="lugar">
                                            <option value="">Seleccione el Lugar del Incidente...</option>
                                            <?php foreach ($lugares as $lug) : 
                                        ?>
                                            <option value="<?=$lug['id']?>"><?=$lug['nombre']?></option>

                                        <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--------------Estado--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estado</label>
                                    <div class="position-relative">
                                        <select name="estado" class="form-select" id="estado">
                                            <option value="">Seleccione el Lugar del Incidente</option>
                                            <option value="Yaracuy">Yaracuy</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--------------Jefe--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe de Comision</label>
                                    <div class="position-relative">
                                        <input type="text" id="jefe" name="jefe" class="form-control" placeholder="Cedula">
                                        <div class="form-control-icon">
                                        <i class="bi bi-person-video2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Efectivos--------------->
                            <div class="col-12"> 
                                <div class="form-group has-icon-left grand-plus_Container-efectivo">
                                    <label for="">Efectivo</label>
                                    <div class="plus-container">
                                        <div class="position-relative first-sibling">
                                            <input type="text" id="efectivo" name="efectivos[]" class="form-control" placeholder="Efectivo">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-x"></i>
                                            </div>
                                        </div>
                                        <div id="plus-efectivo" class="btn icon btn-primary"><i class="bi bi-plus-lg"></i>
                                   </div>
                                </div>
                               
                            </div>
                           
                        </div>

                        <!--------------Unidad--------------->
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
                                            <option value="<?=$n_unidad?>"><?=$n_unidad?></option>

                                        <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div id="plus-unidad" class="btn icon btn-primary"><i class="bi bi-plus-lg"></i>
                                    </div>
                                </div>                             
                            </div>                          
                        </div>

                            <!--------------Occiso--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Occiso</label>
                                    <div class="position-relative">
                                        <input type="text" id="occiso" name="occiso" class="form-control" placeholder="Cedula">
                                        <div class="form-control-icon">
                                        <i class="bi bi-person-video2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Estado--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estado del Occiso al Encontrarlo</label>
                                    <div class="position-relative">
                                        <select name="estadoEncontrado" class="form-select" id="estadoEncontrado">
                                            <option value="">Seleccione</option>
                                            <?php foreach ($cadaver as $cad) :
                                                $cadaver = $cad["ecadaver"];
                                        ?>
                                            <option value="<?= $cadaver ?>"><?= $cadaver ?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--------------Desmembrado--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Desmenbrado</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="desmembrado" value="Si" id="desmembrado">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="desmembrado" value="No" id="desmembrado">
                                    </div>
                                </div>
                            </div>

                            <!--------------Partes--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Partes</label>
                                    <div class="position-relative">
                                        <input type="text" id="partes" class="form-control" name="partes" placeholder="Numero de Partes">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Causa--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Posible Causa de Muerte</label>
                                    <div class="position-relative">
                                        <input type="text" id="causa" class="form-control" name="causa" placeholder="Causa">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Putrefacto--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estado de Putrefaccion</label>
                                    <div class="position-relative">
                                        <select name="putrefacto" class="form-select" id="estadoEncontrado">
                                            <option value="">Seleccione</option>
                                            <option value="Cromatico">Cromatico</option>
                                            <option value="Enfisematoso">Enfisematoso</option>
                                            <option value="Colicuativo">Colicuativo</option>
                                            <option value="Esqueletizacion">Esqueletizacion</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--------------Autorizador--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Autorizado por</label>
                                    <div class="position-relative">
                                        <input type="text" id="autorizador" name="autorizador" class="form-control" placeholder="Cedula">
                                        <div class="form-control-icon">
                                        <i class="bi bi-person-video2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--------------Recursos--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left grand-plus_Container-recurso">
                                    <label for="">Recurso Utilizado</label>
                                    <div class="plus-container">
                                        <div class="position-relative zero-sibling">
                                            <select name="recurso[]" class="form-select" id="recurso_utilizado">
                                                <option value="">Seleccione el Recurso Utilizado...</option>
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
                                        <div id="plus-recurso" class="btn icon btn-primary"><i class="bi bi-plus-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Norte--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Norte</label>
                                    <div class="position-relative">
                                        <input type="text" id="norte" class="form-control" name="norte" placeholder="Punto de Referencia">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Sur--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Sur</label>
                                    <div class="position-relative">
                                        <input type="text" id="sur" class="form-control" name="sur" placeholder="Punto de Referencia">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Este--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Este</label>
                                    <div class="position-relative">
                                        <input type="text" id="este" class="form-control" name="este" placeholder="Punto de Referencia">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Oeste--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Oeste</label>
                                    <div class="position-relative">
                                        <input type="text" id="oeste" class="form-control" name="oeste" placeholder="Punto de Referencia">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------lluvia--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Lluvia</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="lluvia" value="Si" id="lluvia">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="lluvia" value="No" id="lluvia">
                                    </div>
                                </div>
                            </div>

                            <!--------------Pavimento Mojado--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Pavimento Mojado</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="pavimento" value="Si" id="pavimento">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="pavimento" value="No" id="pavimento">
                                    </div>
                                </div>
                            </div>

                            <!--------------ACTA--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Se Levanto Acta en el sitio</label>
                                    <div class="position-relative">
                                        <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="acta" value="Si" id="acta">

                                        <label class="form-check-label ms-3" for="">NO</label>
                                        <input type="radio" class="form-check-input" name="acta" value="No" id="acta">
                                    </div>
                                </div>
                            </div>

                            <!--------------Observacion--------------->
                            <div class="form-group">
                                <label for="" class="form-label">Observacion</label>
                                <textarea class="form-control no-resize" name="observacion" id="observacion" rows="4"></textarea>
                            </div>

                            <!--------------Jefe General--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe General</label>
                                    <div class="position-relative">
                                        <input type="text" id="general" name="general" class="form-control" placeholder="Cedula">
                                        <div class="form-control-icon">
                                        <i class="bi bi-person-video2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Jefe de Seccion--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe de Seccion</label>
                                    <div class="position-relative">
                                        <input type="text" id="jefe_seccion" name="jefe_seccion" class="form-control" placeholder="Cedula">
                                        <div class="form-control-icon">
                                        <i class="bi bi-person-video2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------Comandante--------------->
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Comandante</label>
                                    <div class="position-relative">
                                        <input type="text" id="comandante" name="comandante" class="form-control" placeholder="Cedula">
                                        <div class="form-control-icon">
                                        <i class="bi bi-person-video2"></i>
                                        </div>
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
                                            <br>
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
                                        <input type="text" name="ci_otro" class="form-control" placeholder="C.I OTROS">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
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

                                <button type="submit" id="registrar" name="registrar" value="registrar" class="btn btn-primary ms-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                          </div>
                    </form>
                </div>
            </div>
      </div>

      <script>
    var checkboxes = document.querySelectorAll('.check');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {

            
            
            var ischeck = this.checked;
            var campoInput = document.getElementById('campoInput' + checkbox.id.slice(-1));

            if (ischeck) {
                campoInput.style.display = 'block';
            } else {
                campoInput.style.display = 'none';
            }
            console.log(campoInput);
        });
    });
</script>