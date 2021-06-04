@extends('layouts.plantilla')
@section('contenido')

<form action="/volver" method="get">
	<button type="submit" class="btn btn-outline-dark btn-xs mx-2 my-2">
	  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
	 		<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
		</svg>
	</button>
</form>

	<div class="container" style="padding-top:15%; padding-bottom:10%; padding-left:15%; padding-right:15%;">

<div class="border border-start"  style="padding:2em; border-radius:25px; background:#b4b4b4; box-shadow:-8px -8px 16px #b3a3a3, 8px 8px 16px #000000;">

    <h3>Modificar Usuario</h3>

      <form action="/modificaUsuario/{{ $Usuarios->id }}" method="get">

			        <div class="row">

								<div class="col-md-6">
									<label class="form-label">Nombre:</label>
				          <input type="text" class="form-control" name="name" value="{{ $Usuarios->name}}">
								</div>
								<div class="col-md-6">
									<label class="form-label">Correo:</label>
				          <input type="text" class="form-control" name="email" value="{{ $Usuarios->email}}">
								</div>

			        </div>
							<div class="row mt-4">
				          <button type="submit" class="btn btn-danger" value="Introducir">Editar</button>
				      </div>

    </form>

	</div>

  </div>

@endsection
