"use strict";

const filas = document.querySelectorAll(".filas");
const tlugar = document.getElementById("tlugar");
const estado = document.getElementById("estado");
const municipio = document.getElementById("municipio");
const nombre = document.getElementById("nombre");
const modal = document.getElementById("modal");

filas.forEach(fila => {

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       tlugar.value = columnas[0].textContent
       estado.value = columnas[1].textContent
       municipio.value = columnas[2].textContent
       nombre.value = columnas[3].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});