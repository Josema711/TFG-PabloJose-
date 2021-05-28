<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coches;
use App\Http\Controllers\CochesController;
use Illuminate\Support\Facades\Auth;

class CochesController extends Controller
{


//Roles de prueba
  public function entrada(){
      switch (Auth::user()->rol) {
        case 'admin':
        $todosCoches = Coches::all();
        //Pruebas en la view prueba.blade.php
        //return view('prueba',['coches' => $todosCoches]);

        //Return de verdad
           return view('menuAdmin',['coches' => $todosCoches]);
          break;

        case 'comprador':
        $todosCoches = Coches::all();
          return view('menuComprador',['coches' => $todosCoches]);
          break;
        default:
          salir($request);
        break;
   }
 }


//Salir de cada pagina al login
public function salir(Request $request){
  Auth::logout();

  $request->session()->invalidate();
  $request->session()->regenerateToken();

  return redirect('/');
}

public function insertaCoche(Request $datos){
  $coche = new Coches;

  $coche->marca=$datos->marca;
  $coche->modelo=$datos->modelo;
  $coche->cv=$datos->cv;
  $coche->precio=$datos->precio;
  $coche->tipo=$datos->tipo;

  $coche->save();

return redirect('/dashboard');
}

public function listado(){

  $todosCoches = Coches::all();

  return view("menuAdmin",['coches' => $todosCoches]);

}

public function borrarCoche($id){

  $coche = Coches::find($id);


  if ($coche != null) {
    $coche->delete();
    $todosCoches = Coches::all();
}else{
  $todosCoches = Coches::all();
}

    return redirect('/dashboard');

}

public function listadoCoches($id){

    $coche = Coches::find($id);

  return view("modificaCoches",['coches' => $coche]);
}

public function modificaCoche(Request $datos,$id){

  $coche = Coches::find($id);

  $coche->marca=$datos->marca;
  $coche->modelo=$datos->modelo;
  $coche->cv=$datos->cv;
  $coche->precio=$datos->precio;
  $coche->tipo=$datos->tipo;

  $coche->save();

  $todosCoches = Coches::all();

  return redirect('/dashboard');
}

  //Funcion ver para ver detalles de los coches
  public function verCoche($id){

      $coche = Coches::find($id);

      //LLevar la variable de tiempo para colocar el temporizador

    return view("vistaCoche",['coches' => $coche]);
  }


  public function filtrarCoche(Request $tipo){

      $tipoF = $tipo->tipo;

      $coche = Coches::where('tipo', $tipoF)->get();

    return view("menuAdmin",['coches' => $coche]);
  }

  public function listadoF(Request $tipo){
    
    $todosCoches = Coches::all();

    return redirect('/dashboard');
  }

}
