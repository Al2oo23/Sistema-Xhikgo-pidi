<?php
$nombrePagina = 'Catálogo Historico de Operaciones';
require ('../header.php');
include ('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM marca");
// $sentencia->execute();
// $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
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
                            <th class="columna">Cedula</th>
                            <th class="columna">Nombre</th>
                            <th class="columna">Asistencia (Incendio)</th>
                            <th class="columna">Asistencia (Abejas)</th>
                            <th class="columna">Asistencia (Transito)</th>
                            <th class="columna">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fila">
                            <td class="columna">20588674</td>
                            <td class="columna">Felipe Perez</td>
                            <td class="columna">5</td>
                            <td class="columna">3</td>
                            <td class="columna">6</td>
                            <td class="columna">14</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
require ('../footer.php');
?>