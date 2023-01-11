@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-heigth:247px">
    <h1>Agregar Película</h1>

    <form action="{{route('addCategorias')}}" method="POST">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre"><br>

        <input class="btn btn-success" type="submit" name="guardar" value="Registrar Datos">
    </form>
</div>

@endsection
