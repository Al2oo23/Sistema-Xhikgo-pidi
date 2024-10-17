<?php
$nombrePagina = 'Catálogo Historico de Operaciones';
require ('../header.php');
include ('../modelo/conexion.php');

$sentencia = $conexion->prepare("SELECT * FROM efectivo_asignado e INNER JOIN persona p ON e.cedula = p.cedula");
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
                            
                            <a href="reportes/reporte_HDO.php" class="btn btn-primary" style="text-decoration: none;
                                    color:white;">Generar Reporte</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

<div class="col-9 m-auto" id="catalogo">
    <div class="card">
        <div class="card-content">
            <div class="card-header">
                <h4 class="card-title">Historico de Operaciones</h4>
            </div>
            <!-- table hover -->
            <div class="table-responsive">

                <table class="table table-hover mb-0">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="columna">ID Incidente</th>
                            <th class="columna">Tipo de Incidente</th>
                            <th class="columna">Cedula</th>
                            <th class="columna">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($resultado as $efectivo): ?>
                            <tr class="fila">
                                <td class="columnas"><?php echo $efectivo["id_incidente"] ?></td>
                                <td class="columnas"><?php echo $efectivo["tipo_incidente"] ?></td>
                                <td class="columnas"><?php echo $efectivo["cedula"] ?></td>
                                <td class="columnas"><?php echo $efectivo["nombre"] ?></td>
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