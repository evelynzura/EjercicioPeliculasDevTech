<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoriasModel;

class categoriasController extends Controller
{
       /**llamando todas las Categorias */
       public function mostrarCategorias(){
        $categorias = categoriasModel::all();

        return view("paginas.categorias", array("categorias"=>$categorias));
    }

    /**formulario para nueva categorias */
    public function formNuevasCategorias(){
        return view("paginas.categoriasAgregar");
    }

    /**registrando categorias */
    public function agregarCategorias(Request $request){
        $cate = new categoriasModel();
        $cate->nombre = $request->post('nombre');
        $cate->save();

        return redirect()->route('getCategorias');

    }

    /**formulario para actualizar categorias */
    public function formActualizarCategorias($id){
        $cate = categoriasModel::find($id);
        return view("paginas.categoriasActualizar", array("categorias"=> $cate));
    }

    /** actualizando Categorias */

    public function actualizarCategorias(Request $request, $id){
        $cate = categoriasModel::find($id);
        $cate->nombre = $request->post('nombre');
        $cate->update();

        return redirect()->route('getCategorias');
    }

    /**eliminando una categorias */

    public function eliminarCategorias($id){
        $cate = categoriasModel::where('id', '=',$id)->delete();
        return redirect()->route('getCategorias');
    }


}
