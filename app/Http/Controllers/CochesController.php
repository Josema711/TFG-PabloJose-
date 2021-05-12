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
           return view('menuAdmin');
           break;
        case 'comprador':
            return view('menuComprador');
            break;
        default:
           salida($request);
           break;
      //De prueba para ver si funciona
     }
   }

//Salir de cada pagina al login
public function salida(Request $request){
  Auth::logout();

  $request->session()->invalidate();
  $request->session()->regenerateToken();

  return redirect('/');
}

}
