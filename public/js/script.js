let count = 1;
document.getElementById("radio1").checked = true;

setInterval (function(){
    nextImage();
}, 3500)

function nextImage(){
    count++;
    if(count>4){
        count = 1;
    }

    document.getElementById("radio"+count).checked = true;

}

function menumobile() {
    const menu = document.getElementById("menu");
    if (menu.style.display == "flex") {
        menu.style.display = "none";
    } else {
        menu.style.display = "flex"
    }
}