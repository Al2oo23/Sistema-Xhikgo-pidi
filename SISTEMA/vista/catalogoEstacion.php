<?php
$nombrePagina = 'Estacion';
require ('../header.php');
include ('../modelo/conexion.php');

// $sentencia = $conexion->prepare("SELECT * FROM marca");
// $sentencia->execute();
// $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-5 m-auto">
    <div class="card-content">
        <div class="card-body">
            <!-- Table with outer spacing -->
            <div class="table-responsive">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th class="columna">ID</th>
                            <th class="columna">Nombre</th>
                            <th class="columna">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-bold-500">1</td>
                            <td>aaaaaaa</td>
                            <td class="text-bold-500 d-flex">
                                <div class="flex-item">
                                    <a href="#" class="btn icon btn-primary">
                                        <i class="bi bi-pencil">
                                        </i>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="btn icon btn-danger">
                                        <i class="bi bi-x">
                                        </i>
                                    </a>
                                </div>
                            </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
require ('../footer.php');
?>