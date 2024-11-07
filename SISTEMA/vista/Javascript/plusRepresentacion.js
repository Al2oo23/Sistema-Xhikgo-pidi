"use strict";

const plusEfectivo = document.getElementById("plus-efectivo");
const plusRecurso = document.getElementById("plus-recurso");

const firtsSibling = document.querySelector(".first-sibling");
const zeroSibling = document.querySelector(".zero-sibling");

const grampEfectivo = document.querySelector(".grand-plus_Container-efectivo");
const grampRecurso = document.querySelector(".zero-sibling");


plusEfectivo.addEventListener("click",(e)=>{

    if(grampEfectivo.childElementCount <=8){
        let clon = firtsSibling.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampEfectivo.appendChild(clon);
    }
    
})

plusRecurso.addEventListener("click",(e)=>{

    if(grampRecurso.childElementCount <=8){
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


plusRecursoM.addEventListener("click",(e)=>{

    if(grampRecursoM.childElementCount <=8){
        let clon = zeroSiblingM.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampRecursoM.appendChild(clon);
    }
    
})
plusEfectivoM.addEventListener("click",(e)=>{

    if(grampEfectivoM.childElementCount <=8){
        let clon = firtsSiblingM.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampEfectivoM.appendChild(clon);
    }
    
})
