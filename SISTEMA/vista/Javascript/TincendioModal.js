"use strict";

const filas = document.querySelectorAll(".fila");
const id = document.getElementById("id");
const idborrar = document.getElementById("idBorrar");
const tincendio = document.getElementById("tipo_incendioM");
const modal = document.getElementById("modalM");


filas.forEach(fila => {
    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       id.value = columnas[0].textContent
       tincendio.value = columnas[1].textContent
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});

