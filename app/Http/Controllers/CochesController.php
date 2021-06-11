<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coches;
use App\Models\pujas;
use App\Models\User;
use App\Http\Controllers\CochesController;
use Illuminate\Support\Facades\Auth;
use SweetAlert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

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

public function insertaCoche(Request $request){
  $file = $request->file('imagen');

  //Generate a file name with extension
  $fileName = time().".".$file->getClientOriginalExtension();

  //Destino
  $destino = public_path('img/productos');
  $request->imagen->move($destino, $fileName);

  $coche = new Coches;

  $coche->foto=$fileName;

  $coche->marca=$request->marca;
  $coche->modelo=$request->modelo;
  $coche->cv=$request->cv;
  $coche->precio=$request->precio;
  $coche->tipo=$request->tipo;
  $coche->tiempo=$request->tiempo;

  $coche->save();

//SweetAlert
alert()->success('No ha habido ningun problema', '¡Subasta Añadida!');


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

//SweetAlert
  alert()->error('Subasta ya no esta disponible para los clientes', 'Subasta Borrada');

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

  $coche->foto=$coche->foto;

  $coche->save();

  //SweetAlert
  alert()->success('Modificado con exito', '¡Subasta Modificada!');

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
    $precioFinal = $coche->precioFinal;

    //Fechas, para la limitacion de pujas.
    $fecha1 = date('y-m-d'); // Fecha de hoy, es lo mismo que:  date("d/m/Y")
    $fecha2 = $coche->tiempo;

        $f1 = strtotime($fecha1);
        $f2 = strtotime($fecha2);

        if ($f1 > $f2) {
          alert()->error('La subasta ya ha terminado, suerte la proxima vez', 'Subasta Cerrada');
          return redirect('/dashboard');
        }else{

          if ($precioPuja > $precioFinal && $precioPuja > $precioInicial) { //Los compara

            if ($coche->user_id == $user_id) { //para que no puje el mismo

              alert()->warning('La puja mas alta es la tuya', '¡¡Tranquilo!!');
              return back();

            }else{

            $InsertarPuja = new Pujas;    //nueva puja en la bbdd
            $InsertarPuja->cantidad = $puja->precio; //Lo mismo que $precioPuja = $puja->precio;
            $InsertarPuja->user_id = $user_id; // La variable donde sacamos el user_id antes
            $InsertarPuja->coche_id = $coche->id;
            $InsertarPuja->nombre = $nombre; //Porque ya pasamos el $id en el formulario
            $InsertarPuja->save();

            $coche->precioFinal = $puja->precio; //$precioPuja es $puja->precio;
            $coche->user_id = auth()->user()->id;
            $coche->save();

            //SweetAlert
            alert()->message('Puja Realizada');

            $dinero = Pujas::where('coche_id',$id)->get();

            return back()->withInput();

            }

          }else{
            //Rellenar con el else el error. y conseguir que salga el nombre del que ha apostado
            alert()->warning('Rascate un poco mas el bolsillo', 'Puja baja');
            return back();
          }
        }
  }

  //Funcion ver para ver detalles de los coches
  public function verCoche($id){

      $coche = Coches::find($id);
      $nombre = auth()->user()->name;
      $user_id = auth()->user()->id;

      //Si no existe una puja no existe user_id, por lo que aqui se hace la compornbacion y si no existe pues no muestra nada de ganador ni nada de eso


      $user_id_ganador=$coche->user_id;
      $puja_con_user_id=Pujas::find($user_id_ganador);

        $user_id_coche = $coche->user_id;

        if (isset($user_id_coche)) {
          $user_id_ganador=$coche->user_id;
          $puja_con_user_id=Pujas::find($user_id_ganador);

          $nombrePuja = $puja_con_user_id->nombre;

              if (is_string($nombrePuja)) {
                $nombreGanador =$puja_con_user_id->nombre; //$puja_con_user_id->nombre;

                $dinero = Pujas::where('coche_id',$id)->get();

                return view("vistaCoche",['coches' => $coche, 'apuestas' => $dinero, 'nombre' => $nombre, 'ganador' => $nombreGanador]);
              }
        }


      $dinero = Pujas::where('coche_id',$id)->get();

    return view("vistaCoche",['coches' => $coche, 'apuestas' => $dinero, 'nombre' => $nombre]);
  }

  //
  //
  //
  //
  //
  //
  //
  //
  //
  //
  //
  //
  //USUARIOS

  //CRUD

  public function Usuarios(){
    $todosuser = User::all();
    return view("Usuarios",['usuarios' => $todosuser]);
  }


  public function crearUsuario(Request $datos){
    $user = new User;

    $user->name=$datos->name;
    $user->email=$datos->email;
    $user->password=$datos->password;
    $user->rol=$datos->rol;

    $user->save();

  //SweetAlert
  alert()->success('Listo para el inicio de sesión', '¡Usuario creado!');

  $todosuser = User::all();
  return view("Usuarios",['usuarios' => $todosuser]);
  }

  public function borrarUsuario($id){

    $user = User::find($id);


    if ($user != null) {
      $user->delete();
      $todosuser = User::all();

  //SweetAlert
    alert()->error('Usuario borrao con exito', 'Borrado');

  }else{
    $todosuser = User::all();
  }

    return view("Usuarios",['usuarios' => $todosuser]);

  }

  public function listadoUsuarios($id){

      $user = User::find($id);

    return view("modificaUsuarios",['Usuarios' => $user]);
  }

  public function modificaUsuario(Request $datos,$id){

    $user = User::find($id);

    $user->name=$datos->name;
    $user->email=$datos->email;
    $user->password=$user->password;

    $user->save();

    //SweetAlert
    alert()->success('Modificado con exito', '¡Usuario Modificado!');

    $todosuser = User::all();

    return redirect("/Usuarios");
  }

  public function miPerfil(){

    $user_id = auth()->user()->id;

    $user = User::find($user_id);

    return view("miPerfil",['user' => $user]);
  }

  public function nuevaContraseña(Request $datos){
    $user_id = auth()->user()->id;

    $user = User::find($user_id);

    if (isset($datos->password)) {
      if ($user->password != $datos->password) {
        $user->name=$datos->name;
        $user->email=$datos->email;
        $user->password=$datos->password;

          $user->save();
          alert()->success('Ya se ha modificado tu usuario y contraseña', 'Todo bien');
          return back();
      }else{
        alert()->warning('La contraseña nueva tiene que ser diferente', 'Error');
          return back();
      }
    }else{
          $user->name=$datos->name;
          $user->email=$datos->email;
          $user->password=$user->password;
            alert()->success('Ya se ha modificado tu usuario', 'Todo bien');
          $user->save();
      return back();
    }



  }
}
