const newElement = document.getElementsByClassName('new')[0];
const ori1Element = document.getElementsByClassName('origin1')[0];
const ori2Element = document.getElementsByClassName('origin')[0];
const logo = document.getElementsByClassName('logo')[0];
const newIcon = document.getElementsByClassName('new')[0];
const respMenu = document.getElementsByClassName('respMenu')[0];
let isclicked = false;
newIcon.addEventListener('click',()=>{
    if(!isclicked){
    respMenu.style.height = "auto";
    respMenu.style.display = "block";
    isclicked = true;
    }else{
    respMenu.style.height = "0";
    respMenu.style.display = "none";
    isclicked = false;
    }
})

window.addEventListener('load',()=>{
    console.log(window.innerWidth)
    if(window.innerWidth<800){
        newElement.style.display = "block";
        ori1Element.style.display = "none";
        ori2Element.style.display = "none";
    
    }else{
        newElement.style.display = "none";
        ori1Element.style.display = "block";
        ori2Element.style.display = "block";
        respMenu.style.display='none';
    }
})

window.addEventListener('resize',()=>{
    console.log(window.innerWidth)
    if(window.innerWidth<800){
        newElement.style.display = "block";
        ori1Element.style.display = "none";
        ori2Element.style.display = "none";

    }else{
        newElement.style.display = "none";
        ori1Element.style.display = "block";
        ori2Element.style.display = "block";
        respMenu.style.display='none';
    }
})
