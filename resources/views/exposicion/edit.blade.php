<!doctype html>
<html lang="en">
  <head> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Exposiciones</title>
  </head>
  <body>
    <div class="container">
        <h1>Edit Exposiciones</h1>
        <form method="POST" action="{{route('exposiciones.update' , ['exposicion' => $exposicion->id])}}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="code" disabled="disabled" value="{{$exposicion->id}}">
                <div id="idHelp" class="form-text">Exposicion Id</div>
            </div>
            <div class="mb-3">
                <label for="artista">Obra:</label>
                <select class="form-select" name="code" id="obra" required>
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($obras as $obra)
                    @if($obra->id == $exposicion->obra_id)
                        <option selected value="{{$obra->id}}">{{$obra->titulo}}</option>
                    @else
                        <option value="{{$obra->id}}">{{$obra->titulo}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required value="{{$exposicion->fecha_inicio}}">
            </div>

            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha de Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required value="{{$exposicion->fecha_fin}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Ubicacion:</label>
                <input type="text" required class="form-control" id="ubicacion" aria-describedby="nameHelp" name="ubicacion" value="{{$exposicion->ubicacion}}" placeholder="Ubicacion Exposicion.">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de evento:</label>
                <input type="text" required class="form-control" id="evento" aria-describedby="nameHelp" name="evento" value="{{$exposicion->nombre_evento}}" placeholder="Nombre de evento.">
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