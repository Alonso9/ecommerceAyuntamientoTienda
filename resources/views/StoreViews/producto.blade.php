<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('vendor/css/productoStyle.css')}}">
    <title>Document</title>
</head>
<body>

<main class="onb-main">
    <article class="onb-product-view">
      <section class="onb-product-view--image-slider onb-image-slider">
        <!-- image slider here -->
        <img alt="bike Masi Gran Criterium" style="display:block;
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
                <a class="onb-product-details-box--add-to-cart-button onb-button onb-button__primary" href="{{route('StoreViews.contacto',$vendedor->id)}}">Contacto</a>
            
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
        <h3 class="onb-color-picker--title">Contacto con el Vendedor</h3>

        <section class="onb-product-view--social-box onb-social-box">
          <!-- how to seperate components best? -->
          <a class="onb-social-box--item onb-button onb-button__secondary FB"
             href="#"> <svg class="svg-inline--fa fa-facebook fa-w-16" style="height: 1px:; weight: 1px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z " ></path></svg>facebook</a>
          <a class="onb-social-box--item onb-button onb-button__secondary"
             href="#">WhatsApp</a>
          <a class="onb-social-box--item onb-button onb-button__secondary"
             href="#">Correp</a>
          <a class="onb-social-box--item onb-button onb-button__secondary"
             href="#">Messenger</a>
        </section>
      </aside>
    </article>
  </main>
  <script>
    alert("Para comprar producto puede comunicarse con el vendedor por sus medios de contacto")
  </script>
</body>
</html>