<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('vendor/css/productoStyle.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Producto</title>
</head>
<body>

<main class="onb-main">
    <article class="onb-product-view">
      <section class="onb-product-view--image-slider onb-image-slider">
        <!-- image slider here -->
        <img class="img-product" alt="bike Masi Gran Criterium" style="display:block;
        margin:auto;" class="onb-image-slider--image" src="{{ asset('storage/productos/'.$vendedor->id.'/'.$productos->imagen) }}" />
      </section>
      <aside class="onb-aside-wrapper">
        <section class="onb-product-view--details-box onb-product-details-box">
          <h2 class="onb-product-details-box--title" >
            Producto: {{$productos->nombre}}
            {{-- productos', 'vendedor --}}
          </h2>
          <div class="onb-product-details-box--info-wrapper">
            <span class="onb-product-details-box--price"><strong>${{$productos->Precio}}</strong></span>
            {{-- <span class="onb-product-details-box--stock">Disponibles: {{$productos->stock}}</span> --}}
          </div>
          {{-- <div class="onb-product-details-box--color-picker onb-color-picker">
            <form class="onb-color-picker--radio-group">
              <div class="onb-color-picker--radio-wrapper">
                <input class="onb-color-picker--radio onb-color-picker--radio__blue" 
                       id="onb-color-picker-radio-blue" 
                       type="radio" 
                       name="color" 
                       value="blue"
                       aria-label="blue color"
                       checked="checked" />
                <label class="onb-color-picker--label" for="onb-color-picker-radio-blue"></label>
              </div>
              <div class="onb-color-picker--radio-wrapper">
                <input class="onb-color-picker--radio onb-color-picker--radio__green" 
                       id="onb-color-picker-radio-green" 
                       type="radio" 
                       name="color" 
                       value="green" 
                       aria-label="green color" />
                <label class="onb-color-picker--label" for="onb-color-picker-radio-green"></label>
              </div>
              <div class="onb-color-picker--radio-wrapper">
                <input class="onb-color-picker--radio onb-color-picker--radio__red" 
                       id="onb-color-picker-radio-red" 
                       type="radio" 
                       name="color" 
                       value="red" 
                       aria-label="red color" />
                <label class="onb-color-picker--label" for="onb-color-picker-radio-red"></label>
              </div>
              <div class="onb-color-picker--radio-wrapper">
                <input class="onb-color-picker--radio onb-color-picker--radio__yellow" 
                       id="onb-color-picker-radio-yellow" 
                       type="radio" 
                       name="color" 
                       value="yellow"
                       aria-label="yellow color" />
                <label class="onb-color-picker--label" for="onb-color-picker-radio-yellow"></label>
              </div>
              <div class="onb-color-picker--radio-wrapper">
                <input class="onb-color-picker--radio onb-color-picker--radio__brown" 
                       id="onb-color-picker-radio-brown" 
                       type="radio" 
                       name="color" 
                       value="brown" 
                       aria-label="brown color"/>
                <label class="onb-color-picker--label" for="onb-color-picker-radio-brown"></label>
              </div>
              <div class="onb-color-picker--radio-wrapper">
                <input class="onb-color-picker--radio onb-color-picker--radio__grey" 
                       id="onb-color-picker-radio-grey" 
                       type="radio" 
                       name="color" 
                       value="grey"
                       aria-label="grey color" />
                <label class="onb-color-picker--label" for="onb-color-picker-radio-grey"></label>
              </div>
            </form>
          </div> --}}
          <div class="onb-product-details-box--interaction">
            {{-- <a class="onb-product-details-box--size-link onb-button onb-button__ghost"
               href="{{route('StoreViews.contacto',$vendedor->id)}}">Comprar</a> --}}
            
                {{-- <button class="onb-product-details-box--add-to-cart-button onb-button onb-button__primary" href=""><a href="">Comprar</a></button> --}}
                <a class="onb-product-details-box--add-to-cart-button onb-button onb-button__primary" href="{{route('StoreViews.contacto',$vendedor->id)}}">Ver Vendedor</a>
            
          </div>
          <div class="onb-product-details-box--description">
            <h3 class="onb-product-details-box--description-title">description</h3>
            <p class="onb-product-details-box--description-text">
              {{$productos->descripcion}}
            </p>
            <a class="onb-product-details-box--description-details-link"
            href="{{route('StoreViews.contacto',$vendedor->id)}}">Vendedor</a>
          </div>
        </section>
        <h3 class="onb-color-picker--title">Contacto del Vendedor</h3>

        <section class="onb-product-view--social-box onb-social-box">
          <!-- how to seperate components best? -->
          <a class="onb-social-box--item onb-button onb-button__secondary FB"
             href="#"><i class="fab fa-facebook" ></i>facebook</a>
          <a class="onb-social-box--item onb-button onb-button__secondary WA"
             href="https://wa.me/+52{{$vendedor->whatsapp}}?text=Me%20interesa%20el producto {{$productos->nombre}}%20que%20vendes"><i class="fab fa-whatsapp "></i>WhatsApp</a>
          <a class="onb-social-box--item onb-button onb-button__secondary EM"
             href="#"><i class="fa fa-envelope "></i>Correo</a>
          <a class="onb-social-box--item onb-button onb-button__secondary ME"
             href="http://m.me/{{$vendedor->messanger}}"><i class="fab fa-facebook-messenger"></i>Messenger</a>
        </section>
      </aside>
    </article>
  </main>
  <script>
    alert("Para comprar producto puede comunicarse con el vendedor por sus medios de contacto")
  </script>
</body>
</html>