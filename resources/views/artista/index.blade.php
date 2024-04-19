<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Artistas</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de Artistas</h1>
      <a href="{{route('artista.create')}}" class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Nacionalidad</th>
                    <th scope="col">Biografia</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($artistas as $artista)
                <tr>
                    <th scope="row">{{ $artista->id }}</th>
                    <td>{{ $artista->nombre }}</td>
                    <td>{{ $artista->apellido }}</td>
                    <td>{{ $artista->nacionalidad }}</td>
                    <td>{{ $artista->biografia }}</td>
                    <td>
                    <a href="{{route('artista.edit', ['artista'=> $artista->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('artista.destroy' , ['artista' => $artista->id])}}"
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
</html>