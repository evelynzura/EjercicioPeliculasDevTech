@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-heigth:247px">
    <h1>Actualizar Empleados</h1>

    <form action="{{route('modifyEmpleados',$empleados->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{$empleados->nombre}}"><br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="apellido" value="{{$empleados->apellido}}"><br>
        <label for="">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="{{$empleados->usuario}}"><br>
        <label for="">Clave</label>
        <input type="text" name="clave" id="clave" value="{{$empleados->clave}}"><br>
        <label for="">Correo</label>
        <input type="text" name="correo" id="correo" value="{{$empleados->correo}}"><br>
        <label for="">Telefono</label>
        
        <input class="btn btn-success" type="submit" name="guardar" value="Actualizar Datos">
    </form>
</div>

@endsection
