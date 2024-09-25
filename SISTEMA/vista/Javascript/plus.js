"use strict";

const plusEfectivo = document.getElementById("plus-efectivo");
const plusUnidad = document.getElementById("plus-unidad");
const plusRecurso = document.getElementById("plus-recurso");
const plusVehiculo = document.getElementById("plus-vehiculo");

const firtsSibling = document.querySelector(".first-sibling");
const secondSibling = document.querySelector(".second-sibling");
const zeroSibling = document.querySelector(".zero-sibling");
const forthSibling = document.querySelector(".forth-sibling");

const grampEfectivo = document.querySelector(".grand-plus_Container-efectivo");
const grampUnidad = document.querySelector(".grand-plus_Container-unidad");
const grampRecurso = document.querySelector(".zero-sibling");
const grampVehiculo = document.querySelector(".grand-plus_Container-vehiculo");

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

plusRecurso.addEventListener("click",(e)=>{

    if(grampRecurso.childElementCount <=8){
        let clon = zeroSibling.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampRecurso.appendChild(clon);
    }
    
})

plusVehiculo.addEventListener("click",(e)=>{

    if(grampVehiculo.childElementCount <=8){
        let clon = forthSibling.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampVehiculo.appendChild(clon);
    }
    
})

/*--------------------------------MODIFICAR--------------------------------- */

const plusVehiculoM = document.getElementById("plus-vehiculoM");
const forthSiblingM = document.querySelector(".forth-siblingM");
const grampVehiculoM = document.querySelector(".grand-plus_Container-vehiculoM");

const plusRecursoM = document.getElementById("plus-recursoM");
const zeroSiblingM = document.querySelector(".zero-siblingM");
const grampRecursoM = document.querySelector(".zero-siblingM");

const plusEfectivoM = document.getElementById("plus-efectivoM");
const firtsSiblingM = document.querySelector(".first-siblingM");
const grampEfectivoM = document.querySelector(".grand-plus_Container-efectivoM");

const plusUnidadM = document.getElementById("plus-unidadM");
const secondSiblingM = document.querySelector(".second-siblingM");
const grampUnidadM = document.querySelector(".grand-plus_Container-unidadM");


plusVehiculoM.addEventListener("click",(e)=>{

    if(grampVehiculoM.childElementCount <=8){
        let clon = forthSiblingM.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampVehiculoM.appendChild(clon);
    }
    
})

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

plusUnidadM.addEventListener("click",(e)=>{

    if(grampUnidadM.childElementCount <=8){
        let clon = secondSiblingM.cloneNode(true);    //El true es para copiar sus hijos tambien
        grampUnidadM.appendChild(clon);
    }
    
})