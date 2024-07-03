"use strict";

const filas = document.querySelectorAll(".fila");
const cedula = document.getElementById("cedulaPriv");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       cedula.value = columnas[0].textContent
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});