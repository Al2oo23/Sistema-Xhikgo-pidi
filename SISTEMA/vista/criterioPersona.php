<?php
$nombrePagina = "Criterio de Persona";
require('../header.php');
include('../modelo/conexion.php');

// Obtener criterios de búsqueda
$sentencia = $conexion->prepare("SELECT * FROM criterio_persona");
$sentencia->execute();
$criterio = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buscador</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form id="buscador-form">
                <select class="form-select" name="criterio" id="criterio" style="width:200px; display:inline-block;">
                        <option value="">Seleccionar Criterio...</option>
                        <?php foreach ($criterio as $c) : ?>
                            <option value="<?= $c['id']; ?>"><?= $c['nombre']; ?></option>
                        <?php endforeach; ?>
                </select>
                    <input type="hidden" name="id_criterio" id="id_criterio">
                    <input type="submit" value="Buscar" id="buscar" class="btn btn-primary">
                    <button type="button" id="limpiar" class="btn btn-danger">Limpiar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Criterio de Persona</h4>
                    <?php include("modal/modalCriterioPersonaR.php"); ?>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="tabla_persona">
                        <thead>
                            <tr style="text-align: center;">
                                <th class="columnas" hidden>id</th>
                                <th class="columnas">Cedula</th>
                                <th class="columnas">Nombre</th>
                                <th class="columnas">Edad</th>
                                <th class="columnas" hidden>Correo</th>
                                <th class="columnas">Telefono</th>
                                <th class="columnas" hidden>Direccion</th>
                                <th class="columnas">Sexo</th>
                                <th class="columnas">Tipo</th>
                                <th class="columnas">Cargo</th>
                                <th class="columnas">Seccion</th>
                                <th class="columnas">Estacion</th>
                                <th class="columnas">Accion</th>
                            </tr>
                        </thead>
                        <tbody id="resultados">
                            <?php foreach ($criterio as $persona) : ?>
                                <tr class="fila">
                                    <td class="columnas" hidden><?= $persona['id']; ?></td>
                                    <td class="columnas"><?= $persona['cedula']; ?></td>
                                    <td class="columnas"><?= $persona['nombre']; ?></td>
                                    <td class="columnas"><?= $persona['edad']; ?></td>
                                    <td class="columnas" hidden><?= $persona['correo']; ?></td>
                                    <td class="columnas"><?= $persona['telefono']; ?></td>
                                    <td class="columnas" hidden><?= $persona['direccion']; ?></td>
                                    <td class="columnas"><?= $persona['sexo']; ?></td>
                                    <td class="columnas"><?= $persona['tipo_persona']; ?></td>
                                    <td class="columnas"><?= $persona['cargo']; ?></td>
                                    <td class="columnas"><?= $persona['seccion']; ?></td>
                                    <td class="columnas"><?= $persona['estacion']; ?></td>
                                    <td>
                                        <div class="botones" style="justify-content:space-evenly;">
                                            <?php include("modal/modalPersonaM.php"); ?>
                                            <div><a name='eliminar' id='eliminar' href='../controlador/ctl_persona.php?txtID=<?= $persona['cedula']; ?>' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
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
</div>

<script>
document.getElementById('buscador-form').addEventListener('submit', function(e) {
    e.preventDefault();
    var idCriterio = document.getElementById('criterio').value;
    fetch('../controlador/ctl_criterio_persona.php', {
        method: 'POST',
        body: new URLSearchParams('id_criterio=' + idCriterio)
    })
    .then(response => response.json())
    .then(data => {
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
                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_persona.php?txtID=${persona.cedula}' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                    </div>
                    ${generateModalHTML(persona.cedula)}
                </td>
            `;
            resultados.appendChild(row);
        });
    });
});

document.getElementById('limpiar').addEventListener('click', function() {
    document.getElementById('criterio').value = '';
    var idCriterio = '';
    fetch('../controlador/ctl_criterio_persona.php', {
        method: 'POST',
        body: new URLSearchParams('id_criterio=' + idCriterio)
    })
    .then(response => response.json())
    .then(data => {
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
                        <div><a name='eliminar' id='eliminar' href='../controlador/ctl_persona.php?txtID=${persona.cedula}' class="btn icon btn-danger"><i class="bi bi-x"></i></a></div>
                    </div>
                    ${generateModalHTML(persona.cedula)}
                </td>
            `;
            resultados.appendChild(row);
        });
    });
});

function generateModalHTML(cedula) {
    return `
        <?php ob_start(); ?>
        <?php include("modal/modalPersonaM.php"); ?>
        <?php $modalContent = ob_get_clean(); ?>
        ${modalContent.replace(/modalPersonaM/g, "modalPersonaM" + cedula)}
    `;
}
</script>

<?php
require('../footer.php');
?>