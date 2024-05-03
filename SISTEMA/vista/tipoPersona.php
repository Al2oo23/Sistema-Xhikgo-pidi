<?php
$nombrePagina = "Tipo de Persona";
require('../header.php');
?>

<div class="col-md-6 col-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Registrar Tipo de Persona</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" onsubmit="return validarTipoPersona()">
                    <div class="form-body">
                        <div class="row">
                            
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="">Tipo de Persona</label>
                                    <div class=" position-relative">
                                        <input type="text" id="tipo_persona" class="form-control" placeholder="Ingrese el Tipo de Persona que desea registrar">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>

                           

                            <div class="col-12">
                                <div class="form-group">
                                <label for="" class="form-label">Descripcion</label>
                                    <div class="position-relative">
                                        <textarea class="form-control" id="descripcion" rows="4" style="resize:none;"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>



<?php
require('../footer.php');
?>