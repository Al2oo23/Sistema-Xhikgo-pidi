"use strict";

const filas = document.querySelectorAll(".filas");
const municipio = document.getElementById("municipioM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       municipio.value = columnas[0].textContent
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});