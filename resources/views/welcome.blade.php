<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('vendor/css/welcomeStyle.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Manzanillo</title>
</head>
<body>
    <main>
        <header>
                <!-- <div class="logo">
                    <a href="#">
                        <img src="assets/img/logo.png" class="imgLogo" alt="">
                    </a>
                </div>
                <div class="logo">
                    <a href="#">
                        <img src="assets/img/logo.png" class="imgLogo" alt="">
                    </a>
                </div> -->
                <nav class="navbar">
                    <div class="containerNav">
                        <div class="hamburger">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <img class="brandLogo" src="{{asset('vendor/img/logo.png')}}" alt="">
                    <ul class="nav-links">
                        <li><a class="linkText" href="{{route('StoreViews.aboutUs')}}">Quienes Somos</a></li>
                        <li><a class="linkText" href="{{route('StoreViews.productores')}}">Productores</a></li>
                        <li><a class="linkText" href="#">Eventos</a></li>
                        <li><a class="linkText" href="{{asset('login')}}">Cuenta</a></li>
                        <li>
                            <!-- search bar right align -->
                            <div class="search">
                                <form action="#">
                                    <input type="text">
                                    <button>
                                        <i class="fa fa-search"
                                            style="font-size: 18px;">
                                        </i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <br><br><br><br>
        <section>
            <div class="leyenda">
                <p class="texto">
                    Quienes Somos. 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse, dolores iste iusto accusamus quo odit commodi inventore molestias tenetur animi corporis numquam repudiandae eius architecto laudantium voluptatibus soluta repellendus?
                </p>
            </div>
        </section>
        <footer id="footer">
            <!-- ultima seccion del footer -->
            <div class="containerBottom">
                <div class="textCopyright">
                    <strong class="textFooter">H. Ayuntamiento de Manzanillo 2021 - 2024</strong>
                </div>
            </div>
        </footer>
    </main>
    <script src="{{asset('vendor/js/hamburguerApp.js')}}"></script>
</body>
</html>