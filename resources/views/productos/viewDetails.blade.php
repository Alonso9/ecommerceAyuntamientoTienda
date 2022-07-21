  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu de Vendedores') }}
        </h2>
    </x-slot>

    <div class="card">
        <img src="{{ asset('storage/productos/'.$vendedor->nombre.'/'.$productos->imagen) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Producto: {{$productos->nombre}}</h5>
          <p class="card-text">Descripcion: {{$productos->descripcion}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Precio: {{$productos->Precio}}</li>
          <li class="list-group-item">Stock: {{$productos->stock}}</li>
          <li class="list-group-item">TAGS: {{$productos->tags}}</li>
        </ul>
        <div class="card-body">
            <x-button class="ml-3">
                <a href="javascript:history.back()">Ir al listado</a>
            </x-button>
          {{-- <a href="#" class="card-link">Another link</a> --}}
        </div>
      </div>

</x-app-layout>