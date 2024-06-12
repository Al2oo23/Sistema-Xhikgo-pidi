<?php 
session_start();
$nombrePagina = 'Catálogo Incidentes de Transito';
require('../header.php');
include('../modelo/conexion.php');

$SQL = "SELECT * FROM transito";
$preparado = $conexion->prepare($SQL);
$preparado->execute();
$resultados = $preparado->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-10 m-auto">
                <div class="card">
                    <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Incidentes de Transito</h4>
                        <?php include("modal/transitoModalR.php");?>
                    </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="columna">Diario</th>
                                        <th class="columna">Sección</th>
                                        <th class="columna">Estación</th>
                                        <th class="columna">Emergencia</th>
                                        <th class="columna">Inspección</th>
                                        <th class="columna">Tipo Incidente</th>
                                        <th class="columna">Tipo de Aviso</th>
                                        <th class="columna">Solicitante</th>
                                        <th class="columna">Recibidor</th>
                                        <th class="columna">Aviso</th>
                                        <th class="columna">Salida</th>
                                        <th class="columna">Llegada</th>
                                        <th class="columna">Regreso</th>
                                        <th class="columna">Vehiculo</th>
                                        <th class="columna">Lesionados</th>
                                        <th class="columna">Occisos</th>
                                        <th class="columna">Observaciones</th>
                                        <th class="columna">Incendio</th>
                                        <th class="columna">Recursos</th>
                                        <th class="columna">Cantidad</th>
                                        <th class="columna">Jefe Comisión</th>
                                        <th class="columna">Efectivos</th>
                                        <th class="columna">Unidad</th>
                                        <th class="columna">PNB</th>
                                        <th class="columna">GNB</th>
                                        <th class="columna">INTT</th>
                                        <th class="columna">INVITY</th>
                                        <th class="columna">PC</th>
                                        <th class="columna">Otros</th>
                                        <th class="columna">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($resultados as $resultado) :?>
                                    <tr class="fila">
                                        <td class="columna" hidden><?= $resultado['id']?></td>
                                        <td class="columna"><?= $resultado['fecha']?></td>
                                        <td class="columna"><?= $resultado['seccion']?></td>
                                        <td class="columna"><?= $resultado['estacion']?></td>
                                        <td class="columna"><?= $resultado['inspeccion']?></td>
                                        <td class="columna"><?= $resultado['emergencia']?></td>
                                        <td class="columna"><?= $resultado['incidente']?></td>
                                        <td class="columna"><?= $resultado['taviso']?></td>
                                        <td class="columna"><?= $resultado['solicitante']?></td>
                                        <td class="columna"><?= $resultado['recibidor']?></td>
                                        <td class="columna"><?= $resultado['aviso']?></td>
                                        <td class="columna"><?= $resultado['salida']?></td>
                                        <td class="columna"><?= $resultado['llegada']?></td>
                                        <td class="columna"><?= $resultado['regreso']?></td>
                                        <td class="columna"><?= $resultado['vehiculo']?></td>
                                        <td class="columna"><?= $resultado['lesionados']?></td>
                                        <td class="columna"><?= $resultado['occisos']?></td>
                                        <td class="columna"><?= $resultado['observaciones']?></td>
                                        <td class="columna"><?= $resultado['incendio']?></td>
                                        <td class="columna"><?= $resultado['recurso']?></td>
                                        <td class="columna"><?= $resultado['cantidad']?></td>
                                        <td class="columna"><?= $resultado['jefe']?></td>
                                        <td class="columna"><?= $resultado['efectivo']?></td>
                                        <td class="columna"><?= $resultado['unidad']?></td>
                                        <td class="columna"><?= $resultado['pnb']?></td>
                                        <td class="columna"><?= $resultado['gnb']?></td>
                                        <td class="columna"><?= $resultado['intt']?></td>
                                        <td class="columna"><?= $resultado['invity']?></td>
                                        <td class="columna"><?= $resultado['pc']?></td>
                                        <td class="columna"><?= $resultado['otros']?></td>

                                        
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modal/transitoModalM.php");?>
                                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_transito.php?txtID=<?= $resultado['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                        </td>

                                    </tr>
                                <?php endforeach;?>   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form action="../controlador/ctl_marca.php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

    <script src="Javascript/transitoModal.js"></script>

<?php 
require ('../footer.php');
?>