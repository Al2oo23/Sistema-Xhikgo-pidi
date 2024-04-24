"use strict";

const filas = document.querySelectorAll(".filas");
const municipio = document.getElementById("municipio");
const estado = document.getElementById("estado");
const modal = document.getElementById("modal");

filas.forEach(fila => {
    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       municipio.value = columnas[0].textContent
       estado.value = columnas[1].textContent
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});