<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <link rel="stylesheet" href="{{asset('vendor/css/cardStyle2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Productores</title>
</head>
<body>
  
  <header>@include('layouts.navbar')</header>

    <div class="container">
      @foreach ($productos as $producto)
      <div class="box">
        <div class="imgBx">
            <img class="producto" src="{{ asset('storage/productos/'.$producto->nombre_id.'/'.$producto->imagen) }}" alt=""><br>
        </div>
        <div class="content">
          <img class="card__thumb" src="{{ asset('storage/perfil/'.$producto->nombre_id.'/'.$producto->foto_vendedor) }}" alt="" />
            <h1 class="name-product">Producto: {{$producto->nombre}}</h1>
            <p>Precio: ${{$producto->Precio}}</p>
            <p>Descripcion: {{$producto->descripcion}}.</p>
            <p>TAGS: <br><a href="#">{{$producto->tag}}</a></p>
            <a class="onb-product-details-box--add-to-cart-button onb-button onb-button__primary" href="{{route('StoreViews.producto',$producto->id)}}">Ver Producto</a>
        </div>
    </div>
    @endforeach
   </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('vendor/js/navbarApp.js')}}"></script>
</body>
</html>