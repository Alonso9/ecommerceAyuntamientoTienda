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
                    <h1>Formulario para editar al vendedor "{{$vendedor->nombre}}"</h1><br>
                    <form action="{{route('vendedor.actualizar', $vendedor->id)}}" method="POST">
                        @method('GET')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-row-2 gap-6">
                                {{-- Para llamar un componente se usa x-nombre --}}
                                <div>
                                    <x-label for="name" :value="__('Nombre')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="nombre" value="{{$vendedor->nombre}}"></x-input>
                                </div>

                                <div>
                                    <x-label for="email" :value="__('WhatsApp')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="whatsapp" value="{{$vendedor->whatsapp}}"></x-input>
                                </div>
                                <div>
                                    <x-label for="name" :value="__('Messanger')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="messanger" value="{{$vendedor->messanger}}"></x-input>
                                </div>

                                <div>
                                    <x-label for="email" :value="__('Correo')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="correo" value="{{$vendedor->correo}}"></x-input>
                                </div>
                                <div>
                                    <x-label for="name" :value="__('Facebook')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="facebook" value="{{$vendedor->facebook}}"></x-input>
                                </div>

                                <div>
                                    <x-label for="email" :value="__('Descripcion')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="descripcion" value="{{$vendedor->descripcion}}"></x-input>
                                </div>                                
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                Actualizar
                            </x-button>
                            <x-button class="ml-3">
                                <a href="javascript:history.back()">Ir al listado</a>
                            </x-button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
