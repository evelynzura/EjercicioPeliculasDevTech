@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-heigth:247px">
    <h1>Mantenimiento de películas</h1>

    <a href="{{url('/formPeliculas')}}" class="btn btn-primary">Agregar Película</a>
    <br><br>

    <table class="table">
        <thead class="thead-dark text-center">
            <th>TITULO</th>
            <th>ESTRENO</th>
            <th>DURACIÓN</th>
            <th>DESCRIPCIÓN</th>
            <th>CATEGORÍA</th>
            <th></th>
            <th></th>
        </thead>
        <tbody >
            @foreach ($peliculas as $value)
                <tr>
                    <td>{{$value->titulo}}</td>
                    <td>{{$value->estreno}}</td>
                    <td>{{$value->duracion}}</td>
                    <td>{{$value->descripcion}}</td>
                    <td>{{$value->idcategoria}}</td>
                    <td>
                        <form action="{{ route('editPeliculas', $value->id)}}" method="POST">
                            @method('GET')
                            @csrf
                            <button class="btn btn-success">Actualizar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('erasePeliculas', $value->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
        @endforeach

        </tbody>

    </table>

</div>

@endsection
