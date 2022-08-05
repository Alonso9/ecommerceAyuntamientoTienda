<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <link rel="stylesheet" href="{{asset('vendor/css/cardStyle2.css')}}">
    <title>Productores</title>
</head>
<body>
  @foreach ($productos as $producto)
  <div>
    {{-- <ul class="cards">
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
                </div>
              </div>
              <p class="card__description">descripcion: {{$producto->descripcion}}</p>
            </div>
          </a>      
        </li>    
      </ul>
  </div> --}}
    <div class="container">
      <div class="box">
        <div class="imgBx">
            <img class="producto" src="{{ asset('storage/productos/'.$producto->nombre_id.'/'.$producto->imagen) }}" alt=""><br>
        </div>
        <div class="content">
          <img class="card__thumb" src="{{ asset('storage/perfil/'.$producto->nombre_id.'/'.$producto->foto_vendedor) }}" alt="" />
            <h3>{{$producto->nombre}}</h3>
            <p>Precio: ${{$producto->Precio}}</p>
            <p>Descripcion: {{$producto->descripcion}}.</p>
            <p>TAGS: <br><a href="#">{{$producto->tag}}</a></p>
            <a class="onb-product-details-box--add-to-cart-button onb-button onb-button__primary" href="{{route('StoreViews.producto',$producto->id)}}">Ver Producto</a>
        </div>
    </div>
    </div>
@endforeach
</body>
</html>