<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Consume local | Manzanillo</title>
    <link rel="icon" href="{{asset('vendor/img/imagenes/consumelocal_logo.png')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/inicioStyle.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- Barra de navegación -->
    <div id="nav">
        <div id="navimgcont">
            <a href="{{route('welcome')}}"><img src="{{asset('vendor/img/imagenes/consumelocal_logo.png')}}" alt=""></a>
            <a href="https://manzanillo.gob.mx/" target="blank"><img src="{{asset('vendor/img/logo_mzo.png')}}" alt=""></a>
        </div>

        <div id="navbtncont">
            <div class="navbtn"><a class="linkText" href="{{route('StoreViews.aboutUs')}}">Quienes Somos</a></div>
            <div class="navbtn"><a class="linkText" href="{{route('StoreViews.productores')}}">Productores</a></div>
            <div class="navbtn"><a class="linkText" href="{{route('StoreViews.eventos')}}">Eventos</a></div>
            <div class="navbtn"><a class="linkText" href="{{route('StoreViews.mapa')}}">Puntos de Venta</a></div>
            <div class="navbtn"><a class="linkText" target="blank" href="{{asset('login')}}">Cuenta</a></div>
            <i class="fa-solid fa-magnifying-glass" id="nav-search"></i>
        </div>
    </div>
    
    <!-- Slider -->
    <div id="container-slider" class="container-slider">

        <div class="elements" id="elements">
            @foreach ($productos as $producto)
            <!-- un solo elemento -->
            <div class="slider">
                <!-- Información del producto -->
                <div class="slider-info">
                    <img src="{{asset('vendor/img/imagenes/consumelocal_logo.png')}}" alt="">
                    <div class="slin-txt">
                        <p class="slin-title">{{$producto->nombre}}</p>
                        <p class="slin-desc">{{$producto->descripcion}}</p>
                    </div>
        
                    <a href="{{route('StoreViews.producto',$producto->id)}}" target="blank">
                        <div class="slin-btncomprar">Ver Producto</div>
                    </a>
                </div>
        
                <!-- Imagen -->
                <div class="slider-img">
                    <img class="imgproducto" src="{{ asset('storage/productos/'.$producto->nombre_id.'/'.$producto->imagen) }}" alt=""><br>
                    <div class="slin-btnpntventa"><a class="link" href="{{route('StoreViews.mapa')}}">Puntos de Venta</a></div>
                </div>
            </div>
            @endforeach
            

        </div>

        <div class="slider-btn sliderbtn-r" id="btn-r">&#62;</div>
        <div class="slider-btn sliderbtn-l" id="btn-l">&#60;</div>

    </div>

    <!-- quienes somos -->
    <!-- <div id="banner">
        <img id="banner-logo" src="images/consumelocal_logo.png" alt="">
        {{-- <img id="banner-img" src="{{asset('vendor/img/imagenes/sal.jpg')}}" alt=""> --}}
        <img id="banner-textura" src="images/textura.png" alt="">
        <span id="banner-txtq" >Quienes</span>
        <span id="banner-txts">somos</span>
    </div> -->

    <div id="container-qs">

        <div id="qsinfo">
            <h1>Quienes somos</h1>
            <p>Nace con el objetivo de apoyar a los productores del municipio de Manzanillo y fortalecer la reactivación económica desde abajo. Este programa es impulsado por la Direccion de Desarrollo Económico y Turístico, e involucra a restauranteros y hoteleros que ofrecen un espacio privilegiado al interior de su negocio, para la exposición y venta de productos artesanales de Manzanillo.</p> 
            <p>En estos espacios se promueve la venta de:</p>
            <ul>
                <li><i class="fa-solid fa-circle-check"></i>Productos regionales.</li>
                <li><i class="fa-solid fa-circle-check"></i>Productos de café de canoas.</li>
                <li><i class="fa-solid fa-circle-check"></i>Bisuteria artesanal.</li>
                <li><i class="fa-solid fa-circle-check"></i>Ropa y accesorios.</li>
                <li><i class="fa-solid fa-circle-check"></i>Dulces regionales.</li>
                <li><i class="fa-solid fa-circle-check"></i>Artes plásticas.</li>
                <li><i class="fa-solid fa-circle-check"></i>Creadores.</li>
                <li><i class="fa-solid fa-circle-check"></i>Plata.</li>
            </ul>

        </div>
        
        <div id="qsinfo-msg">
            <p>Se les capacita y dota de las herramientas necesarias para la <span>presentación de sus productos y la creación exclusiva de su marca.</span></p>
        </div>

        <span id="degraded"></span>
        <img id="banner-img" src="{{asset('vendor/img/imagenes/sal.jpg')}}" alt="">

    </div>


    <!-- productores -->
    <div id="productores">
        <div id="pr-title">Noticias</div>
        <div id="pr-container">
            @foreach($datos['published_posts']['data'] as $dato) 
            <a href="{{$dato['attachments']['data'][0]['url']}}" target="blank">   
            <div class="pr-element">
                {{-- <p>Sal real de colima</p> --}}
                <img class="card-img-top" src="{{$dato['full_picture']}}" alt="card image cap">
                {{-- <div class="pr-contacto"><a href="{{$dato['attachments']['data'][0]['url']}}" class="btn btn-primary">Ver Post</a></div> --}}
                <div class="pr-desc">
                    <p class="message">{{$dato['message']}}.....</p>
                </div>
            </div>
            </a>
            @endforeach
        </div>
    </div>

    <!-- Eventos -->
    {{-- <div class="carousel">
        <p class="carousel-title">Eventos especiales</p>
        <div class="carouselbox">
            <!-- data generated width JS -->
        </div>

        <a class="sleft sbutton" onclick="scrollleft()"><i class="fa-solid fa-angle-left"></i></a>
        <a class="sright sbutton" onclick="scrollRight()"><i class="fa-solid fa-angle-right"></i></a>
    </div> --}}

    <!-- Footer -->
    <div id="footer">

        <div id="footer-cont">
            <div id="footer-img">
                <img src="{{asset('vendor/img/logo_mzo.png')}}" alt="">
                <img src="{{asset('vendor/img/imagenes/consumelocal_logo.png')}}" alt="">
            </div>
    
            <div id="footer-ar">
                <p class="footer-titles">Accesos rápidos</p>
                <div class="line1px"></div>
                <ul id="ar-links">
                    <li><a href="#">Quienes somos</a></li>
                    <li><a href="#">Productores</a></li>
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Puntos de venta</a></li>
                    <li><a href="#">Cuenta</a></li>
                </ul>
    
            </div>
    
            <div id="footer-contacto">
                <p class="footer-titles">Contacto</p>
                <div class="line1px"></div>
                <div id="cont-info">
                    <P><i class="fa-solid fa-location-dot"></i>Direccion, Manzanillo, Colima, México</P>
                    <p><i class="fa-solid fa-envelope"></i>correo@dominio.com</p>
                    <p><i class="fa-solid fa-phone"></i>314....</p>
                </div>
            </div>

        </div>

        <div id="footcopy">
            <p>© H. Ayuntamiento de Manzanillo, Colima</p>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.js"></script>
    <script src="index.js"></script>
    <script src="{{asset('vendor/js/slider.js')}}"></script>
</body>
</html>