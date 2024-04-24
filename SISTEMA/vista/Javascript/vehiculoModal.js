"use strict";

const filas = document.querySelectorAll(".filas");
const niv = document.getElementById("niv");
const tvehiculo = document.getElementById("tvehiculo");
const nunidad = document.getElementById("nunidad");
const marca = document.getElementById("marca");
const modelo = document.getElementById("modelo");
const serial = document.getElementById("serial");
const cilindro = document.getElementById("cilindro");
const carburante = document.getElementById("carburante");
const seguro = document.getElementById("seguro");
const cedula = document.getElementById("cedula");
const modal = document.getElementById("modal");

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