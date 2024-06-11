"use strict";

const filas = document.querySelectorAll(".fila");
const idborrar = document.getElementById("idBorrar");
const cedula = document.getElementById("cedulaM");
const nombre = document.getElementById("nombreM");
const edad = document.getElementById("edadM");
const correo = document.getElementById("correoM");
const telefono = document.getElementById("telefonoM");
const cargo = document.getElementById("cargoM");
const direccion = document.getElementById("direccionM");
const sexo = document.getElementById("sexoM");
const tpersona = document.getElementById("tpersonaM");
const seccion = document.getElementById("seccionM");
const estacion = document.getElementById("estacionM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       cedula.value = columnas[0].textContent
       nombre.value = columnas[1].textContent
       edad.value = columnas[2].textContent
       correo.value = columnas[3].textContent
       telefono.value = columnas[4].textContent
       direccion.value = columnas[5].textContent
       sexo.value = columnas[6].textContent
       tpersona.value = columnas[7].textContent
       cargo.value = columnas[8].textContent
       seccion.value = columnas[9].textContent
       estacion.value = columnas[10].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de click cuando se hace click en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});