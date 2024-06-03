"use strict";

const filas = document.querySelectorAll(".fila");
const niv = document.getElementById("nivM");
const tvehiculo = document.getElementById("tvehiculoM");
const nunidad = document.getElementById("nunidadM");
const marca = document.getElementById("marcaM");
const modelo = document.getElementById("modeloM");
const serial = document.getElementById("serialM");
const cilindro = document.getElementById("cilindroM");
const carburante = document.getElementById("carburanteM");
const seguro = document.getElementById("seguroM");
const cedula = document.getElementById("cedulaM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       niv.value = columnas[0].textContent
       tvehiculo.value = columnas[1].textContent
       nunidad.value = columnas[2].textContent
       marca.value = columnas[3].textContent
       modelo.value = columnas[4].textContent
       serial.value = columnas[5].textContent
       cilindro.value = columnas[6].textContent
       carburante.value = columnas[7].textContent
       seguro.value = columnas[8].textContent
       cedula.value = columnas[9].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de clic cuando se hace clic en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});