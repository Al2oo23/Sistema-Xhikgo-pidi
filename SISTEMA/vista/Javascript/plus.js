"use strict";

const plusEfectivo = document.getElementById("plus-efectivo");
const plusUnidad = document.getElementById("plus-unidad");
const plusRecurso = document.getElementById("plus-recurso");

const firtsSibling = document.querySelector(".first-sibling");
const secondSibling = document.querySelector(".second-sibling");
const zeroSibling = document.querySelector(".zero-sibling");

const grampEfectivo = document.querySelector(".grand-plus_Container-efectivo");
const grampUnidad = document.querySelector(".grand-plus_Container-unidad");
const grampRecurso = document.querySelector(".grand-plus_Container-recurso");


console.log(grampEfectivo.childElementCount);
plusEfectivo.addEventListener("click",(e)=>{

    if(grampEfectivo.childElementCount <=8){
        let clon = firtsSibling.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampEfectivo.appendChild(clon);
    }
    
})

plusUnidad.addEventListener("click",(e)=>{

    if(grampUnidad.childElementCount <=8){
        let clon = secondSibling.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampUnidad.appendChild(clon);
    }
    
})