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
       lugar.value = columnas[9].textContent
       direccion.value = columnas[10].textContent
       modelo.value = columnas[11].textContent
       marca.value = columnas[12].textContent
       año.value = columnas[13].textContent
       placa.value = columnas[14].textContent
       serial.value = columnas[15].textContent
       color.value = columnas[16].textContent
       puestos.value = columnas[17].textContent
       propietario.value = columnas[18].textContent
       ci_propietario.value = columnas[19].textContent
       valor.value = columnas[20].textContent
       conductor.value = columnas[21].textContent
       aseguradora.value = columnas[22].textContent
       vigencia.value = columnas[23].textContent
       inicio.value = columnas[24].textContent
       culmino.value = columnas[25].textContent
       causa.value = columnas[26].textContent
       h_lesionados.value = columnas[27].textContent
       lesionados.value = columnas[28].textContent
       recurso.value = columnas[29].textContent
       cantidad.value = columnas[30].textContent
       efectivo.value = columnas[31].textContent
       unidad.value = columnas[32].textContent
       acta.value = columnas[33].textContent
       observaciones.value = columnas[34].textContent
       jefe_comision.value = columnas[35].textContent
       jefe_general.value = columnas[36].textContent
       jefe_seccion.value = columnas[37].textContent
       comandante.value = columnas[38].textContent
       comandante.value = columnas[39].textContent
       ci_pnb.value = columnas[40].textContent
       ci_gnb.value = columnas[41].textContent
       ci_intt.value = columnas[42].textContent
       ci_invity.value = columnas[43].textContent
       ci_pc.value = columnas[44].textContent
       ci_otro.value = columnas[45].textContent

       console.log(columnas);
    });
});

// Detener la propagación del evento de click cuando se hace click en el modal
modal.addEventListener('click', (e) => {
    e.stopPropagation();
});
