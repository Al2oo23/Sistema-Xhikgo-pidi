"use strict";

const filas = document.querySelectorAll(".fila");
const id = document.getElementById("id");
const numero = document.getElementById("numero_seccionM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       id.value = columnas[0].textContent
       numero.value = columnas[1].textContent

       console.log(columnas);
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) =>{
    e.stopPropagation();
});