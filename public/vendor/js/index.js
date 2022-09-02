const sliders = document.querySelector(".carouselbox")
let scrollPerClick
let imagePadding = 20
let scrollAmount = 0;

const scrollleft = () => {
    sliders.scrollTo({
        top: 0,
        left: (scrollAmount -= scrollPerClick),
        behavior: "smooth"
    })

    if(scrollAmount < 0){
        scrollAmount = 0
    }
}

const scrollRight = () => {
    if (scrollAmount <= sliders.scrollWidth - sliders.clientWidth){
        sliders.scrollTo({
            top: 0,
            left: (scrollAmount += scrollPerClick),
            behavior: 'smooth'
        })
    }
}

const showEventData = async () => {
    const apikey = "e292b5f55f91fda4a8c5f79bd340b785"
    let result = await axios.get(
        "https://api.themoviedb.org/3/discover/movie?api_key="+ 
            apikey 
        +"&sort_by=popularity.desc"
    )

    result = result.data.results;

    result.map( (cur,index) =>{
        
        sliders.insertAdjacentHTML("beforeend",
            `<div class="evcard slider-img">
                <img src="https://i0.wp.com/lacastellanaeventos.com.mx/wp-content/uploads/2021/09/fiesta-mexicana-8.jpg?ssl=1">
                <div class="evcard-shadow"></div>
                <div class="envcard-titlebox">
                    <p class="evcard-title1">Festival del</p>
                    <p class="evcard-title2">Café Canoas 2022</p>
                </div>
            </div>`
        )  
    } )

    scrollPerClick = document.querySelector(".slider-img").clientWidth + imagePadding;
}

showEventData()