window.addEventListener("load", onLoad);

function onLoad(){
    const elements = document.getElementsByTagName("td");
    for(let i=0; i< elements.length; i++){
        elements[i].addEventListener("click", onClick);
    }
    console.log(elements[0]);
}



function onClick(event){
    console.log(event.target)
    event.target.innerHTML = "X"


    // console.log(td)
}
