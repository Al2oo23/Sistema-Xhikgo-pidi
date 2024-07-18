function cambiarTamano() {
    var tamano = document.getElementById("tamano").value;
    var catalogo = document.getElementById("catalogo");

    // Definir el nuevo tamaño en base a la selección
    var nuevoTamano = '';
    if (tamano === 'pequeno') {
        nuevoTamano = 'col-5';
    } else if (tamano === 'mediano') {
        nuevoTamano = 'col-7';
    } else if (tamano === 'grande') {
        nuevoTamano = 'col-9';
    } else if (tamano === 'extragrande') {
        nuevoTamano = 'col-12';
    }

    // Eliminar la clase actual que empieza con 'col-'
    catalogo.className = catalogo.className.replace(/\bcol-\d+\b/g, '');

    // Agregar la nueva clase
    catalogo.classList.add(nuevoTamano);
}