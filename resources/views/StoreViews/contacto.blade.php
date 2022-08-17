<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('vendor/css/ContactoStyle.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Vendedor</title>
</head>
<body>
    @include('layouts.navbar')

    <aside id="profile">
        <img src="{{ asset('storage/perfil/'.$vendedor->id.'/'.$vendedor->foto) }}" />
        <h2>Contacto con el vendedor: <br> {{$vendedor->nombre}}</h2>
        <p>Descripcion: {{$vendedor->descripcion}}<br><br>
          <p>
            Contactos: <br> <a href="https://wa.me/+52{{$vendedor->whatsapp}}?text=Me%20interesa%20el producto%20que%20vendes"><i class="fab fa-whatsapp"></i></a> | <a href="#"><i class="fab fa-facebook-messenger"></i></a> | <a href="#"><i class="fa fa-envelope"></i></a> | <a href="#"><i class="fab fa-facebook"></i></a>
          </p><br>
        {{-- <br><p>Productos del Vendedor: <a href="{{route('producto.index',$vendedor->id)}}">Ver productos</a></p><br> --}}
          <a class="btn" href="javascript:history.back()">Regresar</a>
    </aside>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('vendor/js/navbarApp.js')}}"></script>
</body> 
</html>
