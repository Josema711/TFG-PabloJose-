@extends('layouts.plantilla')
@section('contenido')



<form action="/volver" method="get">
	<button type="submit" class="btn btn-outline-dark btn-xs mx-2 my-2">
	  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
	 		<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
		</svg>
	</button>
</form>




<div class="row" style="text-align:center; margin-top:5%; margin-bottom:2%; margin-right:10%; margin-left:10%;">
	<h2>{{ $coches->marca }} {{ $coches->modelo }}</h2>
</div>

<div class="row" style="margin-bottom:20%; margin-right:10%; margin-left:10%;">
	<div class="imagen col-7 align-self-center">
		<img src="{{asset('img/productos/'.$coches->foto)}}" style="width:70%;" class="img-thumbnail" alt="{{ $coches->marca }} {{ $coches->modelo }}">
	</div>
	<div class="text col-5 align-self-center">
			<p>Se trata de un <b>{{ $coches->marca }}</b> ni mas ni menos, el vehiculo esta en un estado impecable, con todos los controles mecanicos necesarios para saber que este {{$coches->tipo}} esta a la altura, chasis y carroceria de ¡10!
				 con un precio inicial de <b>{{ $coches->precio }} €</b>
			 tiene una potencia de <b>{{ $coches->cv }}</b> caballos, un autentico cochazo. No te lo pierdas, puja y que gane el que mas dinero tenga.</p>
	</div>

	<?php
	$fecha1 = date('y-m-d'); // Fecha de hoy, es lo mismo que:  date("d/m/Y")
	$fecha2 = $coches->tiempo;

			$f1 = strtotime($fecha1);
			$f2 = strtotime($fecha2);

			$segundos = $f2 - $f1; //Son el numero de segundos que hay entre las dos fechas
			$dias = $segundos/(3600*24); //Lo divido por los segundos que tiene una hora, por las 24 horas del dia
			$dias = round($dias); //La division puede no ser exacta, redondeo.



	if ($f1 > $f2){
	   $res = "Esta subasta ya ha terminado";
	} elseif ($f1 == $f2) {
	  $res = "La subasta termina hoy";
	} else{
		  if ($dias == '1') {
		  	$res = "La subasta termina mañana.";
		  }else{
				$res = "La subasta termina en ".$dias." dias.";
			}

	}

	 ?>

	 <div class="alert alert-dark d-flex align-items-center my-5" role="alert" >
				   	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill=#878280 class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
				     	<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
				   	</svg>
		   	<div>
				 	{{$res}}
		   	</div>
 		</div>
@if($f1 <= $f2)
		<div class="container my-3">
				<form class="" action="/pujar/{{ $coches->id }}" method="get">
					<div class="row">
						<label class="form-label">Precio:</label>
					</div>
					<div class="row">
						<div class="col">
							<input type="number" class="form-control" name="precio" value="{{$coches->precioFinal}}">
						</div>
						<div class="col">
							<button class="btn btn-danger" type="submit" name="button">Pujar</button>
						</div>
					</div>
				</form>
		</div>
<br>
		<div class="container">
			@foreach ($apuestas as $pujas)
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>¡Nueva Puja!</strong> Realizada por <strong>{{$pujas->nombre}}</strong> con un valor de <strong>{{$pujas->cantidad}} €</strong>.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				{{$ganador}}
			</div>
			@endforeach
		</div>
@endif

<!-- Ganador -->
@if($f1 > $f2)

@if(isset($ganador))
		<div class="container">
					<div class="alert alert-success" role="alert">
					  <h4 class="alert-heading">Enhorabuena {{$ganador}}!</h4>
					  <p>Tu puja ha sido la mas alta por lo que el coche es tuyo, ponte en contacto con nosotros para realizar los tramites.</p>
					  <hr>
					  <p class="mb-0">{{ $coches->marca }} {{ $coches->modelo }}</p>
					</div>
		</div>
		@else
		<div class="container">
					<div class="alert alert-success" role="alert">
						<h4 class="alert-heading">Puja cerrada sin comprador!</h4>
						<p>Esta puja se repetira proximamente ya que no se ha comprado el articulo</p>
						<hr>
						<p class="mb-0">{{ $coches->marca }} {{ $coches->modelo }}</p>
					</div>
		</div>
	@endif
@endif

</div>

@endsection
