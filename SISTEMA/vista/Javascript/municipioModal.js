"use strict";

const filas = document.querySelectorAll(".fila");
const id = document.getElementById("id");
const idborrar = document.getElementById("idBorrar");
const municipio = document.getElementById("municipioM");
const codigo = document.getElementById("codigoM");
const modal = document.getElementById("modalM");


filas.forEach(fila => {
    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       id.value = columnas[0].textContent
       municipio.value = columnas[1].textContent
       codigo.value = columnas[2].textContent
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});