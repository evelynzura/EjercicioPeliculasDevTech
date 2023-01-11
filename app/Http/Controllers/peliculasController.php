<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peliculasModel;

class peliculasController extends Controller
{

    /**llamando todas las peliculas */
    public function mostrarPeliculas(){
        $peliculas = peliculasModel::all();

        return view("paginas.peliculas", array("peliculas"=>$peliculas));
    }

    /**formulario para nueva pelicula */
    public function formNuevasPeliculas(){
        return view("paginas.peliculasAgregar");
    }

    /**registrando pelicula */
    public function agregarPeliculas(Request $request){
        $peli = new peliculasModel();
        $peli->titulo = $request->post('titulo');
        $peli->estreno = $request->post('estreno');
        $peli->duracion = $request->post('duracion');
        $peli->descripcion = $request->post('descripcion');
        $peli->idcategoria = $request->post('idcategoria');
        $peli->save();

        return redirect()->route('getPeliculas');

    }

    /**formulario para actualizar pelicula */
    public function formActualizarPeliculas($id){
        $peli = peliculasModel::find($id);
        return view("paginas.peliculasActualizar", array("peliculas"=> $peli));
    }

    /** actualizando peliculas */

    public function actualizarPeliculas(Request $request, $id){
        $peli = peliculasModel::find($id);
        $peli->titulo = $request->post('titulo');
        $peli->estreno = $request->post('estreno');
        $peli->duracion = $request->post('duracion');
        $peli->descripcion = $request->post('descripcion');
        $peli->idcategoria = $request->post('idcategoria');
        $peli->update();

        return redirect()->route('getPeliculas');
    }

    /**eliminando una pelicula */

    public function eliminarPeliculas($id){
        $peli = peliculasModel::where('id', '=',$id)->delete();
        return redirect()->route('getPeliculas');
    }


}
