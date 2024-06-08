"use strict";

const filas = document.querySelectorAll(".fila");
const idborrar = document.getElementById("idBorrar");
const id = document.getElementById("id");
const municipio = document.getElementById("municipioM");
const nombre = document.getElementById("nombreM");
const distancia = document.getElementById("distanciaM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children;
       id.value = columnas[0].textContent;
       nombre.value = columnas[1].textContent;
       municipio.value = columnas[2].textContent; 
       distancia.value = columnas[3].textContent;
       console.log(columnas);
       
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});