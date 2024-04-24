"use strict";

const filas = document.querySelectorAll(".filas");
const nombre = document.getElementById("nombre");
const tipo = document.getElementById("tipo");
const modal = document.getElementById("modal");

filas.forEach(fila => {

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       nombre.value = columnas[0].textContent
       tipo.value = columnas[1].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) =>{
    e.stopPropagation();
});