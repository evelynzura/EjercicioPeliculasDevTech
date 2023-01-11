@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-heigth:247px">
    <h1>Actualizar Película</h1>

    <form action="{{route('modifyPeliculas',$peliculas->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Título</label>
        <input type="text" name="titulo" id="titulo" value="{{$peliculas->titulo}}"><br>
        <label for="">Año de Estreno</label>
        <input type="text" name="estreno" id="estreno" value="{{$peliculas->estreno}}"><br>
        <label for="">Tiempo de Duración</label>
        <input type="text" name="duracion" id="duracion" value="{{$peliculas->duracion}}"><br>
        <label for="">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" value="{{$peliculas->descripcion}}"><br>
        <label for="">Categoria</label>
        <input type="text" name="idcategoria" id="idcategoria" value="{{$peliculas->idcategoria}}"><br><br>

        <input class="btn btn-success" type="submit" name="guardar" value="Actualizar Datos">
    </form>
</div>

@endsection
