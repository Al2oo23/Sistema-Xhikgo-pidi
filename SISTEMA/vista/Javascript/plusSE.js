"use strict";

const plusRecurso = document.getElementById("plus-recurso");
const zeroSibling = document.querySelector(".zero-sibling");
const grampRecurso = document.querySelector(".zero-sibling");

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

plusRecursoM.addEventListener("click",(e)=>{

    if(grampRecursoM.childElementCount <=8){
        let clon = zeroSiblingM.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampRecursoM.appendChild(clon);
    }
    
})