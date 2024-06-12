"use strict";

const filas = document.querySelectorAll(".fila");
const cedula = document.getElementById("cedulaM");
const nombre = document.getElementById("nombreM");
const clave = document.getElementById("claveM");
const pregunta = document.getElementById("preguntaM");
const respuesta = document.getElementById("respuestaM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
     
    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       cedula.value = columnas[0].textContent
       nombre.value = columnas[1].textContent
       clave.value = columnas[2].textContent
       pregunta.value = columnas[3].textContent
       respuesta.value = columnas[4].textContent
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});