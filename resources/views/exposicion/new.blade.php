<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Añadir Exposicion</title>
</head>

<body>
    <div class="container">
        <h1>Añadir Exposicion</h1>
        <form method="POST" action="{{route('exposicion.store')}}">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
                <div id="idHelp" class="form-text">Exposicion Id</div>
            </div>
            <div class="mb-3">
                <label for="obra">Obra:</label>
                <select class="form-select" name="code" id="artista" required>
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($obras as $obra)
                    <option value="{{$obra->id}}">{{$obra->titulo}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
            </div>

            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha de Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Ubicacion:</label>
                <input type="text" required class="form-control" id="ubicacion" aria-describedby="nameHelp" name="ubicacion" placeholder="Ubicacion Exposicion.">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de evento:</label>
                <input type="text" required class="form-control" id="evento" aria-describedby="nameHelp" name="evento" placeholder="Nombre de evento.">
            </div> 
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('exposicion.index')}}" class="btn btn-warning">Cancel</a>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>