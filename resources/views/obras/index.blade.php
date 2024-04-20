<!doctype html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Obras de arte') }}
        </h2>
    </x-slot>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Obras de Arte</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de Obras de Arte</h1>
      <a href="{{route('obras.create')}} " class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Año</th>
                    <th scope="col">Tecnica</th>
                    <th scope="col">Dimensiones</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($obras as $obra)
                <tr>
                    <th scope="row">{{ $obra->id }}</th>
                    <td>{{ $obra->nombre }}</td>
                    <td>{{ $obra->titulo }}</td>
                    <td>{{ $obra->año }}</td>
                    <td>{{ $obra->tecnica }}</td>
                    <td>{{ $obra->dimensiones }}</td>
                    <td>{{ $obra->descripcion }}</td>
                    <td> 
                    <a href="{{route('obras.edit', ['obra'=> $obra->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('obras.destroy' , ['obra' => $obra->id])}}"
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

