<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h1>Tabla De Productos Registrados del vendedor "{{$vendedor->nombre}}"</h1>
                    <div class="row">
                        <div class="col-xl-12">
                            <form action="{{route('producto.buscar')}}" method="POST">
                                @csrf
                                @method("POST")
                                <div class="form-row">
                                    <div class="col-sm-4 my-1">
                                        <input type="text" class="form-control" name="busqueda"
                                        placeholder="Nombre">
                                        <input type="hidden" value="{{$vendedor->id}}" name="idvendedor">
                                    </div>
                                    <div class="col-auto my-1">
                                        <button type="submit" class="btn btn-outline-primary">Buscar</button>
                                    </div>
                                    <div class="col-auto my-1">
                                        <a href="{{route('producto.create',$vendedor->id)}}" class="btn btn-outline-warning">Agregar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Detalles</th>
                                        <th scope="col">Opciones</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($productos)<=0)
                                        <tr>
                                            <td  colspan="4">No hay resultados </td>
                                        </tr>
                                        @else
                                        @foreach ($productos as $productos)
                                            
                                        
                                      <tr>
                                        <th scope="row">{{$productos->id}}</th>
                                        <td>{{$productos->nombre}}</td>
                                        <td><a href="{{route('producto.details', $productos->id)}}" class="btn btn-outline-primary">Detalles</a></td>
                                        <td><a href="{{route('producto.edit',$productos->id)}}" class="btn btn-outline-warning">Editar</a> |
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-{{$productos->id}}">
                                                Borrar
                                            </button>
                                      </tr>
                                       @include('productos.delete')
                                      @endforeach
                                      @endif
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
