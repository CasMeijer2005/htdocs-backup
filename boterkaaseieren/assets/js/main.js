
window.addEventListener('load', paginaGeladen);

function paginaGeladen() {
    console.log("page loaded!");

    
    const speelveld = document.getElementById("speelveld");
    speelveld.addEventListener("click", click);
    console.log( speelveld)

}

function click(event) {
    const tegel = event.target;
    const id = tegel.id;


    
    plaatje(tegel, "cricle")

}
function plaatje (tege, naam) {
    const img = document.createElement("img");
    img.scr = "./assets/img/" + naam+ ".png";
    tegel.appendChild(img)

}