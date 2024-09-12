"use strict";

const plus = document.getElementById("plus");

const firtsSibling = document.querySelector(".first-sibling")

const gramp = document.querySelector(".grand-plus_Container");
console.log(gramp.childElementCount);
plus.addEventListener("click",(e)=>{

    if(gramp.childElementCount <=8){
        let clon = firtsSibling.cloneNode(true);
        gramp.appendChild(clon);
    }
    
})
