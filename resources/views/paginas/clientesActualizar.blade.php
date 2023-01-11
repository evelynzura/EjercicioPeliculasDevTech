@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-heigth:247px">
    <h1>Actualizar Empleados</h1>

    <form action="{{route('modifyClientes',$clientes->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{$clientes->nombre}}"><br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="apellido" value="{{$clientes->apellido}}"><br>
        <label for="">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="{{$clientes->usuario}}"><br>
        <label for="">Clave</label>
        <input type="text" name="clave" id="clave" value="{{$clientes->clave}}"><br>
        <label for="">Correo</label>
        <input type="text" name="correo" id="correo" value="{{$clientes->correo}}"><br>
        <label for="">Telefono</label>
        <input type="text" name="telefono" id="telefono" value="{{$clientes->telefono}}"><br>
        <label for="">Direccion</label>
        <input type="text" name="direccion" id="direccion" value="{{$clientes->direccion}}"><br>
        <label for="">Estado</label>
        <input type="text" name="estado" id="estado" value="{{$clientes->estado}}"><br><br>

        <input class="btn btn-success" type="submit" name="guardar" value="Actualizar Datos">
    </form>
</div>

@endsection
