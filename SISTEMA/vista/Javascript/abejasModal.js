"use strict";

const filas = document.querySelectorAll(".fila");
const id = document.getElementById("id");
const fecha = document.getElementById("fechaM");
const seccion = document.getElementById("seccionM");
const estacion = document.getElementById("estacionM");
const taviso = document.getElementById("tavisoM");
const solicitante = document.getElementById("solicitanteM");
const haviso = document.getElementById("havisoM");
const hsalida = document.getElementById("hsalidaM");
const hllegada = document.getElementById("hllegadaM");
const hregreso = document.getElementById("hregresoM");
const panal = document.getElementById("ubicacionM");
const direccion = document.getElementById("direccionM");
const lugar = document.getElementById("lugarM");
const inmueble = document.getElementById("inmuebleM");
const jefe = document.getElementById("jefeM");
const recurso = document.getElementById("recursoM");
const cantidad = document.getElementById("cantidadM");
const efectivo = document.getElementById("efectivoM");
const unidad = document.getElementById("unidadM");
const ci_pnb = document.getElementById("ci_pnb");
const ci_gnb = document.getElementById("ci_gnb");
const ci_intt = document.getElementById("ci_intt");
const ci_invity = document.getElementById("ci_invity");
const ci_pc = document.getElementById("ci_pc");
const ci_otro = document.getElementById("ci_otro");
const acta = document.getElementById("actaM");
const observaciones = document.getElementById("observacionesM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       id.value = columnas[0].textContent
       fecha.value = columnas[1].textContent
       seccion.value = columnas[2].textContent
       estacion.value = columnas[3].textContent
       taviso.value = columnas[4].textContent
       solicitante.value = columnas[5].textContent
       haviso.value = columnas[6].textContent
       hsalida.value = columnas[7].textContent
       hllegada.value = columnas[8].textContent
       hregreso.value = columnas[9].textContent
       panal.value = columnas[10].textContent
       direccion.value = columnas[11].textContent
       lugar.value = columnas[12].textContent
       inmueble.value = columnas[13].textContent
       jefe.value = columnas[14].textContent
       recurso.value = columnas[15].textContent
       cantidad.value = columnas[16].textContent
       efectivo.value = columnas[17].textContent
       unidad.value = columnas[18].textContent
       ci_pnb.value = columnas[19].textContent
       ci_gnb.value = columnas[20].textContent
       ci_intt.value = columnas[21].textContent
       ci_invity.value = columnas[22].textContent
       ci_pc.value = columnas[23].textContent
       ci_otro.value = columnas[24].textContent
       acta.value = columnas[25].textContent
       observaciones.value = columnas[26].textContent

       console.log(columnas);
    });
});

// Detener la propagación del evento de click cuando se hace click en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});

