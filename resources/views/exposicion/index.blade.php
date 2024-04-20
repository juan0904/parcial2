<!doctype html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Exposiciones') }}
        </h2>
    </x-slot>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Exposiciones</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de Exposiciones</h1>
      <a href="{{route('exposicion.create')}}" class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Obra</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Fin</th>
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Nombre Evento</th> 
                </tr>
            </thead>
            <tbody>
             @foreach ($exposiciones as $expo)
                <tr>
                    <th scope="row">{{ $expo->id }}</th>
                    <td>{{ $expo->titulo }}</td>
                    <td>{{ $expo->fecha_inicio }}</td>
                    <td>{{ $expo->fecha_fin }}</td>
                    <td>{{ $expo->ubicacion }}</td>
                    <td>{{ $expo->nombre_evento }}</td>
                    <td> 
                    <a href="{{route('exposicion.edit', ['exposicion'=> $expo->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('exposicion.destroy' , ['exposicion' => $expo->id])}}"
                    method="POST" style="display: inline-block">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
    

    
   </body>
   </x-app-layout>

</html>