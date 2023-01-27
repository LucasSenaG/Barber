const { functionsIn } = require("lodash");

let count = 1;
document.getElementById("radio1").checked = true;

// Slider
setInterval (function(){
    nextImage();
}, 3500)

// Slider
function nextImage(){
    count++;
    if(count>4){
        count = 1;
    }

    document.getElementById("radio"+count).checked = true;

}

// Menu para celular
function menumobile() {
    const menu = document.getElementById("menu");
    if (menu.style.display == "flex") {
        menu.style.display = "none";
    } else {
        menu.style.display = "flex"
    }
}

function exibelinhaadc(){
    // const linha = document.getElementById("linhaadc");
    const linha =document.getElementsByClassName("linhaadicionar");
    linha.style.display = "block";
    console.log("Chamada da função");
}

function exblinhaserv(){
    const linha = document.getElementById("linhaadcserv");
    const imgadd = document.getElementById("imgaddserv");
    const imgrmv = document.getElementById("imgrmvserv");

    if (linha.style.display == "block") {
        linha.style.display = "none";
        imgadd.style.display = "block";
        imgrmv.style.display = "none";
    } else {
        linha.style.display = "block";
        imgrmv.style.display = "block";
        imgadd.style.display = "none";
    }
}

function exblinhaund() {
    const linha = document.getElementById("linhaadcund"); 
    const imgadd = document.getElementById("imgaddund");
    const imgrmv = document.getElementById("imgrmvund");

    if (linha.style.display == "block") {
        linha.style.display = "none";
        imgadd.style.display = "block";
        imgrmv.style.display = "none";
    } else {
        linha.style.display = "block";
        imgrmv.style.display = "block";
        imgadd.style.display = "none";
    }
}

function exblinhaatendt() {
    const linha = document.getElementById("linhaadcatendt");
    const imgadd = document.getElementById("imgaddatendnt");
    const imgrmv = document.getElementById("imgrmvatendnt");

    if (linha.style.display == "block") {
        linha.style.display = "none";
        imgadd.style.display = "block";
        imgrmv.style.display = "none";
    } else {
        linha.style.display = "block";
        imgrmv.style.display = "block";
        imgadd.style.display = "none";
    }
}