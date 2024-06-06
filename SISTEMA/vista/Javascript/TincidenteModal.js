"use strict";
console.log ("taylor")
const filas = document.querySelectorAll(".fila");
const id = document.getElementById("id");
const idborrar = document.getElementById("idBorrar");
const incidente = document.getElementById("TincidenteM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {

    fila.addEventListener("click",(e)=>{ 
       const columnas = fila.children
       id.value = columnas[0].textContent
       incidente.value = columnas[1].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) =>{
    e.stopPropagation();
});