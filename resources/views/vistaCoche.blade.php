@extends('layouts.plantilla')
@section('contenido')

<div class="row" style="margin-top:10%; margin-bottom:20%; margin-right:10%; margin-left:10%;">
	<div class="imagen col-7 align-self-center">
		<img src="{{asset('img/slide_1.jpg')}}" style="width:70%;" class="img-thumbnail" alt="{{ $coches->marca }} {{ $coches->modelo }}">
	</div>
	<div class="text col-5 align-self-center">
		<h5>{{ $coches->marca }} {{ $coches->modelo }}</h5>
			<p>Se trata de un <b>{{ $coches->tipo }}</b> ni mas ni menos, con un precio inicial de <b>{{ $coches->precio }} €</b>
			 tiene una potencia de <b>{{ $coches->cv }}</b> caballos, un autentico cochazo. No te lo pierdas, puja y que gane el que mas dinero tenga.</p>
	</div>
	<br>
	<div id="divTiempo">
			 <h5 id="tiempo"></h5>
		</div>
</div>

@endsection
