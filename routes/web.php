<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadosController;
use App\Http\Controllers\categoriasController;
use App\Http\Controllers\peliculasController;
use App\Http\Controllers\clientesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/verPlantilla', function () {
    return view('/plantilla');
});

/**Rutas para mtto de peliculas */
Route::get('/verPeliculas',[peliculasController::class, 'mostrarPeliculas'])->name('getPeliculas');
Route::get('/formPeliculas',[peliculasController::class, 'formNuevasPeliculas'])->name('newPeliculas');
Route::post('guardarPeliculas',[peliculasController::class, 'agregarPeliculas'])->name('addPeliculas');
Route::get('/editarPeliculas/{id}',[peliculasController::class, 'formActualizarPeliculas'])->name('editPeliculas');
Route::put('/modificarPeliculas/{id}',[peliculasController::class, 'actualizarPeliculas'])->name('modifyPeliculas');
Route::delete('/borrarPeliculas/{id}',[peliculasController::class, 'eliminarPeliculas'])->name('erasePeliculas');


/**Rutas para mtto de categorias*/
Route::get('/verCategorias',[categoriasController::class, 'mostrarCategorias'])->name('getCategorias');
Route::get('/formCategorias',[categoriasController::class, 'formNuevasCategorias'])->name('newCategorias');
Route::post('guardarCategorias',[categoriasController::class, 'agregarCategorias'])->name('addCategorias');
Route::get('/editarCategorias/{id}',[categoriasController::class, 'formActualizarCategorias'])->name('editCategorias');
Route::put('/modificarCategorias/{id}',[categoriasController::class, 'actualizarCategorias'])->name('modifyCategorias');
Route::delete('/borrarCategorias/{id}',[categoriasController::class, 'eliminarCategorias'])->name('eraseCategorias');


/**Rutas para mtto de Clientes */
Route::get('/verClientes',[clientesController::class, 'mostrarClientes'])->name('getClientes');
Route::get('/formClientes',[clientesController::class, 'formNuevosClientes'])->name('newClientes');
Route::post('guardarClientes',[clientesController::class, 'agregarClientes'])->name('addClientes');
Route::get('/editarClientes/{id}',[clientesController::class, 'formActualizarClientes'])->name('editClientes');
Route::put('/modificarClientes/{id}',[clientesController::class, 'actualizarClientes'])->name('modifyClientes');
Route::delete('/borrarClientes/{id}',[clientesController::class, 'eliminarClientes'])->name('eraseClientes');

/**Rutas para mtto de Empleados */
Route::get('/verEmpleados',[empleadosController::class, 'mostrarEmpleados'])->name('getEmpleados');
Route::get('/formEmpleados',[empleadosController::class, 'formNuevosEmpleados'])->name('newEmpleados');
Route::post('guardarEmpleados',[empleadosController::class, 'agregarEmpleados'])->name('addEmpleados');
Route::get('/editarEmpleados/{id}',[empleadosController::class, 'formActualizarEmpleados'])->name('editEmpleados');
Route::put('/modificarEmpleados/{id}',[empleadosController::class, 'actualizarEmpleados'])->name('modifyEmpleados');
Route::delete('/borrarEmpleados/{id}',[empleadosController::class, 'eliminarEmpleados'])->name('eraseEmpleados');
