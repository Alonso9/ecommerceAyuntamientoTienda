<header>
    <div id="nav">
        <div id="navimgcont">
            <a href="{{route('welcome')}}"><img src="{{asset('vendor/img/imagenes/consumelocal_logo.png')}}" alt=""></a>
            {{-- <img src="{{asset('vendor/img/imagenes/consumelocal_logo.png')}}" alt=""> --}}
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
</header>