@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-heigth:247px">
    <h1>Mantenimiento de películas</h1>

    <a href="{{url('/formCategorias')}}" class="btn btn-primary">Agregar Película</a>
    <br><br>

    <table class="table">
        <thead class="thead-dark text-center">
            <th>NOMBRE</th>
            <th></th>
            <th></th>
        </thead>
        <tbody >
            @foreach ($categorias as $value)
                <tr>
                    <td>{{$value->nombre}}</td>
                    <td>
                        <form action="{{ route('editCategorias', $value->id)}}" method="POST">
                            @method('GET')
                            @csrf
                            <button class="btn btn-success">Actualizar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('eraseCategorias', $value->id)}}" method="POST">
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
