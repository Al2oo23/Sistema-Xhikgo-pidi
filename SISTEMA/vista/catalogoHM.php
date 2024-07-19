<?php
$nombrePagina = 'Historial de Mantenimiento';
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM historial");
$sentencia->execute();
$historiales = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-9 m-auto" id="catalogo">
    <div class="card">
        <div class="card-content">
            <div class="card-header">
                <h4 class="card-title">Historial de Mantenimiento</h4>
            </div>
            <form>
                <div class="col-4">
                    <div class="form-group has-icon-left">
                        <div class="position-relative">
                            <select name="tamano" class="form-select" id="tamano" onchange="cambiarTamano()">
                                <option value="pequeno">Pequeño</option>
                                <option value="mediano">Mediano</option>
                                <option value="grande" selected>Grande</option>
                                <option value="extragrande">Extra Grande</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="columna">N° Unidad</th>
                            <th class="columna">Incidente Previo</th>
                            <th class="columna">Fecha</th>
                            <th class="columna">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($historiales as $historial): ?>

                            <tr class="fila">
                                <td class="columna"><?= $historial['unidad'] ?></td>
                                <td class="columna"><?= $historial['incidente'] ?></td>
                                <td class="columna"><?= $historial['fecha'] ?></td>
                                <td>

                                    <div class="botones" style="justify-content:space-evenly;">
                                        <div><a name="listo"
                                                href="../controlador/ctl_historial.php?txtID=<?= $historial['id']; ?>"
                                                class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
require ('../footer.php');
?>