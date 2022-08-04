<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('vendor/css/cardStyle.css')}}">
    <title>Productores</title>
</head>
<body>
  @foreach ($productos as $producto)
  {{-- <img src="{{ asset('storage/productos/'.$vendedor->nombre.'/'.$producto->imagen) }}"> --}}
  {{-- <a href="{{route('StoreViews.contacto',$producto->idVendedor)}}">Contacto</a> --}}
  <div>
    <ul class="cards">
        <li>
          <a href="{{route('StoreViews.producto',$producto->id)}}" class="card">
            <img src="{{ asset('storage/productos/'.$producto->nombre_id.'/'.$producto->imagen) }}" class="card__image" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                <img class="card__thumb" src="{{ asset('storage/perfil/'.$producto->nombre_id.'/'.$producto->foto_vendedor) }}" alt="" />
                <div class="card__header-text">
                  <h3 class="card__title">Producto: {{$producto->nombre}}</h3>            
                  <span class="card__status">Precio: {{$producto->Precio}}</span>
                  {{-- <span class="card__status"><a href="{{route('StoreViews.contacto',$producto->idVendedor)}}">Contacto</a></span> --}}
                </div>
              </div>
              <p class="card__description">descripcion: {{$producto->descripcion}}</p>
              {{-- <span class="card__description"><a href="{{route('StoreViews.contacto',$producto->idVendedor)}}">Contacto</a></span> --}}
            </div>
          </a>      
        </li>    
      </ul>
  </div>
@endforeach

</body>
</html>