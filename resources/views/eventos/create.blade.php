<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu de Vendedores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Formulario para registro de vendedor</h1><br>
                    {{-- ectype es para mandar archivos y cadenas largas --}}
                    <form action="{{route('eventos.store')}}" method="POST" enctype="multipart/form-data"> 
                        {{-- @method('GET') --}}
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-row-2 gap-6">
                                {{-- Para llamar un componente se usa x-nombre --}}
                                <div>
                                    <x-label for="name" :value="__('Nombre')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="nombre" required></x-input>
                                </div>
                                <div>
                                    <x-label for="name" :value="__('TAGS')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="tag" required></x-input>
                                </div>
                                <div>
                                    <x-label for="name" :value="__('descripcion')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="descripcion" required></x-input>
                                </div>
                                <div>
                                    <x-label for="name" :value="__('Fecha del Evento')"></x-label>
                                    <x-input class="block mt-1 w-full" type="date" name="FechaEvento" required></x-input>
                                </div>
                                <div>
                                    <x-label for="name" :value="__('Hora del Evento (Formato de 24 hrs)')"></x-label>
                                    <x-input class="block mt-1 w-full" type="time" name="time" value="22:00" required></x-input>
                                </div>
                                <div>
                                    <x-label :value="__('Imagen o Logo')"></x-label>
                                    <x-input class="block mt-1 w-full" type="file" name="imagen" ></x-input>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                Agregar Evento
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
