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

// Não implementado
function adclinha(){
    const linha = document.getElementById("novalinha");
    linha.style.flex;
}
