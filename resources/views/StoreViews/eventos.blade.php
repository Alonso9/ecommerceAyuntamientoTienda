<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('vendor/css/eventosStyle.css')}}">
    <title>Eventos</title>
</head>
<body>
    @include('layouts.header')

    <h1 class="title">Eventos Proximos del Ayuntamiento</h1><br><br>
    
    <div class="mainContainer">
        <div class = container>
          @if(count($eventos)<=0)
          <h1 class="title">No hay eventos proximos :D</h1><br><br>
          @else
            @foreach ($eventos as $evento)
            <div class = card>
              <div class = image>
                <img class="imgEvent" src="{{ asset('storage/Eventos/'.$evento->imagen) }}" alt=""><br>
              </div>
              <div class = content>
                <h3>{{$evento->nombre}}</h3>
                <p><br>Descripcion: {{$evento->descripcion}}.</p>
                <p><br>Fecha: {{$evento->FechaEvento}}</p>
                <p>Hora: {{$evento->hora}}</p>
              </div>
            </div>
            @endforeach
            @endif
        </div>
    </div> 
      
    

    @include('layouts.footer')
</body>
</html>