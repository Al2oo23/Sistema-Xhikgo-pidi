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

// LLAMAR AL MUNICIPIO:

$sentencia = $conexion->prepare("SELECT nombre FROM municipio");
$sentencia->execute();
$municipio = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL NOMBRE RECURSO:

$sentencia = $conexion->prepare("SELECT * FROM recurso");
$sentencia->execute();
$n_recurso = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL TIPO DE AVISO:

$sentencia = $conexion->prepare("SELECT nombre FROM aviso");
$sentencia->execute();
$aviso = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL LUGAR:

$sentencia = $conexion->prepare("SELECT nombre FROM lugar");
$sentencia->execute();
$lugar = $sentencia->fetchAll(PDO::FETCH_ASSOC);


// LLAMAR UNIDAD 

$sentencia = $conexion->prepare("SELECT unidad FROM vehiculo");
$sentencia->execute();
$n_unidad = $sentencia->fetchAll(PDO::FETCH_ASSOC)


?>

<!-- Button trigger for login form modal -->
<!-- <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm1">
        <i class="bi bi-pencil"></i>
    </button> -->

        <!--login form Modal -->
        <div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content" id="modalM" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Modificar Incidente de Abejas</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <!-- Contenido del Modal:--------------------------->

                    <form action="../controlador/ctl_abejas.php" method="POST" style="text-align: left;">
                        <div class="modal-body">

                        <input type="hidden" id="id" name="id">
    
                        <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Fecha</label>
                                    <div class="position-relative">
                                        <input type="text" id="fechaM" name="fecha" class="form-control" placeholder="Parte Diaria">
                                        <div class="form-control-icon">
                                        <i class="bi bi-calendar3"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Seccion de Bomberos</label>
                                    <div class="position-relative">
                                         <select name="seccion" class="form-select" id="seccionM">
                                        <?php foreach ($seccion as $sec) : 
                                            $seccion = $sec["numero"];
                                        ?>
                                            <option value="<?=$seccion?>"><?=$seccion?></option>

                                        <?php endforeach;?>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Estacion de Bomberos</label>
                                    <div class="position-relative">
                                         <select name="estacion" class="form-select" id="estacionM">
                                        <?php foreach ($estacion as $estac) : 
                                            $estacion = $estac["nombre"];
                                        ?>
                                            <option value="<?=$estacion?>"><?=$estacion?></option>

                                        <?php endforeach;?>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Aviso</label>
                                    <div class="position-relative">
                                        <select name="tipo_aviso" class="form-select" id="tavisoM">
                                            <?php foreach ($aviso as $avis) : 
                                            $aviso = $avis["nombre"];
                                        ?>
                                            <option value="<?=$aviso?>"><?=$aviso?></option>

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
                                        <i class="bi bi-person-video2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Hora de Aviso</label>
                                    <div class="position-relative">
                                        <input type="text" id="havisoM" class="form-control" name="hora_aviso" placeholder="Hora de Aviso">
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
                                        <input type="text" class="form-control" name="hora_salida" id="hsalidaM" placeholder="Hora de Salida">
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
                                        <input type="text" class="form-control" name="hora_llegada" id="hllegadaM" placeholder="Hora de Llegada">
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
                                        <input type="text" class="form-control" name="hora_regreso" id="hregresoM" placeholder="Hora de Regreso">
                                        <div class="form-control-icon">
                                            <i class="bi bi-hourglass-bottom"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Ubicacion del Panal</label>
                                    <div class="position-relative">
                                        <input type="text" id="ubicacionM" name="panal" class="form-control" placeholder="Ubicacion del Panal">
                                        <div class="form-control-icon">
                                        <i class="bi bi-droplet-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="" class="form-label">Direccion</label>
                                <textarea class="form-control no-resize" name="direccion" id="direccionM" rows="4"></textarea>
                            </div>


                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Lugar</label>
                                    <div class="position-relative">
                                        <select name="lugar" class="form-select" id="lugarM">
                                        <?php foreach ($lugar as $lug) : 
                                            $lugar = $lug["nombre"];
                                        ?>
                                            <option value="<?=$lugar?>"><?=$lugar?></option>

                                        <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Propietario del Inmueble</label>
                                    <div class="position-relative">
                                        <input type="text" id="inmuebleM" name="inmueble" class="form-control" placeholder="Propietario del Inmueble">
                                        <div class="form-control-icon">
                                        <i class="bi bi-person-video2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Jefe de Comision</label>
                                    <div class="position-relative">
                                        <input type="text" id="jefeM" name="jefe" class="form-control" placeholder="Jefe de Comision">
                                        <div class="form-control-icon">
                                        <i class="bi bi-person-video2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                        <input type="checkbox" class="form-check-input check" id="check7">

                                        <label class="form-check-label ms-3" for="">GNB</label>
                                        <input type="checkbox" class="form-check-input check" id="check8">

                                        <label class="form-check-label ms-3" for="">INTT</label>
                                        <input type="checkbox" class="form-check-input check" id="check9">
                                            
                                        <label class="form-check-label ms-3" for="">I.N.V.I.T.Y</label>
                                        <input type="checkbox" class="form-check-input check"  id="check10">
                                            <br>
                                        <label class="form-check-label ms-3" for="">PC</label>
                                        <input type="checkbox" class="form-check-input check"  id="check11">

                                        <label class="form-check-label ms-3" for="">OTROS</label>
                                        <input type="checkbox" class="form-check-input check" id="check12">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 campoInput" id="campoInput7" style="display: none;">
                                <div class="form-group has-icon-left">
                                    <label for="">C.I PNB</label>
                                    <div class="position-relative">
                                        <input type="text" name="ci_pnb" id="ci_pnb" class="form-control" placeholder="C.I PNB">
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
                                        <input type="text" name="ci_gnb" id="ci_gnb" class="form-control" placeholder="C.I GNB">
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
                                        <input type="text" name="ci_intt" id="ci_intt" class="form-control" placeholder="C.I INTT">
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
                                        <input type="text" name="ci_invity" id="ci_invity" class="form-control" placeholder="C.I INVITY">
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
                                        <input type="text" name="ci_pc" id="ci_pc" class="form-control" placeholder="C.I PC">
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
                                        <input type="text" name="ci_otro" id="ci_otro" class="form-control" placeholder="C.I OTROS">
                                        <div class="form-control-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                 <label for="">Se Levantó acta:</label>
                                <div class="position-relative">
                                    <label class="form-check-label" for="">SI</label>
                                        <input type="radio" class="form-check-input" name="acta" value="SI" id="actaM">
                                    <label class="form-check-label ms-3" for="">NO</label>
                                <input type="radio" class="form-check-input" name="acta" value="NO" id="no_actaM">
                                </div>
                            </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="form-label">Observaciones</label>
                                <textarea class="form-control no-resize" name="observaciones" id="observacionesM"
                                rows="4"></textarea>
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

      