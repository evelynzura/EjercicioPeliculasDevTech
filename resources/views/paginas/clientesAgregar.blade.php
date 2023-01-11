@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-heigth:247px">
    <h1>Agregar Clientes</h1>

    <form action="{{route('addClientes')}}" method="POST">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="apellido"><br>
        <label for="">Usuario</label>
        <input type="text" name="usuario" id="usuario"><br>
        <label for="">Clave</label>
        <input type="text" name="clave" id="clave"><br>
        <label for="">Correo</label>
        <input type="text" name="correo" id="correo"><br>
        <label for="">Telfono</label>
        <input type="text" name="telefono" id="telefono"><br>
        <label for="">direccion</label>
        <input type="text" name="direccion" id="direccion"><br>
        <label for="">estado</label>
        <input type="text" name="estado" id="categoria"><br><br>

        <input class="btn btn-success" type="submit" name="guardar" value="Registrar Datos">
    </form>
</div>

@endsection
