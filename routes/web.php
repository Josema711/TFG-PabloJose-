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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inserta', function() {
    return view('IntroducirCoche');
});

Route::get('/dashboard', [CochesController::class, 'entrada'])->middleware(['auth'])->name('dashboard');

Route::get('/salir',[CochesController::class, 'salir'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Ruta para listar todos los coches
Route::get('/dashboard',[CochesController::class,'listado']);

//Ruta para insdertar un dato en la base de datos
Route::get('/insertaCoche',[CochesController::class,'insertaCoche']);

//Ruta para borrar un registro de la base de datos
Route::get('/borrarCoche/{id}',[CochesController::class,'borrarCoche']);

//Ruta para modificar un registro
Route::get('/listadoCoches/{id}',[CochesController::class,'listadoCoches']);
Route::get('/modificaCoche/{id}',[CochesController::class,'modificaCoche']);
