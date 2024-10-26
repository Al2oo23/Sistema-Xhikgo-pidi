"use strict";

const filas = document.querySelectorAll(".fila");
const id = document.getElementById("id");
const fecha = document.getElementById("fechaM");
const seccion = document.getElementById("seccionM");
const estacion = document.getElementById("estacionM");
const taviso = document.getElementById("tipo_avisoM");
const haviso = document.getElementById("hora_avisoM");
const hsalida = document.getElementById("hora_salidaM");
const hllegada = document.getElementById("hora_llegadaM");
const hregreso = document.getElementById("hora_regresoM");
const causa = document.getElementById("causaM");
const direccion = document.getElementById("direccionM");
const num_efectivos = document.getElementById("num_efectivosM");
const maletin = document.getElementById("maletinM");
const explicacion = document.getElementById("explicacionM");
const ci_pnb = document.getElementById("ci_pnbM");
const ci_gnb = document.getElementById("ci_gnbM");
const ci_intt = document.getElementById("ci_inttM");
const ci_invity = document.getElementById("ci_invityM");
const ci_pc = document.getElementById("ci_pcM");
const ci_otro = document.getElementById("ci_otroM");
const jefe_comision = document.getElementById("jefe_comisionM");
const jefe_general = document.getElementById("jefe_generalM");
const jefe_seccion = document.getElementById("jefe_seccionM");
const comandante = document.getElementById("comandanteM");
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
       causa.value = columnas[9].textContent
       direccion.value = columnas[10].textContent
       num_efectivos.value = columnas[11].textContent
       maletin.value = columnas[12].textContent
       explicacion.value = columnas[13].textContent
       ci_pnb.value = columnas[14].textContent
       ci_gnb.value = columnas[15].textContent
       ci_intt.value = columnas[16].textContent
       ci_invity.value = columnas[17].textContent
       ci_pc.value = columnas[18].textContent
       ci_otro.value = columnas[19].textContent
       jefe_comision.value = columnas[20].textContent
       jefe_general.value = columnas[21].textContent
       jefe_seccion.value = columnas[22].textContent
       comandante.value = columnas[23].textContent
       
       

       console.log(columnas);
    });
});

// Detener la propagación del evento de click cuando se hace click en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});
