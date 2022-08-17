<header>
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
            <li><a class="linkText" href="{{route('StoreViews.mapa')}}"></a></li>
            <li><a class="linkText" href="{{route('StoreViews.productores')}}">Productores</a></li>
            <li><a class="linkText" href="{{asset('login')}}">Cuenta<i class="fa-solid fa-user"></i></a></li>
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