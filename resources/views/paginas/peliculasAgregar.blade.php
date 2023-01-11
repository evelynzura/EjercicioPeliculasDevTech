@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-heigth:247px">
    <h1>Agregar Película</h1>

    <form action="{{route('addPeliculas')}}" method="POST">
        @csrf
        <label for="">Título</label>
        <input type="text" name="titulo" id="titulo"><br>
        <label for="">Año de Estreno</label>
        <input type="text" name="estreno" id="estreno"><br>
        <label for="">Tiempo de Duración</label>
        <input type="text" name="duracion" id="duracion"><br>
        <label for="">Descripción</label>
        <input type="text" name="descripcion" id="descripcion"><br>
        <label for="">Categoria</label>
        <input type="text" name="idcategoria" id="idcategoria"><br><br>

        <input class="btn btn-success" type="submit" name="guardar" value="Registrar Datos">
    </form>
</div>

@endsection
