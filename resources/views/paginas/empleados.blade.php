@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-heigth:247px">
    <h1>Mantenimiento de Empleados</h1>

    <a href="{{url('/formEmpleados')}}" class="btn btn-primary">Agregar Empleado</a>
    <br><br>

    <table class="table">
        <thead class="thead-dark text-center">
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>USUARIO</th>
            <th>CLAVE</th>
            <th>CORREO</th>
            <th></th>
            <th></th>
        </thead>
        <tbody >
            @foreach ($empleados as $value)
                <tr>
                    <td>{{$value->nombre}}</td>
                    <td>{{$value->apellido}}</td>
                    <td>{{$value->usuario}}</td>
                    <td>{{$value->clave}}</td>
                    <td>{{$value->correo}}</td>
                    <td>
                        <form action="{{ route('editEmpleados', $value->id)}}" method="POST">
                            @method('GET')
                            @csrf
                            <button class="btn btn-success">Actualizar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('eraseEmpleados', $value->id)}}" method="POST">
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
