"use strict";

const filas = document.querySelectorAll(".fila");
const id = document.getElementById("id");
const idborrar = document.getElementById("idBorrar");
const marca = document.getElementById("marca_vehiculoM");
const modelo = document.getElementById("modelo_vehiculoM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       id.value = columnas[0].textContent
       marca.value = columnas[1].textContent
       modelo.value = columnas[2].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});