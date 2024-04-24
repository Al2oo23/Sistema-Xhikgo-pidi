"use strict";

const filas = document.querySelectorAll(".filas");
const cedula = document.getElementById("cedula");
const nombre = document.getElementById("nombre");
const edad = document.getElementById("edad");
const correo = document.getElementById("correo");
const telefono = document.getElementById("telefono");
const cargo = document.getElementById("cargo");
const direccion = document.getElementById("direccion");
const sexo = document.getElementById("sexo");
const tpersona = document.getElementById("tpersona");
const seccion = document.getElementById("seccion");
const estacion = document.getElementById("estacion");
const modal = document.getElementById("modal");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       cedula.value = columnas[0].textContent
       nombre.value = columnas[1].textContent
       edad.value = columnas[2].textContent
       correo.value = columnas[3].textContent
       telefono.value = columnas[4].textContent
       cargo.value = columnas[5].textContent
       direccion.value = columnas[6].textContent
       sexo.value = columnas[7].textContent
       tpersona.value = columnas[8].textContent
       seccion.value = columnas[9].textContent
       estacion.value = columnas[10].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de click cuando se hace click en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});