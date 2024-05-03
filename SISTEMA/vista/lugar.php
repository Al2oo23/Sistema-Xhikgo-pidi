<?php
$nombrePagina = "Lugar";
require('../header.php');
include('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM municipio");
$sentencia->execute();
$nmunicipio = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// Para la relacion del municipio con el Estado

$municipiosEstados = array();
foreach ($nmunicipio as $row) {
    $municipiosEstados[$row["nombre"]] = $row["estado"];
}
?>

<div class="col-sm-12 col-md-8 col-lg-6 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Registro de Lugar</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" onsubmit="return validarLugar()">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="">Tipo de Lugar</label>
                                            <div class="position-relative">
                                                <select name="tipo_lugar" class="form-select" id="tipo_lugar">
                                                    <option value="">Seleccione el Tipo de Lugar...</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="">Municipio</label>
                                            <div class="position-relative">

                                                <select name="municipio" class="form-select" id="municipio">

                                                    <option value="default">Seleccione el Municipio...</option>

                                                    <?php foreach ($nmunicipio as $nmun) :
                                                        $municipio = $nmun["nombre"];
                                                    ?>

                                                        <option value="<?= $municipio ?>"><?= $municipio ?></option>

                                                    <?php endforeach; ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <label for="first-name-icon">Nombre del Lugar</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Coloque el nombre del lugar" id="nombre_lugar">
                                        <div class="form-control-icon">
                                            <i class="bi bi-postcard"></i>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="">Estado</label>
                                            <div class="position-relative">
                                                <select name="estado" class="form-select" id="estado">
                                                    <option value="">Seleccione el Estado...</option>

                                                    <!-- Para que no se repitan los Estados -->

                                                    <?php $estadosMostrados = array();
                                                    foreach ($nmunicipio as $est) :

                                                        $estado = $est["estado"];

                                                        if (!in_array($estado, $estadosMostrados)) :

                                                            $estadosMostrados[] = $estado; ?>

                                                            <option value="<?= $estado ?>"><?= $estado ?></option>

                                                    <?php endif;
                                                    endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Registrar</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    document.getElementById('municipio').addEventListener('change', function() {
        var municipioSeleccionado = this.value;

        var estadoDelMunicipio = <?php echo json_encode($municipiosEstados); ?>[municipioSeleccionado];
        var selectEstado = document.getElementById('estado');

        for (var i = 0; i < selectEstado.options.length; i++) {
            var option = selectEstado.options[i];

            if (municipioSeleccionado == "default") {
                option.style.display = 'block';
            } else {

                if (option.value == estadoDelMunicipio) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            }
        }
    });
</script>

<?php
require('../footer.php');
?>