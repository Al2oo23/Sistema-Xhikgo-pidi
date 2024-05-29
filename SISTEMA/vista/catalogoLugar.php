<?php 

$nombrePagina = 'Catálogo de Lugar';
require('../header.php');
include('../modelo/conexion.php');

$SQL = "SELECT * FROM lugar";
$preparado = $conexion->prepare($SQL);
$preparado->execute();
$lugares = $preparado->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="col-8 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Lugares</h4>
                        <?php include("modal/modalLugarR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class='fila'>Municipio</th>
                                        <th class='fila'>Nombre</th> 
                                        <th class='fila'>Distancia</th>
                                        <th class='fila'>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($lugares as $lugar){
                                        $id = $lugar['id'];
                                        $municipio = $lugar['municipio'];
                                        $nombre = $lugar['nombre'];
                                        $distancia = $lugar['distancia'];
                                        
                                        echo "
                                        <tr class='filas'>
                                            <td class='fila' style='display: none;'>$id</td>
                                            <td class='fila'>$municipio</td>
                                            <td class='fila'>$nombre</td>
                                            <td class='fila'>$distancia</td>
                                            <td>
                                            <div class='botones' style='justify-content:space-evenly;'>"; 
                                            require("modal/modalLugarM.php");
                                            echo "<div><a href='#' class='btn icon btn-danger'><i class='bi bi-x'></i></a></div></div>
                                            </td>
                                        </tr>
                                    ";
                                    }
                                    
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    <script src="Javascript/lugarModal.js"></script>

<?php 
require ('../footer.php');
?>