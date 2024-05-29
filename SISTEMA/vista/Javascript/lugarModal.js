"use strict";

const filas = document.querySelectorAll(".filas");
const municipio = document.getElementById("municipioM");
const nombre = document.getElementById("nombreM");
const distancia = document.getElementById("distanciaM");
const modal = document.getElementById("modalM");
const id = document.getElementById("id");

filas.forEach(fila => {

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children;
       id.value = columnas[0].textContent;
       municipio.value = columnas[1].textContent; 
       nombre.value = columnas[2].textContent;
       distancia.value = columnas[3].textContent;
       console.log(columnas[0]);
       
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});