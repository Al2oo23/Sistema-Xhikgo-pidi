"use strict";

const filas = document.querySelectorAll(".fila");
const id = document.getElementById("id");
const fecha = document.getElementById("fechaM");
const seccion = document.getElementById("seccionM");
const estacion = document.getElementById("estacionM");
const taviso = document.getElementById("tavisoM");
const haviso = document.getElementById("havisoM");
const hsalida = document.getElementById("hsalidaM");
const hllegada = document.getElementById("hllegadaM");
const hregreso = document.getElementById("hregresoM");
const incendio = document.getElementById("incendioM");
const norte = document.getElementById("norteM");
const sur = document.getElementById("surM");
const este = document.getElementById("esteM");
const oeste = document.getElementById("oesteM");
const direccion = document.getElementById("direccionM");
const lugar = document.getElementById("lugarM");
const recurso = document.getElementById("recursoM");
const cantidad = document.getElementById("cantidadM");
const efectivo = document.getElementById("efectivoM");
const unidad = document.getElementById("unidadM");
const acta = document.getElementById("actaM");
const observaciones = document.getElementById("observacionesM");
const jefe_comision = document.getElementById("jefe_comisionM");
const jefe_general = document.getElementById("jefe_generalM");
const jefe_seccion = document.getElementById("jefe_seccionM");
const comandante = document.getElementById("comandanteM");
const ci_pnb = document.getElementById("ci_pnb");
const ci_gnb = document.getElementById("ci_gnb");
const ci_intt = document.getElementById("ci_intt");
const ci_invity = document.getElementById("ci_invity");
const ci_pc = document.getElementById("ci_pc");
const ci_otro = document.getElementById("ci_otro");
const modal = document.getElementById("modalM");

filas.forEach(fila => {
     

    fila.addEventListener("click",(e)=>{
       const columnas = fila.children
       id.value = columnas[0].textContent
       fecha.value = columnas[1].textContent
       seccion.value = columnas[2].textContent
       estacion.value = columnas[3].textContent
       taviso.value = columnas[4].textContent
       haviso.value = columnas[5].textContent
       hsalida.value = columnas[6].textContent
       hllegada.value = columnas[7].textContent
       hregreso.value = columnas[8].textContent
       incendio.value = columnas[9].textContent
       norte.value = columnas[10].textContent
       sur.value = columnas[11].textContent
       este.value = columnas[12].textContent
       oeste.value = columnas[13].textContent
       direccion.value = columnas[14].textContent
       lugar.value = columnas[15].textContent
       recurso.value = columnas[17].textContent
       cantidad.value = columnas[18].textContent
       efectivo.value = columnas[19].textContent
       unidad.value = columnas[20].textContent
       acta.value = columnas[21].textContent
       observaciones.value = columnas[22].textContent
       jefe_comision.value = columnas[24].textContent
       jefe_general.value = columnas[24].textContent
       jefe_seccion.value = columnas[25].textContent
       comandante.value = columnas[26].textContent
       ci_pnb.value = columnas[26].textContent
       ci_gnb.value = columnas[27].textContent
       ci_intt.value = columnas[29].textContent
       ci_invity.value = columnas[30].textContent
       ci_pc.value = columnas[31].textContent
       ci_otro.value = columnas[32].textContent

       console.log(columnas);
    });
});

// Detener la propagación del evento de click cuando se hace click en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});
