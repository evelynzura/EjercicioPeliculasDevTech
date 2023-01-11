<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleadosModel;

class empleadosController extends Controller
{
    /**llamando todas las Empleados */
    public function mostrarEmpleados(){
        $empleados = empleadosModel::all();

        return view("paginas.empleados", array("empleados"=>$empleados));
    }

    /**formulario para nueva Empleados */
    public function formNuevosEmpleados(){
        return view("paginas.empleadosAgregar");
    }

    /**registrando Empleados */
    public function agregarEmpleados(Request $request){
        $emple = new empleadosModel();
        $emple->nombre = $request->post('nombre');
        $emple->apellido = $request->post('apellido');
        $emple->usuario = $request->post('usuario');
        $emple->clave = $request->post('clave');
        $emple->correo = $request->post('correo');
        $emple->save();

        return redirect()->route('getEmpleados');

    }

    /**formulario para actualizar Empleados */
    public function formActualizarEmpleados($id){
        $emple = empleadosModel::find($id);
        return view("paginas.empleadosActualizar", array("empleados"=> $emple));
    }

    /** actualizando Empleados */

    public function actualizarEmpleados(Request $request, $id){
        $emple = empleadosModel::find($id);
        $emple->nombre = $request->post('nombre');
        $emple->apellido = $request->post('apellido');
        $emple->usuario = $request->post('usuario');
        $emple->clave = $request->post('clave');
        $emple->correo = $request->post('correo');
        $emple->update();

        return redirect()->route('getEmpleados');
    }

    /**eliminando una Empleados */

    public function eliminarEmpleados($id){
        $emple = empleadosModel::where('id', '=',$id)->delete();
        return redirect()->route('getEmpleados');
    }
}
