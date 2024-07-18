"use strict";

const filas = document.querySelectorAll(".fila");
const idborrar = document.getElementById("idBorrar");
const id = document.getElementById("id");
const tipo = document.getElementById("tipo_personaM");
const descripcion = document.getElementById("descripcionM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       id.value = columnas[0].textContent
       tipo.value = columnas[1].textContent
       descripcion.value = columnas[2].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) =>{
    e.stopPropagation();
});