<?php
// LLAMAR AL MUNICIPIO:

$sentencia = $conexion->prepare("SELECT nombre FROM municipio");
$sentencia->execute();
$municipio = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// LLAMAR AL LUGAR:

$sentencia = $conexion->prepare("SELECT nombre FROM lugar");
$sentencia->execute();
$lugar = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Button trigger for login form modal -->
<button type="button" class="btn icon btn-success" data-bs-toggle="modal" data-bs-target="#inlineForm">
    Registrar Levantamiento
</button>

<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" id="modal" style="overflow-y: scroll;">

            <!-- Header del Modal: ----------------------------->

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Registrar Levantamiento</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <!-- Contenido del Modal:--------------------------->

            <form action="../controlador/ctl_levantamiento.php" method="POST" style="text-align: left;"
                onsubmit="return validarAbejas()">
                <div class="modal-body">

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Fecha</label>
                            <div class="position-relative">
                                <input type="text" id="fecha" name="fecha" class="form-control" placeholder="Fecha">
                                <div class="form-control-icon">
                                    <i class="bi bi-calendar3"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Direccion</label>
                        <textarea class="form-control no-resize" name="direccion" id="direccion" rows="4"></textarea>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Municipio</label>
                            <div class="position-relative">
                                <select name="municipio" class="form-select" id="municipio">
                                    <option value="default">Seleccione el Municipio...</option>
                                    <?php foreach ($lugar as $muni):
                                        $municipio = $muni['municipio'];
                                        ?>
                                    <option value="<?= $municipio ?>">
                                        <?= $municipio ?>
                                    </option>

                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Lugar</label>
                            <div class="position-relative">
                                <select name="lugar" class="form-select" id="lugar">
                                    <option value="">Seleccione el Lugar del Incidente...</option>
                                    <?php foreach ($lugar as $lug):
                                        $lugar = $lug["nombre"];
                                        ?>
                                        <option value="<?= $lugar ?>"><?= $lugar ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Estado Encontrado</label>
                            <div class="position-relative">
                                <input type="text" id="estado_encontrado" name="estado_encontrado" class="form-control"
                                    placeholder="Estado Encontrado">
                                <div class="form-control-icon">
                                    <i class="bi bi-hourglass-split"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="">Causa</label>
                            <div class="position-relative">
                                <input type="text" id="causa" name="causa" class="form-control"
                                    placeholder="Causa de muerte">
                                <div class="form-control-icon">
                                    <i class="bi bi-hourglass-split"></i>
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

<script>
    var checkboxes = document.querySelectorAll('.check');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {



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