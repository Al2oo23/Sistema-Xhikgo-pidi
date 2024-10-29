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
const lugar = document.getElementById("lugarM");
const direccion = document.getElementById("direccionM");
const modelo = document.getElementById("modeloM");
const marca = document.getElementById("marcaM");
const año = document.getElementById("añoM");
const placa = document.getElementById("placaM");
const serial = document.getElementById("serialM");
const color = document.getElementById("colorM");
const puestos = document.getElementById("puestosM");
const propietario = document.getElementById("propietarioM");
const ci_propietario = document.getElementById("ci_propietarioM");
const valor = document.getElementById("valorM");
const conductor = document.getElementById("conductorM");
const ci_conductor = document.getElementById("ci_conductorM");
const aseguradora = document.getElementById("aseguradoraM");
const vigencia = document.getElementById("vigenciaM");
const inicio = document.getElementById("inicioM");
const ignicion = document.getElementById("ignicionM");
const culmino = document.getElementById("culminoM");
const causa = document.getElementById("causaM");
const h_reignicion = document.getElementById("h_reignicionM");
const clase = document.getElementById("claseM");
const declaracion = document.getElementById("declaracionM");
const h_lesionados = document.getElementById("h_lesionadosM");
const lesionados = document.getElementById("lesionadosM");
const jefe = document.getElementById("jefeM");
const recurso = document.getElementById("recursoM");
const cantidad = document.getElementById("cantidadM");
const efectivo = document.getElementById("efectivoM");
const unidad = document.getElementById("unidadM");
const acta = document.getElementById("actaM");
const observaciones = document.getElementById("observacionesM");
const gral_servicios = document.getElementById("gral_serviciosM");
const jefe_deseccion = document.getElementById("jefe_deseccionM");
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
       lugar.value = columnas[10].textContent
       direccion.value = columnas[11].textContent
       modelo.value = columnas[12].textContent
       marca.value = columnas[13].textContent
       año.value = columnas[1].textContent
       placa.value = columnas[2].textContent
       serial.value = columnas[3].textContent
       color.value = columnas[4].textContent
       puestos.value = columnas[5].textContent
       propietario.value = columnas[6].textContent
       ci_propietario.value = columnas[7].textContent
       valor.value = columnas[8].textContent
       conductor.value = columnas[9].textContent
       aseguradora.value = columnas[10].textContent
       vigencia.value = columnas[11].textContent
       inicio.value = columnas[12].textContent
       culmino.value = columnas[13].textContent
       causa.value = columnas[7].textContent
       h_lesionados.value = columnas[8].textContent
       lesionados.value = columnas[9].textContent
       recurso.value = columnas[14].textContent
       cantidad.value = columnas[15].textContent
       efectivo.value = columnas[16].textContent
       unidad.value = columnas[17].textContent
       acta.value = columnas[9].textContent
       observaciones.value = columnas[9].textContent
       gral_servicios.value = columnas[9].textContent
       jefe_deseccion.value = columnas[9].textContent
       comandante.value = columnas[9].textContent
       ci_pnb.value = columnas[19].textContent
       ci_gnb.value = columnas[20].textContent
       ci_intt.value = columnas[21].textContent
       ci_invity.value = columnas[22].textContent
       ci_pc.value = columnas[23].textContent
       ci_otro.value = columnas[24].textContent

       console.log(columnas);
    });
});

// Detener la propagación del evento de click cuando se hace click en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});
