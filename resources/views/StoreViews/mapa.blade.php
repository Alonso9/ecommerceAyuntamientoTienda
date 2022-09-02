<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('vendor/css/welcomeStyle.css')}}">
    <title>Puntos</title>
</head>
<body>
    @include('layouts.header')
    {{-- <h1>Mapas</h1> --}}
    <div class="map-responsive" id="map2">
        <iframe id="mapa" style="z-index: -1;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15084.072863677986!2d-104.3210208!3d19.0629367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1660239726386!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    @include('layouts.footer')
    <script src="{{asset('vendor/js/app.js')}}"></script>
</body>
</html>