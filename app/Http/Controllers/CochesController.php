<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coches;
use App\Models\pujas;
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

public function volver(Request $request){
return redirect('/dashboard');
}

public function insertaCoche(Request $datos){
  $coche = new Coches;

  $coche->marca=$datos->marca;
  $coche->modelo=$datos->modelo;
  $coche->cv=$datos->cv;
  $coche->precio=$datos->precio;
  $coche->tipo=$datos->tipo;
  $coche->tiempo=$datos->tiempo;

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
  $coche->tiempo=$datos->tiempo;

  $coche->save();

  $todosCoches = Coches::all();

  return redirect('/dashboard');
}

  //INICIO

//Esta funcion hace el filtrado y me lleva directo al menu admin con la opcion de añadir subasta tambien.
  public function filtrarCocheA(Request $tipo){

      $tipoF = $tipo->tipo;

      $coche = Coches::where('tipo', $tipoF)->get();

    return view("menuAdmin",['coches' => $coche]);
  }
//Esta funcion me lleva a menu comprador para asi diferenciar la vista a la que me devuelve aunque sean las dos la misma funcion
  public function filtrarCocheC(Request $tipo){

      $tipoF = $tipo->tipo;

      $coche = Coches::where('tipo', $tipoF)->get();

    return view("menuComprador",['coches' => $coche]);
  }



  //FIN



  public function listadoF(Request $tipo){

    $todosCoches = Coches::all();

    return redirect('/dashboard');
  }

  public function pujar(Request $puja, $id){

    $coche = Coches::find($id); //Encuentra el coche al que se le va a pujar
    $precioInicial = $coche->precio; // saca elprecio inicial del coche
		$precioPuja = $puja->precio; //saca el precio que ha pujado el cliente
    $user_id = auth()->user()->id;
    $nombre = auth()->user()->name;
    $respuesta;

    if ($precioPuja > $precioInicial) { //Los compara

      $InsertarPuja = new Pujas;    //nueva puja en la bbdd
      $InsertarPuja->cantidad = $puja->precio; //Lo mismo que $precioPuja = $puja->precio;
      $InsertarPuja->user_id = $user_id; // La variable donde sacamos el user_id antes
      $InsertarPuja->coche_id = $coche->id;
      $InsertarPuja->nombre = $nombre; //Porque ya pasamos el $id en el formulario
      $InsertarPuja->save();

      $coche->precioFinal=$puja->precio; //$precioPuja es $puja->precio;
      $coche->save();

      $dinero = Pujas::where('coche_id',$id)->get();

      return view("vistaCoche",['coches' => $coche, 'apuestas' => $dinero]);

    }else{
      //Rellenar con el else el error. y conseguir que salga el nombre del que ha apostado
    }
  }

  //Funcion ver para ver detalles de los coches
  public function verCoche($id){

      $coche = Coches::find($id);
      $nombre = auth()->user()->name;
      $user_id = auth()->user()->id;

      $dinero = Pujas::where('coche_id',$id)->get();

    return view("vistaCoche",['coches' => $coche, 'apuestas' => $dinero, 'nombre' => $nombre]);
  }

}
