"use strict";

const filas = document.querySelectorAll(".fila");
const id = document.getElementById("id");
const fecha = document.getElementById("fechaM");
//const seccion = document.getElementById("seccionM");
//const estacion = document.getElementById("estacionM");
//const incidente = document.getElementById("tipoM");
//const taviso = document.getElementById("tavisoM");
const solicitante = document.getElementById("solicitanteM");
const recibido = document.getElementById("recibidoM");
const haviso = document.getElementById("avisoM");
const hsalida = document.getElementById("salidaM");
const hllegada = document.getElementById("llegadaM");
const hregreso = document.getElementById("regresoM");
const niv = document.getElementById("nivM");
const lesionados = document.getElementById("lesionadosM");
const occisos = document.getElementById("occisosM");
const observaciones = document.getElementById("observacionesM");
//const recurso = document.getElementById("recursoM");
const cantidad = document.getElementById("cantidadM");
const jefe = document.getElementById("jefeM");
const efectivo = document.getElementById("efectivoM");
const unidad = document.getElementById("unidadM");
const ci_pnb = document.getElementById("pnbM");
const ci_gnb = document.getElementById("gnbM");
const ci_intt = document.getElementById("inttM");
const ci_invity = document.getElementById("invityM");
const ci_pc = document.getElementById("pcM");
const ci_otro = document.getElementById("otroM");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       id.value = columnas[0].textContent
       fecha.value = columnas[1].textContent
       solicitante.value = columnas[8].textContent
       recibido.value = columnas[9].textContent
       haviso.value = columnas[10].textContent
       hsalida.value = columnas[11].textContent
       hllegada.value = columnas[12].textContent
       hregreso.value = columnas[13].textContent
       niv.value = columnas[14].textContent
       lesionados.value = columnas[15].textContent
       occisos.value = columnas[16].textContent
       observaciones.value = columnas[17].textContent
       cantidad.value = columnas[20].textContent
       jefe.value = columnas[21].textContent
       efectivo.value = columnas[22].textContent
       ci_pnb.value = columnas[24].textContent
       ci_gnb.value = columnas[25].textContent
       ci_intt.value = columnas[26].textContent
       ci_invity.value = columnas[27].textContent
       ci_pc.value = columnas[28].textContent
       ci_otro.value = columnas[29].textContent

       console.log(columnas);
    });
});

// Detener la propagación del evento de click cuando se hace click en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});

