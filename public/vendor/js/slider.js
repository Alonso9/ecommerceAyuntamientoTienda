const slider = document.getElementById("elements") //Contenedor slider
let slidersec = document.querySelectorAll(".slider") //contenedor imagenes

let slidersecLast = slidersec[slidersec.length -1] //Obtener la ultima imagen
let btnr = document.getElementById("btn-r") //Boton derecha
let btnl = document.getElementById("btn-l") //Boton izquierda

slider.insertAdjacentElement('afterbegin', slidersecLast)

//evento clic siguiente
const Next = () => {
    let sliderSectionFisrt =  document.querySelectorAll(".slider")[0];
    slider.style.marginLeft = "-200%"
    slider.style.transition = "all 0.5s ease"

    setTimeout(() => {
        slider.style.transition = "none"
        slider.insertAdjacentElement('beforeend', sliderSectionFisrt)
 
        slider.style.marginLeft = "-100%"

    }, 500);
}

//evento clic anterior
const Prev = () => {
    let slidersec = document.querySelectorAll(".slider")
    let sliderSectionLast =  slidersec[slidersec.length - 1];
    slider.style.marginLeft = "0"
    slider.style.transition = "all 0.5s ease"

    setTimeout(() => {
        slider.style.transition = "none"
        slider.insertAdjacentElement('afterbegin', sliderSectionLast)
        slider.style.marginLeft = "-100%"

    }, 500);
}


//Evento clic siguiente o anterior
btnr.addEventListener('click', ()=>{
    Next()
})

btnl.addEventListener('click', ()=>{
    Prev()
})

//Avanzar cada x segundos
setInterval(()=>{
    Next()
}, 6000)