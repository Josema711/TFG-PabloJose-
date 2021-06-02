<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CochesController;

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


                            //Rutas para paginas sueltas
Route::get('/', function () {
    return view('welcome');
});
Route::get('/inserta', function() {
    return view('IntroducirCoche');
});
Route::get('/VistaVentas', function () {
    return view('ventas');
});


                          //Rutas para paginas vinculadas con metodos
Route::get('/dashboard', [CochesController::class, 'entrada'])->middleware(['auth'])->name('dashboard');

Route::get('/salir',[CochesController::class, 'salir'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Ruta para listar todos los coches
// Route::get('/dashboard',[CochesController::class,'listado']);

//Ruta para insdertar un dato en la base de datos
Route::get('/insertaCoche',[CochesController::class,'insertaCoche']);

//Ruta para borrar un registro de la base de datos
Route::get('/borrarCoche/{id}',[CochesController::class,'borrarCoche']);

//Ruta para modificar un registro
Route::get('/listadoCoches/{id}',[CochesController::class,'listadoCoches']);
Route::get('/modificaCoche/{id}',[CochesController::class,'modificaCoche']);

//Ruta para ver un coche en detalle tanto el admin como los compradores
Route::get('/verCoche/{id}',[CochesController::class,'verCoche']);

//Ruta para el filtrado de coches
Route::post('/filtrarCocheA',[CochesController::class,'filtrarCocheA']);
Route::post('/filtrarCocheC',[CochesController::class,'filtrarCocheC']);

Route::get('/volver', [CochesController::class, 'volver']);


Route::get('/listadoF', [CochesController::class, 'listadoF']);

//Pujas
Route::get('/pujar/{id}',[CochesController::class,'pujar']);

//
//
//
//
//Usuarios

Route::get('/Usuarios', [CochesController::class,'Usuarios']);

Route::get('/newUser', function() {
    return view('crearUsuario');
});
//Ruta para insdertar un dato en la base de datos
Route::get('/crearUser',[CochesController::class,'crearUsuario']);

//Ruta para borrar un registro de la base de datos
Route::get('/borrarUsuario/{id}',[CochesController::class,'borrarUsuario']);

//Ruta para modificar un registro
Route::get('/listadoUsuarios/{id}',[CochesController::class,'listadoUsuarios']);
Route::get('/modificaUsuario/{id}',[CochesController::class,'modificaUsuario']);
