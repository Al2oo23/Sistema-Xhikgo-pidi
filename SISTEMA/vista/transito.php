<?php 
session_start();
$nombrePagina = 'Catálogo Incidentes de Transito';
require('../header.php');
include('../modelo/conexion.php');

/*$SQL = "SELECT * FROM marca";
$preparado = $conexion->prepare($SQL);
$preparado->execute();
$marcas = $preparado->fetchAll(PDO::FETCH_ASSOC);*/
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
                                <?php //foreach ($marcas as $marca) :?>
                                    <tr class="fila">
                                        <td class="columna" hidden></td>
                                        <td class="columna">Diario</td>
                                        <td class="columna">Seccion</td>
                                        <td class="columna">Estacion</td>
                                        <td class="columna">si</td>
                                        <td class="columna">si</td>
                                        <td class="columna">choque</td>
                                        <td class="columna">gemidos</td>
                                        <td class="columna">10000000</td>
                                        <td class="columna">3:00</td>
                                        <td class="columna">3:00</td>
                                        <td class="columna">3:00</td>
                                        <td class="columna">3:00</td>
                                        <td class="columna">ashgfwqf</td>
                                        <td class="columna">99999999</td>
                                        <td class="columna">99999999</td>
                                        <td class="columna">Tuvo hevi</td>
                                        <td class="columna">muchos</td>
                                        <td class="columna">penes</td>
                                        <td class="columna">99999999</td>
                                        <td class="columna">Gojo Satoru</td>
                                        <td class="columna">Yuji, Yuta, Choso</td>
                                        <td class="columna">5</td>
                                        <td class="columna">Yuki</td>
                                        <td class="columna">Mei Mei</td>
                                        <td class="columna">Nanami</td>
                                        <td class="columna">Kenjaku</td>
                                        <td class="columna">Sukuna</td>
                                        <td class="columna">Maldito Gege</td>

                                        
                                        <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                        <?php include("modal/modalMarcaM.php");?>
                                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_marca.php?txtID=<?= $marca['id']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                                        </div>
                                        </td>

                                    </tr>
                                <?php //endforeach;?>   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form action="../controlador/ctl_marca.php" method="POST" style="display: none;">
                <input type="hidden" id="idBorrar" name="id">
            </form>

    <script src="Javascript/marcaModal.js"></script>

<?php 
require ('../footer.php');
?>