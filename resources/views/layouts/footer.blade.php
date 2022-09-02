<footer>
    <!-- Footer -->
    <div id="footer">

        <div id="footer-cont">
            <div id="footer-img">
                <a href="{{route('welcome')}}"><img src="{{asset('vendor/img/imagenes/consumelocal_logo.png')}}" alt=""></a>
                <a href="https://manzanillo.gob.mx/" target="blank"><img src="{{asset('vendor/img/logo_mzo.png')}}" alt=""></a>
            </div>
    
            <div id="footer-ar">
                <p class="footer-titles">Accesos rápidos</p>
                <div class="line1px"></div>
                <ul id="ar-links">
                    <li><a class="linkText" href="{{route('StoreViews.aboutUs')}}">Quienes Somos</a></li>
                    <li><a class="linkText" href="{{route('StoreViews.productores')}}">Productores</a></li>
                    <li><a class="linkText" href="{{route('StoreViews.eventos')}}">Eventos</a></li>
                    <li><a class="linkText" href="{{route('StoreViews.mapa')}}">Puntos de Venta</a></li>
                    <li><a class="linkText" href="{{asset('login')}}">Cuenta</a></li>
                </ul>
    
            </div>
    
            <div id="footer-contacto">
                <p class="footer-titles">Contacto</p>
                <div class="line1px"></div>
                <div id="cont-info">
                    <P><i class="fa-solid fa-location-dot"></i>Direccion,  C. Juárez #100, Col. Centro, CP 28200
                        Manzanillo, Colima, México. </P>
                    <p><i class="fa-solid fa-envelope"></i>correo@dominio.com</p>
                    <p><i class="fa-solid fa-phone"></i>314....</p>
                </div>
            </div>

        </div>

        <div id="footcopy">
            <p>© H. Ayuntamiento de Manzanillo, Colima</p>
        </div>
    
</footer>