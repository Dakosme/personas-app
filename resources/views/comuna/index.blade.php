<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de comunas</title>
</head>
<body>
    <div class="container">
        <h1>Listado de comunas</h1>
        <a href="{{route('comunas.create')}}" class="btn btn-success">Agregar</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Comuna</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comunas as $comuna)
                    <tr>
                        <th scope="row">{{$comuna->comu_codi}}</th>
                        <td>{{$comuna->comu_nomb}}</td>
                        <td>{{$comuna->muni_nomb}}</td>
                        <td>
                            <a href="{{route('comunas.edit', ['comuna'=>$comuna->comu_codi])}}"
                                class="btn btn-info">Editar</a></li>
                                
                            <form action="{{route('comunas.destroy', ['comuna'=>$comuna->comu_codi])}}"
                                method='POST' style="display: inline-block">
                                @method('delete')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>