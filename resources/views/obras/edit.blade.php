<!doctype html>
<html lang="en">
  <head> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Obra de Arte</title>
  </head>
  <body>
    <div class="container">
        <h1>Edit Obra de Arte</h1>
        <form method="POST" action="{{route('obras.update' , ['obra' => $obra->id])}}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="code" disabled="disabled" value="{{$obra->id}}">
                <div id="idHelp" class="form-text">Artista Id</div>
            </div>
            <div class="mb-3">
                <label for="artista">Artista:</label>
                <select class="form-select" name="code" id="artista" required>
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($artistas as $artista)
                    @if($artista->id == $obra->artista_id)
                        <option selected value="{{$artista->id}}">{{$artista->nombre}}</option>
                    @else
                        <option value="{{$artista->id}}">{{$artista->nombre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Titulo:</label>
                <input type="text" required class="form-control" id="titulo" aria-describedby="nameHelp" name="titulo"   value="{{$obra->titulo}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Año:</label>
                <input type="text" required class="form-control" id="ano" aria-describedby="nameHelp" name="ano" placeholder="Año Obra." value="{{$obra->año}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Tecnica:</label>
                <input type="text" required class="form-control" id="tecnica" aria-describedby="nameHelp" name="tecnica"  value="{{$obra->tecnica}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Dimensiones:</label>
                <input type="text" required class="form-control" id="dimensiones" aria-describedby="nameHelp" name="dimensiones"  value="{{$obra->dimensiones}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Descripcion:</label>
                <input type="text" required class="form-control" id="descripcion" aria-describedby="nameHelp" name="descripcion"  value="{{$obra->descripcion}}">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('artista.index')}}" class="btn btn-warning">Cancel</a>
            </div>
            
        </form>
    </div>  
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

   
  </body>
</html>