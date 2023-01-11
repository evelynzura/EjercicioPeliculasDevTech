<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientesModel;

class clientesController extends Controller
{
        /**llamando todas las Clientes */
        public function mostrarClientes(){
            $clientes = clientesModel::all();

            return view("paginas.clientes", array("clientes"=>$clientes));
        }

        /**formulario para nueva clientes */
        public function formNuevosClientes(){
            return view("paginas.clientesAgregar");
        }

        /**registrando clientes */
        public function agregarClientes(Request $request){
            $clien = new clientesModel();
            $clien->nombre = $request->post('nombre');
            $clien->apellido = $request->post('apellido');
            $clien->usuario = $request->post('usuario');
            $clien->clave = $request->post('clave');
            $clien->correo = $request->post('correo');
            $clien->telefono = $request->post('telefono');
            $clien->direccion = $request->post('direccion');
            $clien->estado = $request->post('estado');
            $clien->save();

            return redirect()->route('getClientes');

        }

        /**formulario para actualizar clientes */
        public function formActualizarClientes($id){
            $clien = clientesModel::find($id);
            return view("paginas.clientesActualizar", array("clientes"=> $clien));
        }

        /** actualizando Clientes */

        public function actualizarClientes(Request $request, $id){
            $clien = clientesModel::find($id);
            $clien->nombre = $request->post('nombre');
            $clien->apellido = $request->post('apellido');
            $clien->usuario = $request->post('usuario');
            $clien->clave = $request->post('clave');
            $clien->correo = $request->post('correo');
            $clien->telefono = $request->post('telefono');
            $clien->direccion = $request->post('direccion');
            $clien->estado = $request->post('estado');
            $clien->update();

            return redirect()->route('getClientes');
        }

        /**eliminando una clientes */

        public function eliminarClientes($id){
            $clien = clientesModel::where('id', '=',$id)->delete();
            return redirect()->route('getClientes');
        }


}
