<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Pais</title>
  </head>
  <body>
    <div class="container">
        <h1>Agregar Pais</h1>
        <form method="POST" action="{{route('pais.store')}}">
            @csrf
            <div class="mb-3">
              <label for="id" class="form-label">Codigo</label>
              <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
              <div id="idHelp" class="form-text">Codigo Pais</div>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Pais</label>
              <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                name="name" placeholder="Nombre pais">
            </div>
            
            <label for="capital">Capital</label>
            <select class="form-select" id="capital" name="capital" required>
            <option select disabled value="">Escoge un...</option>
            @foreach ($capitales as $capital)
                <option value="{{$capital->muni_codi}}">{{$capital->muni_nomb}}</option>
            @endforeach
            </select>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{route('paises.index')}}" class="btn btn-warning">Cancelar</a>
            </div>            
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>