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
      $user=Auth::user();

      if($user->rol=='admin') {
        return view('menuAdmin');
      }else {
        return view('menuComprador');
      }
   }


//Salir de cada pagina al login
public function salir(Request $request){
  Auth::logout();

  $request->session()->invalidate();
  $request->session()->regenerateToken();

  return redirect('/');
}

}
