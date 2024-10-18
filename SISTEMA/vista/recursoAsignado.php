<?php
$nombrePagina = "Recurso Asignado";
require ('../header.php');
include ('../modelo/conexion.php');

// Obtener resultados iniciales
$sentencia = $conexion->prepare("SELECT * FROM recurso_asignado");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12" id="catalogo">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
               
                    <div class="form-group has-icon-left">
                        <div class="position-relative col-4">
                            <select class="form-select" name="id_criterio" id="id_criterio"
                                style="width:200px; display:inline-block;">
                                
                            </select>
                            <a href="reportes/reporte_persona.php" class="btn btn-primary" style="text-decoration: none;
                                    color:white;">Generar Reporte</a>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recurso Asignado</h4>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_persona">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columnas">ID</th>
                                <th class="columnas">ID incidente</th>
                                <th class="columnas">ID Recurso</th>
                                <th class="columnas">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody id="resultados">
                            <?php foreach ($resultado as $bitacora): ?>
                                <tr class="fila">
                                    <td class="columnas"><?= $bitacora['id']; ?></td>
                                    <td class="columnas"><?= $bitacora['id_incidente']; ?></td>
                                    <td class="columnas"><?= $bitacora['id_recurso']; ?></td>
                                    <td class="columnas"><?= $bitacora['cantidad']; ?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('buscador-form').addEventListener('submit', function (e) {
        e.preventDefault();
        var idCriterio = document.getElementById('id_criterio').value;
        fetch('../controlador/ctl_criterio_persona.php', {
            method: 'POST',
            body: new URLSearchParams('id_criterio=' + idCriterio)
        })
            .then(response => response.json())
            .then(data => {
                actualizarTabla(data);
            });
    });

    document.getElementById('limpiar').addEventListener('click', function () {
        document.getElementById('id_criterio').value = '';
        fetch('../controlador/ctl_criterio_persona.php', {
            method: 'POST',
            body: new URLSearchParams('id_criterio=')
        })
            .then(response => response.json())
            .then(data => {
                actualizarTabla(data);
            });
    });

    function actualizarTabla(data) {
        var resultados = document.getElementById('resultados');
        resultados.innerHTML = '';
        data.forEach(persona => {
            var row = document.createElement('tr');
            row.classList.add('fila');
            row.innerHTML = `
            <td class="columnas">${persona.cedula}</td>
            <td class="columnas">${persona.nombre}</td>
            <td class="columnas">${persona.edad}</td>
            <td class="columnas" hidden>${persona.correo}</td>
            <td class="columnas">${persona.telefono}</td>
            <td class="columnas" hidden>${persona.direccion}</td>
            <td class="columnas">${persona.sexo}</td>
            <td class="columnas">${persona.tipo_persona}</td>
            <td class="columnas">${persona.cargo}</td>
            <td class="columnas">${persona.seccion}</td>
            <td class="columnas">${persona.estacion}</td>
            <td>
                <div class="botones" style="justify-content:space-evenly;">
                    <div><a name='modificar' id='modificar' href='#' data-bs-toggle='modal' data-bs-target='#modalPersonaM${persona.cedula}' class="btn icon btn-warning"><i class="bi bi-pencil"></i></a></div>
                </div>
                ${generateModalHTML(persona.cedula)}
            </td>
        `;
            resultados.appendChild(row);
        });
    }

    function generateModalHTML(cedula) {
        return `
        <?php ob_start(); ?>
        <?php include ("modal/modalPersonaM.php"); ?>
        <?php $modalContent = ob_get_clean(); ?>
        ${modalContent.replace(/modalPersonaM/g, "modalPersonaM" + cedula)}
    `;
    }
</script>

<script src="Javascript/personaModal.js"></script>

<?php
require ('../footer.php');
?>