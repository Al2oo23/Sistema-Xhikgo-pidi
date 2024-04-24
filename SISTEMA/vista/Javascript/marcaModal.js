"use strict";

const filas = document.querySelectorAll(".filas");
const marca = document.getElementById("marca");
const modal = document.getElementById("modal");

filas.forEach(fila => {

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       marca.value = columnas[0].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) =>{
    e.stopPropagation();
});