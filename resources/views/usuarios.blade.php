@extends('layouts.plantilla')
@section('contenido')

<form action="/volver" method="get">
	<button type="submit" class="btn btn-outline-dark btn-xs mx-2 my-2">
	  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
	 		<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
		</svg>
	</button>
</form>

<h2 style="text-align:center; margin-top:5%; margin-bottom:5%;">Usuarios</h2>

<div class="container" style="margin-bottom:25%; padding-left:20%; padding-right:20%;">
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre de contacto</th>
          <th scope="col">Correo</th>
          <th scope="col">Editar</th>
          <th scope="col">Borrar</th>
        </tr>
      </thead>
      <tbody>
        	@foreach ($usuarios as $user)
            <tr>
              <td class="name">{{$user->name}}</td>
              <td class="email">{{$user->email}}</td>
              <td>
                <form action="/listadoUsuarios/{{ $user->id }}" method="get">
                  <input type="submit" value="Edit">
                </form>
              </td>
              <td>
                <form action="/borrarUsuario/{{ $user->id }}" method="get">
                  <input type="submit" value="Borrar">
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
    </table>

    <a class="btn btn-outline-dark" href="{{ url('/newUser') }}" role="button">Nuevo Usuario</a>
</div>


@endsection
