"use strict";

const filas = document.querySelectorAll(".fila");
const id = document.getElementById("id");
const tipo = document.getElementById("tipoM");
const nombre = document.getElementById("nombreM");
const cantidad = document.getElementById("cantidadM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       id.value = columnas[0].textContent
       tipo.value = columnas[1].textContent
       nombre.value = columnas[2].textContent
       cantidad.value = columnas[3].textContent

       console.log(columnas);
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) =>{
    e.stopPropagation();
});