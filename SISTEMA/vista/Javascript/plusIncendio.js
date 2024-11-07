"use strict";

const plusEfectivo = document.getElementById("plus-efectivo");
const plusUnidad = document.getElementById("plus-unidad");
const plusRecurso = document.getElementById("plus-recurso");


const firtsSibling = document.querySelector(".first-sibling");
const secondSibling = document.querySelector(".second-sibling");
const zeroSibling = document.querySelector(".zero-sibling");


const grampEfectivo = document.querySelector(".grand-plus_Container-efectivo");
const grampUnidad = document.querySelector(".grand-plus_Container-unidad");
const grampRecurso = document.querySelector(".zero-sibling");


plusEfectivo.addEventListener("click", (e) => {

    if (grampEfectivo.childElementCount <= 8) {
        let clon = firtsSibling.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampEfectivo.appendChild(clon);
    }

})

plusUnidad.addEventListener("click", (e) => {

    if (grampUnidad.childElementCount <= 8) {
        let clon = secondSibling.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampUnidad.appendChild(clon);
    }

})

plusRecurso.addEventListener("click", (e) => {

    if (grampRecurso.childElementCount <= 8) {
        let clon = zeroSibling.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampRecurso.appendChild(clon);
    }

})

/*--------------------------------MODIFICAR--------------------------------- */

const plusRecursoM = document.getElementById("plus-recursoM");
const zeroSiblingM = document.querySelector(".zero-siblingM");
const grampRecursoM = document.querySelector(".zero-siblingM");

const plusEfectivoM = document.getElementById("plus-efectivoM");
const firtsSiblingM = document.querySelector(".first-siblingM");
const grampEfectivoM = document.querySelector(".grand-plus_Container-efectivoM");

const plusUnidadM = document.getElementById("plus-unidadM");
const secondSiblingM = document.querySelector(".second-siblingM");
const grampUnidadM = document.querySelector(".grand-plus_Container-unidadM");


plusRecursoM.addEventListener("click", (e) => {

    if (grampRecursoM.childElementCount <= 8) {
        let clon = zeroSiblingM.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampRecursoM.appendChild(clon);
    }

})
plusEfectivoM.addEventListener("click", (e) => {

    if (grampEfectivoM.childElementCount <= 8) {
        let clon = firtsSiblingM.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampEfectivoM.appendChild(clon);
    }

})

plusUnidadM.addEventListener("click", (e) => {

    if (grampUnidadM.childElementCount <= 8) {
        let clon = secondSiblingM.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampUnidadM.appendChild(clon);
    }

})

function ocultarInput(show) {
    const inputsDiv = document.getElementById("inputAsegurado");
    inputsDiv.style.display = show ? "block" : "none";
}

function ocultarInput2(show2) {
    const inputsDiv = document.getElementById("inputLesionado");
    inputsDiv.style.display = show2 ? "block" : "none";
}

// -----------------------MODIFICAR----------------------------

function ocultarInputM(show) {
    const inputsDiv = document.getElementById("inputAseguradoM");
    inputsDiv.style.display = show ? "block" : "none";
}

function ocultarInputM2(show2) {
    const inputsDiv = document.getElementById("inputLesionadoM");
    inputsDiv.style.display = show2 ? "block" : "none";
}
