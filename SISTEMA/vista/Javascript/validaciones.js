//Validacion de Pantalla Estacion
function validarEstacion() {
    var nombre_estacion = document.getElementById('nombre_estacion').value;
    var nameRegex = /^.{3,50}$/;

    if (!nameRegex.test(nombre_estacion)) {
        alert('Nombre de estación invalido');
        return false;
    }

    return true;
}

//Validacion de Pantalla Estacion Modificar
function validarEstacionM() {
    var nombre_estacionM = document.getElementById('nombre_estacionM').value;
    var nameRegex = /^.{3,50}$/;

    if (!nameRegex.test(nombre_estacionM)) {
        alert('Nombre de estación invalido');
        return false;
    }

    return true;
}

//Validacion de Pantalla Seccion
function validarSeccion() {
    var numero_seccion = document.getElementById('numero_seccion').value;
    var seccionRegex = /^[0-9]{1,5}$/;

    if (!seccionRegex.test(numero_seccion)) {
        alert('Ingrese una sección valida');
        return false;
    }

    return true;
}

//Validacion de Pantalla Seccion Modificar
function validarSeccionM() {
    var numero_seccionM = document.getElementById('numero_seccionM').value;
    var seccionRegex = /^[0-9]{1,5}$/;

    if (!seccionRegex.test(numero_seccionM)) {
        alert('Ingrese una sección valida');
        return false;
    }

    return true;
}

//Validacion de Pantalla Persona
function validarPersona() {
    var cedula = document.getElementById('cedula').value;
    var cedulaRegex = /^[JEVPGjevpg]{1}-\d{6,12}$/;

    if (!cedulaRegex.test(cedula)) {
        alert('Cedula invalida, use el siguiente formato de ejemplo: V-1231232')
        return false;
    }

    var nombre_persona = document.getElementById('nombre_persona').value;
    var personaRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;;

    if (!personaRegex.test(nombre_persona)) {
        alert('Ingrese un Nombre valido');
        return false;
    }

    var edad = document.getElementById('edad').value;
    var edadRegex = /^\d{1,3}$/;

    if (!edadRegex.test(edad)) {
        alert('Ingrese una Edad valida');
        return false;
    }

    var correo = document.getElementById('correo').value;
    var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!correoRegex.test(correo)) {
        alert('Ingrese un correo valido');
        return false;
    }

    var telefono = document.getElementById('telefono').value;
    var telefonoRegex = /^\+[\d]{2,3}\s[\d]{10}$/;

    if (!telefonoRegex.test(telefono)) {
        alert('Ingrese un numero de telefono valido, debe tener el siguiente formato de ejemplo: +58 1234567890');
        return false;
    }

    var direccion = document.getElementById('direccion').value;
    var direccionRegex = /^.{3,100}$/;

    if (!direccionRegex.test(direccion)) {
        alert('Ingrese una direccion valida');
        return false;
    }

    var genero = document.getElementById('genero').value;

    if (genero === "") {
        alert('Debe seleccionar un genero');
        return false;
    }

    var tipo_persona = document.getElementById('tipo_persona').value;

    if (tipo_persona === "") {
        alert('Debe seleccionar el tipo de persona');
        return false;
    }

    var cargo = document.getElementById('cargo').value;

    if (cargo === "") {
        alert('Debe seleccionar un cargo');
        return false;
    }

    var seccion = document.getElementById('seccion').value;

    if (seccion === "") {
        alert('Debe seleccionar una seccion');
        return false;
    }

    var estacion = document.getElementById('estacion').value;

    if (estacion === "") {
        alert('Debe seleccionar una estacion');
        return false;
    }

    var estado = document.getElementById('estado').value;

    if (estado === "") {
        alert('Debe seleccionar el estado de la persona');
        return false;
    }

    return true;
}

//Validacion de Pantalla Persona Modificar
function validarPersonaM() {
    var cedula = document.getElementById('cedulaM').value;
    var cedulaRegex = /^[JEVPGjevpg]{1}-\d{6,12}$/;

    if (!cedulaRegex.test(cedula)) {
        alert('Cedula invalida, use el siguiente formato de ejemplo: V-1231232')
        return false;
    }

    var nombre_persona = document.getElementById('nombreM').value;
    var personaRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;;

    if (!personaRegex.test(nombre_persona)) {
        alert('Ingrese un Nombre valido');
        return false;
    }

    var edad = document.getElementById('edadM').value;
    var edadRegex = /^\d{1,3}$/;

    if (!edadRegex.test(edad)) {
        alert('Ingrese una Edad valida');
        return false;
    }

    var correo = document.getElementById('correoM').value;
    var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!correoRegex.test(correo)) {
        alert('Ingrese un correo valido');
        return false;
    }

    var telefono = document.getElementById('telefonoM').value;
    var telefonoRegex = /^\+[\d]{2,3}\s[\d]{10}$/;

    if (!telefonoRegex.test(telefono)) {
        alert('Ingrese un numero de telefono valido, debe tener el siguiente formato de ejemplo: +58 1234567890');
        return false;
    }

    var direccion = document.getElementById('direccionM').value;
    var direccionRegex = /^.{3,100}$/;

    if (!direccionRegex.test(direccion)) {
        alert('Ingrese una direccion valida');
        return false;
    }

    var genero = document.getElementById('generoM').value;

    if (genero === "") {
        alert('Debe seleccionar un genero');
        return false;
    }

    var tipo_persona = document.getElementById('tipo_personaM').value;

    if (tipo_persona === "") {
        alert('Debe seleccionar el tipo de persona');
        return false;
    }

    var cargo = document.getElementById('cargoM').value;

    if (cargo === "") {
        alert('Debe seleccionar un cargo');
        return false;
    }

    var seccion = document.getElementById('seccionM').value;

    if (seccion === "") {
        alert('Debe seleccionar una seccion');
        return false;
    }

    var estacion = document.getElementById('estacionM').value;

    if (estacion === "") {
        alert('Debe seleccionar una estacion');
        return false;
    }

    var estadoM = document.getElementById('estadoM').value;

    if (estadoM === "") {
        alert('Debe seleccionar el estado de la persona');
        return false;
    }


    return true;
}

//Validacion de Pantalla Aseguradora
function validarAseguradora() {
    var aseguradora = document.getElementById('nombre_aseguradora').value;
    var aseguradoraRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!aseguradoraRegex.test(aseguradora)) {
        alert('Ingrese un nombre valido');
        return false;
    }

    var tipo_aseguradora = document.getElementById('tipo_aseguradora').value;

    if (tipo_aseguradora === "") {
        alert('Debe seleccionar un tipo aseguradora');
        return false;
    }

    return true;
}

//Validacion de Pantalla Aseguradora Modificar
function validarAseguradoraM() {
    var aseguradoraM = document.getElementById('nombre_aseguradoraM').value;
    var aseguradoraMRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!aseguradoraMRegex.test(aseguradoraM)) {
        alert('Ingrese un nombre valido');
        return false;
    }

    var tipo_aseguradoraM = document.getElementById('tipo_aseguradoraMa').value;

    if (tipo_aseguradoraM === "") {
        alert('Debe seleccionar un tipo aseguradora');
        return false;
    }

    return true;
}

//Validacion de Pantalla Abejas
function validarAbejas() {
    var parte_diaria = document.getElementById('parte_diaria').value;
    parteRegex = /^[\d]{2}\-[\d]{2}\-[\d]{4}$/;

    if (!parteRegex.test(parte_diaria)) {
        alert('Debe ingresar una fecha valida con el siguiente formato: DD-MM-YYYY respetando los guiones');
        return false;
    }

    var seccion = document.getElementById('seccion').value;

    if (seccion === "") {
        alert('Debe seleccionar una seccion');
        return false;
    }

    var estacion = document.getElementById('estacion').value;

    if (estacion === "") {
        alert('Debe seleccionar una estacion');
        return false;
    }

    var tipo_aviso = document.getElementById('tipo_aviso').value;

    if (tipo_aviso === "") {
        alert('Debe seleccionar un tipo aviso');
        return false;
    }

    var hora_aviso = document.getElementById('hora_aviso').value;
    avisoRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!avisoRegex.test(hora_aviso)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_salida = document.getElementById('hora_salida').value;
    salidaRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!salidaRegex.test(hora_salida)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_llegada = document.getElementById('hora_llegada').value;
    llegadaRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!llegadaRegex.test(hora_llegada)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_regreso = document.getElementById('hora_regreso').value;
    regresoRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!llegadaRegex.test(hora_regreso)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var municipio = document.getElementById('municipio').value;

    if (municipio === "") {
        alert('Debe seleccionar un municipio');
        return false;
    }

    var localidad = document.getElementById('localidad').value;

    if (localidad === "") {
        alert('Debe seleccionar una localidad');
        return false;
    }

    var direccion = document.getElementById('direccion').value;
    var direccionRegex = /^.{3,150}$/;

    if (!direccionRegex.test(direccion)) {
        alert('Direccion Invalida, no debe contener saltos de linea');
        return false;
    }

    var panal = document.getElementById('panal').value;
    var panalRegex = /^.{3,50}$/;

    if (!panalRegex.test(panal)) {
        alert('Ubicacion del panal invalida');
        return false;
    }

    var recurso = document.getElementById('recurso').value;

    if (recurso === "") {
        alert('Debe seleccionar un recurso');
        return false;
    }

    var propietario = document.getElementById('propietario').value;
    var propietarioRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!propietarioRegex.test(propietario)) {
        alert('Ingrese un nombre valido');
        return false;
    }

    var jefe_comision = document.getElementById('jefe_comision').value;

    if (jefe_comision === "") {
        alert('Debe seleccionar un jefe de comision');
        return false;
    }

    var efectivo = document.getElementById('efectivo').value;

    if (efectivo === "") {
        alert('Debe seleccionar un efectivo');
        return false;
    }

    var unidad = document.getElementById('unidad').value;

    if (unidad === "") {
        alert('Debe seleccionar una unidad');
        return false;
    }

    return true;
}

//Validacion pantalla Asignar Recurso
function validarAsignacion() {
    var recurso_asignado = document.getElementById('recurso_asignado').value;

    if (recurso_asignado === "") {
        alert('Debe seleccionar un recurso para ser asignado');
        return false;
    }

    var cantidad_recursoA = document.getElementById('cantidad_recursoA').value;
    var cantidad_recursoARegex = /^\d{1,50}$/;

    if (!cantidad_recursoARegex.test(cantidad_recursoA)) {
        alert('Debe ingresar una cantidad de recurso valida');
        return false;
    }

    return true;
}

//Validacion pantalla Aviso
function validarAviso() {
    var tipo_aviso = document.getElementById('tipo_aviso').value;
    var tipo_avisoRegex = /^[a-zA-Z0-9\s]{3,150}$/;

    if (!tipo_avisoRegex.test(tipo_aviso)) {
        alert('Debe ingresar un tipo de aviso');
        return false;
    }

    return true;
}

//Validacion pantalla Aviso Modificar
function validarAvisoM() {
    var tipo_avisoM = document.getElementById('tipo_avisoM').value;
    var tipo_avisoMRegex = /^[a-zA-Z0-9\s]{3,150}$/;

    if (!tipo_avisoMRegex.test(tipo_avisoM)) {
        alert('Debe ingresar un de tipo de aviso');
        return false;
    }

    return true;
}

//Validacion pantalla Localidad
function validarLocalidad() {

    var municipio = document.getElementById('municipio').value;

    if (municipio === "") {
        alert('Debe seleccionar un municipio');
        return false;
    }

    var localidad = document.getElementById('localidad').value;
    var localidadRegex = /^[\w\s/-_]{3,150}$/;

    if (!localidadRegex.test(localidad)) {
        alert('Debe ingresar una localidad valida');
        return false;
    }

    return true;
}

//Validacion pantalla Incendios
function validarIncendio() {
    var parte_diaria = document.getElementById('parte_diaria').value;
    parteRegex = /^[\d]{2}\-[\d]{2}\-[\d]{4}$/;

    if (!parteRegex.test(parte_diaria)) {
        alert('Debe ingresar una fecha valida con el siguiente formato: DD-MM-YYYY respetando los guiones');
        return false;
    }

    var seccion = document.getElementById('seccion').value;

    if (seccion === "") {
        alert('Debe seleccionar una seccion');
        return false;
    }

    var estacion = document.getElementById('estacion').value;

    if (estacion === "") {
        alert('Debe seleccionar una estacion');
        return false;
    }

    var tipo_aviso = document.getElementById('tipo_aviso').value;

    if (tipo_aviso === "") {
        alert('Debe seleccionar un tipo aviso');
        return false;
    }

    var solicitante = document.getElementById('solicitante').value;
    var solicitanteRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!solicitanteRegex.test(solicitante)) {
        alert('Debe ingresar un solicitante valido');
        return false;
    }


    var receptor = document.getElementById('receptor').value;
    var receptorRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!receptorRegex.test(receptor)) {
        alert('Debe ingresar un receptor valido');
        return false;
    }

    var aprobador = document.getElementById('aprobador').value;
    var aprobadorRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!aprobadorRegex.test(aprobador)) {
        alert('Debe ingresar un aprobador valido');
        return false;
    }

    var hora_aviso = document.getElementById('hora_aviso').value;
    avisoRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!avisoRegex.test(hora_aviso)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_salida = document.getElementById('hora_salida').value;
    salidaRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!salidaRegex.test(hora_salida)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_llegada = document.getElementById('hora_llegada').value;
    llegadaRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!llegadaRegex.test(hora_llegada)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_regreso = document.getElementById('hora_regreso').value;
    regresoRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!llegadaRegex.test(hora_regreso)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var municipio = document.getElementById('municipio').value;

    if (municipio === "") {
        alert('Debe seleccionar un municipio');
        return false;
    }

    var localidad = document.getElementById('localidad').value;

    if (localidad === "") {
        alert('Debe seleccionar una localidad');
        return false;
    }

    var direccion = document.getElementById('direccion').value;
    var direccionRegex = /^.{3,100}$/;

    if (!direccionRegex.test(direccion)) {
        alert('Ingrese una direccion valida');
        return false;
    }

    var material_paredes = document.getElementById('material_paredes').value;

    if (material_paredes === "") {
        alert('Debe seleccionar un material de paredes valido');
        return false;
    }

    var material_techo = document.getElementById('material_techo').value;

    if (material_techo === "") {
        alert('Debe seleccionar un material de techo valido');
        return false;
    }

    var material_piso = document.getElementById('material_piso').value;

    if (material_piso === "") {
        alert('Debe seleccionar un material de piso valido');
        return false;
    }

    var material_ventanas = document.getElementById('material_ventanas').value;

    if (material_ventanas === "") {
        alert('Debe seleccionar un material de ventanas valido');
        return false;
    }

    var material_puertas = document.getElementById('material_puertas').value;

    if (material_puertas === "") {
        alert('Debe seleccionar un material de puertas valido');
        return false;
    }

    var otros_materiales = document.getElementById('otros_materiales').value;

    if (otros_materiales === "") {
        alert('Debe seleccionar otro material valido');
        return false;
    }

    var propietario = document.getElementById('propietario').value;
    var propietarioRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!propietarioRegex.test(propietario)) {
        alert('Debe ingresar un propietario valido');
        return false;
    }

    var valor_inmueble = document.getElementById('valor_inmueble').value;
    var inmuebleRegex = /^\d+(\s?\$|\s?Bs)$/;

    if (!inmuebleRegex.test(valor_inmueble)) {
        alert('Debe ingresar un valor inmueble valido debe ser: 23$ o 23Bs');
        return false;
    }

    var residenciados = document.getElementById('residenciados').value;
    var residenciadosRegex = /^\d{1,150}$/;

    if (!residenciadosRegex.test(residenciados)) {
        alert('Debe ingresar una cantidad de residenciados valida');
        return false;
    }

    var ninos = document.getElementById('ninos').value;
    var ninosRegex = /^\d{1,150}$/;

    if (!ninosRegex.test(ninos)) {
        alert('Debe ingresar una cantidad de niños valida');
        return false;
    }

    var adolescentes = document.getElementById('adolescentes').value;
    var adolescentesRegex = /^\d{1,150}$/;

    if (!adolescentesRegex.test(adolescentes)) {
        alert('Debe ingresar una cantidad de adolescentes valida');
        return false;
    }

    var adultos = document.getElementById('adultos').value;
    var adultosRegex = /^\d{1,150}$/;

    if (!adultosRegex.test(adultos)) {
        alert('Debe ingresar una cantidad de adultos valida');
        return false;
    }

    var informacion_adicional = document.getElementById('informacion_adicional').value;
    var informacion_adicionalRegex = /^.{1,150}$/;

    if (!informacion_adicionalRegex.test(informacion_adicional)) {
        alert('Informacion adicional Invalida, no debe contener saltos de linea ni estar vacia');
        return false;
    }

    var asegurado = document.getElementById('asegurado');
    var no_asegurado = document.getElementById('no_asegurado');

    if (!asegurado.checked && !no_asegurado.checked) {
        alert('Debe seleccionar si esta asegurado o no');
        return false;
    }

    var aseguradora = document.getElementById('aseguradora').value;

    if (aseguradora === "") {
        alert('Debe seleccionar un aseguradora');
        return false;
    }

    var numero_poliza = document.getElementById('numero_poliza').value;
    var polizaRegex = /^[\d-_]{1,100}$/;

    if (!polizaRegex.test(numero_poliza)) {
        alert('Debe ingresar un numero de poliza valido');
        return false;
    }

    var valor_asegurado = document.getElementById('valor_asegurado').value;
    var aseguradoRegex = /^\d+(\s?\$|\s?Bs)$/;

    if (!aseguradoRegex.test(valor_asegurado)) {
        alert('Debe ingresar un valor valido, ejemplo: 28$ o 2800Bs');
        return false;
    }

    var valor_perdido = document.getElementById('valor_perdido').value;
    var perdidoRegex = /^\d+(\s?\$|\s?Bs)$/;

    if (!perdidoRegex.test(valor_perdido)) {
        alert('Debe ingresar un valor valido, ejemplo: 28$ o 2800Bs');
        return false;
    }

    var valor_salvado = document.getElementById('valor_salvado').value;
    var salvadoRegex = /^\d+(\s?\$|\s?Bs)$/;

    if (!salvadoRegex.test(valor_salvado)) {
        alert('Debe ingresar un valor valido, ejemplo: 28$ o 2800Bs');
        return false;
    }

    var fuente = document.getElementById('fuente_ignicion').value;
    var fuenteRegex = /^[\w\s-_]{3,150}$/;

    if (!fuenteRegex.test(fuente)) {
        alert('Debe ingresar una fuente de ignicion valida');
        return false;
    }

    var causa_incendio = document.getElementById('causa_incendio').value;
    var causaRegex = /^[\w\s-_]{3,150}$/;

    if (!causaRegex.test(causa_incendio)) {
        alert('Debe ingresar una causa de incendio valida');
        return false;
    }

    var lugar_inicio = document.getElementById('lugar_inicio').value;
    var lugar_inicioRegex = /^[\w\s-_]{3,150}$/;

    if (!lugar_inicioRegex.test(lugar_inicio)) {
        alert('Debe ingresar un lugar de inicio de la ignicion valida');
        return false;
    }

    var lugar_fin = document.getElementById('lugar_fin').value;
    var lugar_finRegex = /^[\w\s-_]{3,150}$/;

    if (!lugar_finRegex.test(lugar_fin)) {
        alert('Debe ingresar un lugar de fin de la ignicion valida');
        return false;
    }

    var reignicion = document.getElementById('reignicion');
    var no_reignicion = document.getElementById('no_reignicion');

    if (!reignicion.checked && !no_reignicion.checked) {
        alert('Debe seleccionar si hubo reignicion o no');
        return false;
    }

    var tipo_combustible = document.getElementById('tipo_combustible').value;
    var tipo_combustibleRegex = /^[\w\s-_]{3,150}$/;

    if (!tipo_combustibleRegex.test(tipo_combustible)) {
        alert('Debe ingresar un tipo de combustible valido');
        return false;
    }

    var declaracion_incendio = document.getElementById('declaracion').value;
    var declaracion_incendioRegex = /^.{1,150}$/;

    if (!declaracion_incendioRegex.test(declaracion_incendio)) {
        alert('Declaracion Invalida, no debe contener saltos de linea ni estar vacia');
        return false;
    }

    var lesion = document.getElementById('lesion');
    var no_lesion = document.getElementById('no_lesion');

    if (!lesion.checked && !no_lesion.checked) {
        alert('Debe seleccionar si hubo lesionados o no');
        return false;
    }

    var numero_lesionados = document.getElementById('numero_lesionados').value;
    var numero_lesionadosRegex = /^\d{1,150}$/;

    if (!numero_lesionadosRegex.test(numero_lesionados)) {
        alert('Debe ingresar una cantidad de lesionados valida');
        return false;
    }

    var cedula_lesionado = document.getElementById('cedula_lesionado').value;
    var cedula_lesionadoRegex = /^[JEVPGjevpg]{1}-\d{6,12}$/;

    if (!cedula_lesionadoRegex.test(cedula_lesionado)) {
        alert('Cedula invalida, use el siguiente formato de ejemplo: V-1231232')
        return false;
    }

    var recurso_utilizado = document.getElementById('recurso_utilizado').value;

    if (recurso_utilizado === "") {
        alert('Debe seleccionar un recurso utilizado');
        return false;
    }

    var unidad = document.getElementById('unidad').value;

    if (unidad === "") {
        alert('Debe seleccionar una unidad');
        return false;
    }

    var jefe_comision = document.getElementById('jefe_comision').value;

    if (jefe_comision === "") {
        alert('Debe seleccionar un jefe de comision');
        return false;
    }

    // var efectivo = document.getElementById('efectivo').value;

    // if (efectivo === "") {
    //     alert('Debe seleccionar un efectivo');
    //     return false;
    // }

    var observaciones = document.getElementById('observaciones').value;
    var observacionesRegex = /^.{1,150}$/;

    if (!observacionesRegex.test(observaciones)) {
        alert('Observacion Invalida, no debe contener saltos de linea ni estar vacia');
        return false;
    }

    return true;
}

//Validacion pantalla Incendios Modificar
function validarIncendioM() {
    var parte_diaria = document.getElementById('parte_diariaM').value;
    parteRegex = /^[\d]{2}\-[\d]{2}\-[\d]{4}$/;

    if (!parteRegex.test(parte_diaria)) {
        alert('Debe ingresar una fecha valida con el siguiente formato: DD-MM-YYYY respetando los guiones');
        return false;
    }

    var seccion = document.getElementById('seccionM').value;

    if (seccion === "") {
        alert('Debe seleccionar una seccion');
        return false;
    }

    var estacion = document.getElementById('estacionM').value;

    if (estacion === "") {
        alert('Debe seleccionar una estacion');
        return false;
    }

    var tipo_aviso = document.getElementById('tipo_avisoM').value;

    if (tipo_aviso === "") {
        alert('Debe seleccionar un tipo aviso');
        return false;
    }

    var solicitante = document.getElementById('solicitanteM').value;
    var solicitanteRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!solicitanteRegex.test(solicitante)) {
        alert('Debe ingresar un solicitante valido');
        return false;
    }


    var receptor = document.getElementById('receptorM').value;
    var receptorRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!receptorRegex.test(receptor)) {
        alert('Debe ingresar un receptor valido');
        return false;
    }

    var aprobador = document.getElementById('aprobadorM').value;
    var aprobadorRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!aprobadorRegex.test(aprobador)) {
        alert('Debe ingresar un aprobador valido');
        return false;
    }

    var hora_aviso = document.getElementById('hora_avisoM').value;
    avisoRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!avisoRegex.test(hora_aviso)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_salida = document.getElementById('hora_salidaM').value;
    salidaRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!salidaRegex.test(hora_salida)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_llegada = document.getElementById('hora_llegadaM').value;
    llegadaRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!llegadaRegex.test(hora_llegada)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_regreso = document.getElementById('hora_regresoM').value;
    regresoRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!llegadaRegex.test(hora_regreso)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var municipio = document.getElementById('municipioM').value;

    if (municipio === "") {
        alert('Debe seleccionar un municipio');
        return false;
    }

    var localidad = document.getElementById('localidadM').value;

    if (localidad === "") {
        alert('Debe seleccionar una localidad');
        return false;
    }

    var direccion = document.getElementById('direccionM').value;
    var direccionRegex = /^.{3,100}$/;

    if (!direccionRegex.test(direccion)) {
        alert('Ingrese una direccion valida');
        return false;
    }

    var material_paredes = document.getElementById('material_paredesM').value;

    if (material_paredes === "") {
        alert('Debe seleccionar un material de paredes valido');
        return false;
    }

    var material_techo = document.getElementById('material_techoM').value;

    if (material_techo === "") {
        alert('Debe seleccionar un material de techo valido');
        return false;
    }

    var material_piso = document.getElementById('material_pisoM').value;

    if (material_piso === "") {
        alert('Debe seleccionar un material de piso valido');
        return false;
    }

    var material_ventanas = document.getElementById('material_ventanasM').value;

    if (material_ventanas === "") {
        alert('Debe seleccionar un material de ventanas valido');
        return false;
    }

    var material_puertas = document.getElementById('material_puertasM').value;

    if (material_puertas === "") {
        alert('Debe seleccionar un material de puertas valido');
        return false;
    }

    var otros_materiales = document.getElementById('otros_materialesM').value;

    if (otros_materiales === "") {
        alert('Debe seleccionar otro material valido');
        return false;
    }

    var propietario = document.getElementById('propietarioM').value;
    var propietarioRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!propietarioRegex.test(propietario)) {
        alert('Debe ingresar un propietario valido');
        return false;
    }

    var valor_inmueble = document.getElementById('valor_inmuebleM').value;
    var inmuebleRegex = /^\d+(\s?\$|\s?Bs)$/;

    if (!inmuebleRegex.test(valor_inmueble)) {
        alert('Debe ingresar un valor inmueble valido debe ser: 23$ o 23Bs');
        return false;
    }

    var residenciados = document.getElementById('residenciadosM').value;
    var residenciadosRegex = /^\d{1,150}$/;

    if (!residenciadosRegex.test(residenciados)) {
        alert('Debe ingresar una cantidad de residenciados validaM');
        return false;
    }

    var ninos = document.getElementById('ninosM').value;
    var ninosRegex = /^\d{1,150}$/;

    if (!ninosRegex.test(ninos)) {
        alert('Debe ingresar una cantidad de niños valida');
        return false;
    }

    var adolescentes = document.getElementById('adolescentesM').value;
    var adolescentesRegex = /^\d{1,150}$/;

    if (!adolescentesRegex.test(adolescentes)) {
        alert('Debe ingresar una cantidad de adolescentes valida');
        return false;
    }

    var adultos = document.getElementById('adultosM').value;
    var adultosRegex = /^\d{1,150}$/;

    if (!adultosRegex.test(adultos)) {
        alert('Debe ingresar una cantidad de adultos valida');
        return false;
    }

    var informacion_adicional = document.getElementById('informacion_adicionalM').value;
    var informacion_adicionalRegex = /^.{1,150}$/;

    if (!informacion_adicionalRegex.test(informacion_adicional)) {
        alert('Informacion adicional Invalida, no debe contener saltos de linea ni estar vacia');
        return false;
    }

    var asegurado = document.getElementById('aseguradoM');
    var no_asegurado = document.getElementById('no_aseguradoM');

    if (!asegurado.checked && !no_asegurado.checked) {
        alert('Debe seleccionar si esta asegurado o no');
        return false;
    }

    var aseguradora = document.getElementById('aseguradoraM').value;

    if (aseguradora === "") {
        alert('Debe seleccionar un aseguradora');
        return false;
    }

    var numero_poliza = document.getElementById('numero_polizaM').value;
    var polizaRegex = /^[\d-_]{1,100}$/;

    if (!polizaRegex.test(numero_poliza)) {
        alert('Debe ingresar un numero de poliza valido');
        return false;
    }

    var valor_asegurado = document.getElementById('valor_aseguradoM').value;
    var aseguradoRegex = /^\d+(\s?\$|\s?Bs)$/;

    if (!aseguradoRegex.test(valor_asegurado)) {
        alert('Debe ingresar un valor valido, ejemplo: 28$ o 2800Bs');
        return false;
    }

    var valor_perdido = document.getElementById('valor_perdidoM').value;
    var perdidoRegex = /^\d+(\s?\$|\s?Bs)$/;

    if (!perdidoRegex.test(valor_perdido)) {
        alert('Debe ingresar un valor valido, ejemplo: 28$ o 2800Bs');
        return false;
    }

    var valor_salvado = document.getElementById('valor_salvadoM').value;
    var salvadoRegex = /^\d+(\s?\$|\s?Bs)$/;

    if (!salvadoRegex.test(valor_salvado)) {
        alert('Debe ingresar un valor valido, ejemplo: 28$ o 2800Bs');
        return false;
    }

    var fuente = document.getElementById('fuente_ignicionM').value;
    var fuenteRegex = /^[\w\s-_]{3,150}$/;

    if (!fuenteRegex.test(fuente)) {
        alert('Debe ingresar una fuente de ignicion valida');
        return false;
    }

    var causa_incendio = document.getElementById('causa_incendioM').value;
    var causaRegex = /^[\w\s-_]{3,150}$/;

    if (!causaRegex.test(causa_incendio)) {
        alert('Debe ingresar una causa de incendio valida');
        return false;
    }

    var lugar_inicio = document.getElementById('lugar_inicioM').value;
    var lugar_inicioRegex = /^[\w\s-_]{3,150}$/;

    if (!lugar_inicioRegex.test(lugar_inicio)) {
        alert('Debe ingresar un lugar de inicio de la ignicion valida');
        return false;
    }

    var lugar_fin = document.getElementById('lugar_finM').value;
    var lugar_finRegex = /^[\w\s-_]{3,150}$/;

    if (!lugar_finRegex.test(lugar_fin)) {
        alert('Debe ingresar un lugar de fin de la ignicion valida');
        return false;
    }

    var reignicion = document.getElementById('reignicionM');
    var no_reignicion = document.getElementById('no_reignicionM');

    if (!reignicion.checked && !no_reignicion.checked) {
        alert('Debe seleccionar si hubo reignicion o no');
        return false;
    }

    var tipo_combustible = document.getElementById('tipo_combustibleM').value;
    var tipo_combustibleRegex = /^[\w\s-_]{3,150}$/;

    if (!tipo_combustibleRegex.test(tipo_combustible)) {
        alert('Debe ingresar un tipo de combustible valido');
        return false;
    }

    var declaracion_incendio = document.getElementById('declaracionM').value;
    var declaracion_incendioRegex = /^.{1,150}$/;

    if (!declaracion_incendioRegex.test(declaracion_incendio)) {
        alert('Declaracion Invalida, no debe contener saltos de linea ni estar vacia');
        return false;
    }

    var lesion = document.getElementById('lesionM');
    var no_lesion = document.getElementById('no_lesionM');

    if (!lesion.checked && !no_lesion.checked) {
        alert('Debe seleccionar si hubo lesionados o no');
        return false;
    }

    var numero_lesionados = document.getElementById('numero_lesionadosM').value;
    var numero_lesionadosRegex = /^\d{1,150}$/;

    if (!numero_lesionadosRegex.test(numero_lesionados)) {
        alert('Debe ingresar una cantidad de lesionados valida');
        return false;
    }

    var cedula_lesionado = document.getElementById('cedula_lesionadoM').value;
    var cedula_lesionadoRegex = /^[JEVPGjevpg]{1}-\d{6,12}$/;

    if (!cedula_lesionadoRegex.test(cedula_lesionado)) {
        alert('Cedula invalida, use el siguiente formato de ejemplo: V-1231232')
        return false;
    }

    var recurso_utilizado = document.getElementById('recurso_utilizadoM').value;

    if (recurso_utilizado === "") {
        alert('Debe seleccionar un recurso utilizado');
        return false;
    }

    var unidad = document.getElementById('unidadM').value;

    if (unidad === "") {
        alert('Debe seleccionar una unidad');
        return false;
    }

    var jefe_comision = document.getElementById('jefe_comisionM').value;

    if (jefe_comision === "") {
        alert('Debe seleccionar un jefe de comision');
        return false;
    }

    var efectivo = document.getElementById('efectivoM').value;

    if (efectivo === "") {
        alert('Debe seleccionar un efectivo');
        return false;
    }

    var observaciones = document.getElementById('observacionesM').value;
    var observacionesRegex = /^.{1,150}$/;

    if (!observacionesRegex.test(observaciones)) {
        alert('Observacion Invalida, no debe contener saltos de linea ni estar vacia');
        return false;
    }

    return true;
}

//Validacion pantalla Datos Institucion 
function validarDatosInstitucion() {
    var nombre_institucion = document.getElementById('nombre_institucion').value;
    var nombre_institucionRegex = /^.{3,50}$/;

    if (!nombre_institucionRegex.test(nombre_institucion)) {
        alert('Debe ingresar un nombre valido para la institucion');
        return false;
    }

    var rif = document.getElementById('rif').value;
    var rifRegex = /^[JVPjvp]{1}-\d{8,9}$/;

    if (!rifRegex.test(rif)) {
        alert('Debe ingresar un rif valido respetando el ejemplo: J-123123123');
        return false;
    }

    var descripcion = document.getElementById('descripcion').value;
    var descripcionRegex = /^.{1,150}$/;

    if (!descripcionRegex.test(descripcion)) {
        alert('Descripcion Invalida, no debe contener saltos de linea ni estar vacia');
        return false;
    }

    return true;
}

//Validacion pantalla Lugar
function validarLugar() {
    var nombre_lugar = document.getElementById('nombre_lugar').value;
    var nombre_lugarRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!nombre_lugarRegex.test(nombre_lugar)) {
        alert('Ingrese un Nombre valido');
        return false;
    }

    var municipio = document.getElementById('municipio').value;

    if (municipio === "default") {
        alert('Debe seleccionar un municipio valido');
        return false;
    }

    var distancia = document.getElementById('distancia').value;
    var distanciaRegex = /^[0-9]+[kmKM/s]{1,50}$/;

    if (!distanciaRegex.test(distancia)) {
        alert('Debe ingresar una distancia valida, terminando KM o M');
        return false;
    }

    return true;
}

//Validacion pantalla Lugar Modificar
function validarLugarM() {
    var nombre_lugar = document.getElementById('nombre_lugarM').value;
    var nombre_lugarRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!nombre_lugarRegex.test(nombre_lugar)) {
        alert('Ingrese un Nombre valido');
        return false;
    }

    var municipio = document.getElementById('municipioM').value;

    if (municipio === "default") {
        alert('Debe seleccionar un municipio valido');
        return false;
    }

    var distancia = document.getElementById('distanciaM').value;
    var distanciaRegex = /^[0-9]+[kmKM/s]{1,50}$/;

    if (!distanciaRegex.test(distancia)) {
        alert('Debe ingresar una distancia valida, terminando KM o M');
        return false;
    }

    return true;
}

//Validacion pantalla Marca
function validarMarca() {
    var nombre_marca = document.getElementById('nombre_marca').value;
    var nombre_marcaRegex = /^.{3,50}$/;

    if (!nombre_marcaRegex.test(nombre_marca)) {
        alert('Debe ingresar un nombre valido');
        return false;
    }

    return true;
}

//Validacion pantalla Marca Modificar
function validarMarcaM() {
    var nombre_marcaM = document.getElementById('nombre_marcaM').value;
    var nombre_marcaMRegex = /^.{3,50}$/;

    if (!nombre_marcaMRegex.test(nombre_marcaM)) {
        alert('Debe ingresar un nombre valido');
        return false;
    }

    return true;
}

//Validacion pantalla Modelo
function validarModelo() {
    var marca_vehiculo = document.getElementById('marca_vehiculo').value;

    if (marca_vehiculo === "") {
        alert('Debe seleccionar una marca de vehiculo valida');
        return false;
    }

    var modelo_vehiculo = document.getElementById('modelo_vehiculo').value;
    var modelo_vehiculoRegex = /^.{3,50}$/;

    if (!modelo_vehiculoRegex.test(modelo_vehiculo)) {
        alert('Debe ingresar un modelo de vehiculo valido');
        return false;
    }

    return true;
}

//Validacion pantalla Modelo Modificar
function validarModeloM() {
    var marca_vehiculoM = document.getElementById('marca_vehiculoM').value;

    if (marca_vehiculoM === "") {
        alert('Debe seleccionar una marca de vehiculo valida');
        return false;
    }

    var modelo_vehiculoM = document.getElementById('modelo_vehiculoM').value;
    var modelo_vehiculoMRegex = /^.{3,50}$/;

    if (!modelo_vehiculoMRegex.test(modelo_vehiculoM)) {
        alert('Debe ingresar un modelo de vehiculo valido');
        return false;
    }

    return true;
}

//Validacion pantalla Municipio
function validarMunicipio() {
    var nombre_municipio = document.getElementById('nombre_municipio').value;
    var nombre_municipioRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!nombre_municipioRegex.test(nombre_municipio)) {
        alert('Debe ingresar un nombre de municipio valido');
        return false;
    }

    var codigo_municipio = document.getElementById('codigo_municipio').value;
    var codigo_municipioRegex = /^\d{4,5}$/;

    if (!codigo_municipioRegex.test(codigo_municipio)) {
        alert('Debe ingresar un codigo de municipio valido');
        return false;
    }




    return true;
}

//Validacion pantalla Recurso Inoperativo
function validarRecursoInoperativo() {
    var recurso_inoperativo = document.getElementById('recurso_inoperativo').value;

    if (recurso_inoperativo === "") {
        alert('Debe seleccionar un recurso que haya quedado inoperativo');
        return false;
    }

    var cantidad_recursoI = document.getElementById('cantidad_recursoI').value;
    var cantidad_recursoIRegex = /^.{3,50}$/;

    if (!cantidad_recursoIRegex.test(cantidad_recursoI)) {
        alert('Debe ingresar la cantidad de recurso que este inoperativo');
        return false;
    }

    return true;
}

//Validacion pantalla Recurso 
function validarRecurso() {

    var nombre_recurso = document.getElementById('nombre_recurso').value;
    var nombre_recursoRegex =  /^.{3,50}$/;

    if (!nombre_recursoRegex.test(nombre_recurso)) {
        alert('Debe ingresar el nombre de un recurso');
        return false;
    }

    var tipo_recurso = document.getElementById('tipo_recurso').value;

    if (tipo_recurso === "") {
        alert('Debe seleccionar un tipo de recurso');
        return false;
    }

    return true;
}

//Validacion pantalla Recurso Modificar
function validarRecursoM() {

    var nombre_recurso = document.getElementById('nombreM').value;
    var nombre_recursoRegex = /^.{3,50}$/;

    if (!nombre_recursoRegex.test(nombre_recurso)) {
        alert('Debe ingresar el nombre de un recurso');
        return false;
    }

    var tipo_recurso = document.getElementById('tipoM').value;

    if (tipo_recurso === "") {
        alert('Debe seleccionar un tipo de recurso');
        return false;
    }

    return true;
}

//Validacion pantalla Ruta
function validarRuta() {
    var municipio = document.getElementById('municipio').value;

    if (municipio === "") {
        alert('Debe seleccionar un municipio');
        return false;
    }

    var nombre_ruta = document.getElementById('nombre_ruta').value;
    var nombre_rutaRegex = /^.{3,50}$/;

    if (!nombre_rutaRegex.test(nombre_ruta)) {
        alert('Debe ingresar el nombre de un ruta');
        return false;
    }

    return true;
}

// Validacion de pantalla Cargo de Bomberos
function validarCargo() {
    var cargo = document.getElementById('cargo').value;
    var cargoRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!cargoRegex.test(cargo)) {
        alert('Debe ingresar un Cargo valido');
        return false;
    }

    return true;
}

// Validacion de pantalla Cargo de Bomberos Modificar
function validarCargoM() {
    var cargoM = document.getElementById('cargoM').value;
    var cargoMRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!cargoMRegex.test(cargoM)) {
        alert('Debe ingresar un Cargo valido');
        return false;
    }

    return true;
}

//Validacion pantalla Tipo Persona
function validarTipoPersona() {
    var tipo_persona = document.getElementById('tipo_persona').value;
    var tipo_personaRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;;

    if (!tipo_personaRegex.test(tipo_persona)) {
        alert('Ingrese un tipo de persona valido');
        return false;
    }

    var descripcion = document.getElementById('descripcion').value;
    var descripcionRegex = /^.{1,150}$/;

    if (!descripcionRegex.test(descripcion)) {
        alert('Descripcion Invalida, no debe contener saltos de linea ni estar vacia');
        return false;
    }

    return true;
}

//Validacion pantalla Tipo Persona Modificar
function validarTipoPersonaM() {
    var tipo_personaM = document.getElementById('tipo_personaM').value;
    var tipo_personaMRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;;

    if (!tipo_personaMRegex.test(tipo_personaM)) {
        alert('Ingrese un tipo de persona valido');
        return false;
    }

    var descripcion = document.getElementById('descripcionM').value;
    var descripcionRegex = /^.{1,150}$/;

    if (!descripcionRegex.test(descripcion)) {
        alert('Descripcion Invalida, no debe contener saltos de linea ni estar vacia');
        return false;
    }

    return true;
}

//Validacion pantalla Usuario
function validarUsuario() {
    var cedula = document.getElementById('cedula').value;
    var cedulaRegex = /^[JEVPGjevpg]{1}-\d{6,12}$/;

    if (!cedulaRegex.test(cedula)) {
        alert('Cedula invalida, use el siguiente formato de ejemplo: V-1231232')
        return false;
    }

    var nombre_usuario = document.getElementById('nombre_usuario').value;
    var nombre_usuarioRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\d]{6,20}$/;

    if (!nombre_usuarioRegex.test(nombre_usuario)) {
        alert('Ingrese un Nombre de usuario valido');
        return false;
    }

    var clave = document.getElementById('clave').value;
    var claveRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\d]{6,20}$/;

    if (!claveRegex.test(clave)) {
        alert('Ingrese una clave valida, debe tener entre 6-20 caracteres y no debe tener caracteres especiales');
        return false;
    }

    var clave_repetida = document.getElementById('clave_repetida').value;

    if (clave_repetida !== clave) {
        alert('Las claves no coinciden');
        return false;
    }
    return true;
}

//Validacion pantalla Usuario Modificar
function validarUsuarioM() {
    var cedulaM = document.getElementById('cedulaM').value;
    var cedulaMRegex = /^[JEVPGjevpg]{1}-\d{6,12}$/;

    if (!cedulaMRegex.test(cedulaM)) {
        alert('Cedula invalida, use el siguiente formato de ejemplo: V-1231232')
        return false;
    }

    var nombre_usuarioM = document.getElementById('nombre_usuarioM').value;
    var nombre_usuarioMRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\d]{6,20}$/;

    if (!nombre_usuarioMRegex.test(nombre_usuarioM)) {
        alert('Ingrese un Nombre de usuario valido');
        return false;
    }

    var claveM = document.getElementById('claveM').value;
    var claveMRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\d]{6,20}$/;

    if (!claveMRegex.test(claveM)) {
        alert('Ingrese una clave valida, debe tener entre 6-20 caracteres y no debe tener caracteres especiales');
        return false;
    }

    var clave_repetidaM = document.getElementById('clave_repetidaM').value;

    if (clave_repetidaM !== claveM) {
        alert('Las claves no coinciden');
        return false;
    }
    return true;
}

//Validacion pantalla Vehiculo
function validarVehiculo() {

    var identidad_vehicular = document.getElementById('identidad_vehicular').value;
    var identidad_vehicularRegex = /^[a-zA-Z\d-_]{3,50}$/;

    if (!identidad_vehicularRegex.test(identidad_vehicular)) {
        alert('Ingrese una identidad vehicular valida');
        return false;
    }

    var tipo_vehiculo = document.getElementById('tipo_vehiculo').value;

    if (tipo_vehiculo === "") {
        alert('Debe seleccionar el tipo de vehiculo');
        return false;
    }

    var numero_unidad = document.getElementById('nunidad').value;
    var numero_unidadRegex = /^[a-zA-Z\d-_]{3,50}$/;

    if (!numero_unidadRegex.test(numero_unidad)) {
        alert('Ingrese un numero de unidad valido');
        return false;
    }

    var marca = document.getElementById('marca').value;

    if (marca === "") {
        alert('Debe seleccionar una marca de vehiculo');
        return false;
    }

    var modelo = document.getElementById('modelo').value;

    if (modelo === "") {
        alert('Debe seleccionar un modelo de vehiculo');
        return false;
    }

    var serial = document.getElementById('serial').value;
    var serialRegex = /^[a-zA-Z\d-_]{3,50}$/;

    if (!serialRegex.test(serial)) {
        alert('Ingrese un serial valido, debe tener entre 3-50 caracteres y no debe tener caracteres especiales');
        return false;
    }

    var cilindrada = document.getElementById('cilindrada').value;
    var cilindradaRegex = /^\d+(CC|cc|HP|hp)$/;

    if (!cilindradaRegex.test(cilindrada)) {
        alert('Debe especificar la cilindrada del vehiculo con el siguiente patron: 100CC, 100cc, 100HP o 100hp');
        return false;
    }

    var carburante = document.getElementById('carburante').value;
    var carburanteRegex = /^.{3,50}$/;

    if (!carburanteRegex.test(carburante)) {
        alert('Ingrese un carburante valido');
        return false;
    }

    var estado_seguro = document.getElementById('estado_seguro').value;

    if (estado_seguro === "") {
        alert('Debe seleccionar en que estado se encuentra el seguro del vehiculo');
        return false;
    }

    var cedula_propietario = document.getElementById('cedula_propietario').value;
    var cedula_propietarioRegex = /^[JEVPGjevpg]{1}-\d{6,12}$/;

    if (!cedula_propietarioRegex.test(cedula_propietario)) {
        alert('Cedula invalida, use el siguiente formato de ejemplo: V-1231232')
        return false;
    }

    return true;
}

//Validacion pantalla Vehiculo Modificar
function validarVehiculoM() {

    var identidad_vehicular = document.getElementById('nivM').value;
    var identidad_vehicularRegex = /^[a-zA-Z\d-_]{3,50}$/;

    if (!identidad_vehicularRegex.test(identidad_vehicular)) {
        alert('Ingrese una identidad vehicular valida');
        return false;
    }

    var tipo_vehiculo = document.getElementById('tipoM').value;

    if (tipo_vehiculo === "") {
        alert('Debe seleccionar el tipo de vehiculo');
        return false;
    }

    var numero_unidad = document.getElementById('nunidadM').value;
    var numero_unidadRegex = /^[a-zA-Z\d-_]{3,50}$/;

    if (!numero_unidadRegex.test(numero_unidad)) {
        alert('Ingrese un numero de unidad valido');
        return false;
    }

    var marca = document.getElementById('marcaM').value;

    if (marca === "") {
        alert('Debe seleccionar una marca de vehiculo');
        return false;
    }

    var modelo = document.getElementById('modeloM').value;

    if (modelo === "") {
        alert('Debe seleccionar un modelo de vehiculo');
        return false;
    }

    var serial = document.getElementById('serialM').value;
    var serialRegex = /^[a-zA-Z\d-_]{3,50}$/;

    if (!serialRegex.test(serial)) {
        alert('Ingrese un serial valido, debe tener entre 3-50 caracteres y no debe tener caracteres especiales');
        return false;
    }

    var cilindrada = document.getElementById('cilindradaM').value;
    var cilindradaRegex = /^\d+(CC|cc|HP|hp)$/;

    if (!cilindradaRegex.test(cilindrada)) {
        alert('Debe especificar la cilindrada del vehiculo con el siguiente patron: 100CC, 100cc, 100HP o 100hp');
        return false;
    }

    var carburante = document.getElementById('carburanteM').value;
    var carburanteRegex = /^.{3,50}$/;

    if (!carburanteRegex.test(carburante)) {
        alert('Ingrese un carburante valido');
        return false;
    }

    var estado_seguro = document.getElementById('seguroM').value;

    if (estado_seguro === "") {
        alert('Debe seleccionar en que estado se encuentra el seguro del vehiculo');
        return false;
    }

    var cedula_propietario = document.getElementById('cedulaM').value;
    var cedula_propietarioRegex = /^[JEVPGjevpg]{1}-\d{6,12}$/;

    if (!cedula_propietarioRegex.test(cedula_propietario)) {
        alert('Cedula invalida, use el siguiente formato de ejemplo: V-1231232')
        return false;
    }

    return true;
}


//Validacion pantalla de Transito
function validarTransito() {
    var parte_diaria = document.getElementById('parte_diaria').value;
    parteRegex = /^[\d]{2}\-[\d]{2}\-[\d]{4}$/;

    if (!parteRegex.test(parte_diaria)) {
        alert('Debe ingresar una fecha valida con el siguiente formato: DD-MM-YYYY respetando los guiones');
        return false;
    }

    var seccion = document.getElementById('seccion').value;

    if (seccion === "") {
        alert('Debe seleccionar una seccion');
        return false;
    }

    var estacion = document.getElementById('estacion').value;

    if (estacion === "") {
        alert('Debe seleccionar una estacion');
        return false;
    }

    var inspeccion = document.getElementById('inspeccion');
    var no_inspeccion = document.getElementById('no_inspeccion');

    if (!inspeccion.checked && !no_inspeccion.checked) {
        alert('Debe seleccionar si amerita inspeccion o no');
        return false;
    }

    var tipo_aviso = document.getElementById('tipo_aviso').value;

    if (tipo_aviso === "") {
        alert('Debe seleccionar un tipo aviso');
        return false;
    }

    var nombre_solicitante = document.getElementById('nombre_solicitante').value;
    var solicitanteRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;;

    if (!solicitanteRegex.test(nombre_solicitante)) {
        alert('Ingrese un Nombre valido');
        return false;
    }

    var hora_aviso = document.getElementById('hora_aviso').value;
    avisoRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!avisoRegex.test(hora_aviso)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_salida = document.getElementById('hora_salida').value;
    salidaRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!salidaRegex.test(hora_salida)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_llegada = document.getElementById('hora_llegada').value;
    llegadaRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!llegadaRegex.test(hora_llegada)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var hora_regreso = document.getElementById('hora_regreso').value;
    regresoRegex = /^((1[0-2]|0?[1-9]):([0-5][0-9])\s?[AP]M)$/i;

    if (!llegadaRegex.test(hora_regreso)) {
        alert('Debe ingresar una hora valida en formato 12H: 10:24 AM');
        return false;
    }

    var marca = document.getElementById('marca').value;

    if (marca === "") {
        alert('Debe seleccionar una marca de vehiculo');
        return false;
    }

    var modelo = document.getElementById('modelo').value;

    if (modelo === "") {
        alert('Debe seleccionar un modelo de vehiculo');
        return false;
    }

    var year = document.getElementById('year').value;

    if (year === "") {
        alert('Debe seleccionar el año del vehiculo');
        return false;
    }

    var color_vehiculo = document.getElementById('color_vehiculo').value;

    if (color_vehiculo === "") {
        alert('Debe seleccionar el color del vehiculo');
        return false;
    }

    var placa_vehiculo = document.getElementById('placa_vehiculo').value;

    if (placa_vehiculo === "") {
        alert('Debe seleccionar la placa del vehiculo');
        return false;
    }

    var conductor_vehiculo = document.getElementById('conductor_vehiculo').value;

    if (conductor_vehiculo === "") {
        alert('Debe seleccionar al conductor del vehiculo');
        return false;
    }

    var cedula_conductor = document.getElementById('cedula_conductor').value;
    var cedula_conductorRegex = /^[JEVPGjevpg]{1}-\d{6,12}$/;

    if (!cedula_conductorRegex.test(cedula_conductor)) {
        alert('Cedula invalida, use el siguiente formato de ejemplo: V-1231232')
        return false;
    }

    var lesion = document.getElementById('lesion');
    var no_lesion = document.getElementById('no_lesion');

    if (!lesion.checked && !no_lesion.checked) {
        alert('Debe seleccionar si hubo lesionados o no');
        return false;
    }

    var numero_lesionados = document.getElementById('numero_lesionados').value;
    var numero_lesionadosRegex = /^\d{1,150}$/;

    if (!numero_lesionadosRegex.test(numero_lesionados)) {
        alert('Debe ingresar una cantidad de lesionados valida');
        return false;
    }

    var occisos = document.getElementById('occisos');
    var no_occisos = document.getElementById('no_occisos');

    if (!occisos.checked && !no_occisos.checked) {
        alert('Debe seleccionar si hubo occisos o no');
        return false;
    }

    var numero_occisos = document.getElementById('numero_occisos').value;
    var numero_occisosRegex = /^\d{1,150}$/;

    if (!numero_occisosRegex.test(numero_occisos)) {
        alert('Debe ingresar una cantidad de occisos valida');
        return false;
    }

    var observaciones = document.getElementById('observaciones').value;
    var observacionesRegex = /^.{1,150}$/;

    if (!observacionesRegex.test(observaciones)) {
        alert('Observacion Invalida, no debe contener saltos de linea ni estar vacia');
        return false;
    }

    var incendios = document.getElementById('incendios');
    var no_incendios = document.getElementById('no_incendios');

    if (!incendios.checked && !no_incendios.checked) {
        alert('Debe seleccionar si hubo incendios o no');
        return false;
    }

    var jefe_comision = document.getElementById('jefe_comision').value;

    if (jefe_comision === "") {
        alert('Debe seleccionar un jefe de comision');
        return false;
    }

    var efectivo = document.getElementById('efectivo').value;

    if (efectivo === "") {
        alert('Debe seleccionar un efectivo');
        return false;
    }

    var unidad = document.getElementById('unidad').value;

    if (unidad === "") {
        alert('Debe seleccionar una unidad');
        return false;
    }

    return true;
}

//Validacion pantalla Tipo Incidente
function validarTipoIncidente() {
    var tipo_incidente = document.getElementById('tipo_incidente').value;
    var tipo_incidenteRegex = /^[a-zA-Z0-9\s]{3,150}$/;

    if (!tipo_incidenteRegex.test(tipo_incidente)) {
        alert('Debe ingresar un tipo de incidente');
        return false;
    }

    return true;
}

//Validacion pantalla Tipo Incidente Modificar
function validarTipoIncidenteM() {
    var tipo_incidenteM = document.getElementById('tipo_incidenteM').value;
    var tipo_incidenteMRegex = /^[a-zA-Z0-9\s]{3,150}$/;

    if (!tipo_incidenteMRegex.test(tipo_incidenteM)) {
        alert('Debe ingresar un tipo de incidente');
        return false;
    }

    return true;
}