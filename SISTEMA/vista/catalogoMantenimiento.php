<?php
$nombrePagina = 'Catalogo de Mantenimiento de Unidades';
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM unidad_asignada");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-9 m-auto" id="catalogo">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            
            <div class="card-body">

            
                
                            <div class="col-md-12 form-group d-flex justify-content-end">
                            
                            <a href="reportes/reporte_mantenimiento.php" class="btn btn-primary" style="text-decoration: none;
                                    color:white;">Generar Reporte</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

<div class="col-9 m-auto">
    <div class="card">
        <div class="card-content">
            

            
            
            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="columna">N° Unidad</th>
                            <th class="columna">Incidente Previo</th>
                            <th class="columna">Estado Del Mantenimiento</th>
                            <th class="columna">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultado as $mantenimiento): ?>
                            <tr class="fila">
                            <td class="columna"><?= $mantenimiento['niv'] ?></td>
                                <td class="columna"><?= $mantenimiento['tipo_incidente'] ?></td>
                                <td class="columna">Pendiente</td>

                                <td>
                                    <div class="botones" style="justify-content:space-evenly;">
                                        <div><a name="listo"
                                                href="../controlador/ctl_mantenimiento.php?txtID=<?= $mantenimiento['id']; ?>"
                                                class="btn icon btn-success"><i class="bi bi-check-lg"></i></a></div>
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