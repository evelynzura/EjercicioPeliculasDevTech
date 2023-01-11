@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-heigth:247px">
    <h1>Actualizar Película</h1>

    <form action="{{route('modifyCategorias',$categorias->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{$categorias->nombre}}"><br>

        <input class="btn btn-success" type="submit" name="guardar" value="Actualizar Datos">
    </form>
</div>

@endsection
