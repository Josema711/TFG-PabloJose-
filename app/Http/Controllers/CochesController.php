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
          return view('menuAdmin',['coches' => $todosCoches]);
          break;
        case 'comprador':
          return view('menuComprador');
          //Alomejor hay que meter lo de todos los coches $todosCoches = Coches::all(); para mostrar un listado de todos los coches
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

  $coche->save();

  $todosCoches = Coches::all();

  return redirect('/dashboard');

}

}
