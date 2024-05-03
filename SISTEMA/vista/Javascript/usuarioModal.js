"use strict";

const filas = document.querySelectorAll(".filas");
const cedula = document.getElementById("cedulaM");
const tusuario = document.getElementById("tusuarioM");
const nombre = document.getElementById("nombreM");
const clave = document.getElementById("claveM");
const estado = document.getElementById("estadoM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       cedula.value = columnas[0].textContent
       tusuario.value = columnas[1].textContent
       nombre.value = columnas[2].textContent
       clave.value = columnas[3].textContent
       estado.value = columnas[4].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});