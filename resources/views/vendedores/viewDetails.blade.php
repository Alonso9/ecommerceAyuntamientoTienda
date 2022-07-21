<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu de Vendedores') }}
        </h2>
    </x-slot>

    <div class="card text-center">
        <div class="card-header">
            <img src="{{ asset('storage/perfil/'.$vendedor->nombre.'/'.$vendedor->foto) }}" alt="" style="height: 50%;">
          Vendedor "{{$vendedor->nombre}}"
        </div>
        <div class="card-body">
          <h5 class="card-title">Descripcion: {{$vendedor->descripcion}}</h5>
          <p class="card-text">Productos del Vendedor: <a href="{{route('producto.index',$vendedor->id)}}">Ver productos</a> </p><br>
          <x-button class="ml-3">
            <a href="javascript:history.back()">Ir al listado</a>
          </x-button>
        </div>
        <div class="card-footer text-muted">
          Contactos: whatsapp-{{$vendedor->whatsapp}} | messanger-{{$vendedor->messanger}} | Correo-{{$vendedor->correo}} | Facebook-{{$vendedor->facebook}}
        </div>
      </div>

</x-app-layout>
