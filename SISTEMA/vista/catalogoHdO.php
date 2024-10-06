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
        <div class="card-content">
            <div class="card-header">
                <h4 class="card-title">Historico de Operaciones</h4>
            </div>
            <!-- table hover -->
            <div class="table-responsive">
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
                <table class="table table-hover mb-0">
                    <thead>
                        <tr style="text-align: center;">
                            <th class="columna">Incidente</th>
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