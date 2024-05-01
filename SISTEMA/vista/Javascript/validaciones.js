//Validacion de Pantalla Estacion
function validarEstacion() {
    var nombre_estacion = document.getElementById('nombre_estacion').value;
    var nameRegex = /^.{3,50}$/;

    if (!nameRegex.test(nombre_estacion)) {
        alert('Nombre invalido');
        return false;
    }

    return true;
}

//Validacion de Pantalla Seccion
function validarSeccion() {
    var nombre_seccion = document.getElementById('nombre_seccion').value;
    var seccionRegex = /^.{3,50}$/;

    if (!seccionRegex.test(nombre_seccion)) {
        alert('Ingrese una seccion valida');
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
    var personaRegex = /^[a-zA-Z\s]{3,50}$/;

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

    var tipo_persona = document.getElementById('tipo_persona').value;

    if (tipo_persona === "") {
        alert('Debe seleccionar el tipo de persona');
        return false;
    }

    var cargo = document.getElementById('cargo').value;
    var cargoRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,50}$/;

    if (!cargoRegex.test(cargo)) {
        alert('Ingrese un cargo valido');
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