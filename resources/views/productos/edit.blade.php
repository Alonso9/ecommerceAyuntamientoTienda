<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu de Productoses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Formulario para editar al producto "{{$productos->nombre}}"</h1><br>
                    <form action="{{route('producto.actualizar', $productos->id)}}" method="POST">
                        @method('GET')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-row-2 gap-6">
                                {{-- Para llamar un componente se usa x-nombre --}}
                                <div>
                                    <x-input class="block mt-1 w-full" type="text" name="idvendedor" type="hidden" value="{{$productos->idVendedor}}" ></x-input>
                                    <x-label for="name" :value="__('Nombre')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="nombre" value="{{$productos->nombre}}"></x-input>
                                </div>

                                <div>
                                    <x-label for="email" :value="__('Precio')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="precio" value="{{$productos->Precio}}"></x-input>
                                </div>
                                <div>
                                    <x-label for="name" :value="__('Stock')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="stock" value="{{$productos->stock}}"></x-input>
                                </div>

                                <div>
                                    <x-label for="email" :value="__('TAGS')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="tag" value="{{$productos->tag}}"></x-input>
                                </div>
                                <div>
                                    <x-label for="name" :value="__('descripcion')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="descripcion" value="{{$productos->descripcion}}"></x-input>
                                </div>

                                <div>
                                    <x-label :value="__('Nombre de la Imagen')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="nombreImg" value="{{$productos->imagen}}"></x-input><br>
                                    <x-label :value="__('Imagen')"></x-label>
                                    <x-input class="block mt-1 w-full" type="file" name="imagen" ></x-input>
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
