"use strict";

const filas = document.querySelectorAll(".filas");
const tipo = document.getElementById("tipo");
const fecha = document.getElementById("fecha");
const seccion = document.getElementById("seccion");
const nunidad = document.getElementById("nunidad");
const cedula = document.getElementById("cedula");
const aviso = document.getElementById("aviso");
const salida = document.getElementById("salida");
const llegada = document.getElementById("llegada");
const regreso = document.getElementById("regreso");
const municipio = document.getElementById("municipio");
const direccion = document.getElementById("direccion");
const ruta = document.getElementById("ruta");


const modal = document.getElementById("modal");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       tipo.value = columnas[0].textContent
       fecha.value = columnas[1].textContent
       seccion.value = columnas[2].textContent
       nunidad.value = columnas[3].textContent
       cedula.value = columnas[4].textContent
       aviso.value = columnas[5].textContent
       salida.value = columnas[6].textContent
       llegada.value = columnas[7].textContent
       regreso.value = columnas[8].textContent
       municipio.value = columnas[9].textContent
       direccion.value = columnas[10].textContent
       ruta.value = columnas[11].textContent
       console.log(columnas);
    });
});

// Detener la propagación del evento de click cuando se hace click en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});