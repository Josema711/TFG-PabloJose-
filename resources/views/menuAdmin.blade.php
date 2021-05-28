@extends('layouts.plantilla')
@section('contenido')
<!-- {{asset('img/slide_1.jpg')}} -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/slide_1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/slide_2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/slide_3.jpg')}}" class="d-block w-100" alt="...">
    </div>
		<div class="carousel-item">
      <img src="{{asset('img/slide_4.jpg')}}" class="d-block w-100" alt="...">
    </div>
		<div class="carousel-item">
      <img src="{{asset('img/slide_5.jpg')}}" class="d-block w-100" alt="...">
    </div>
		<div class="carousel-item">
      <img src="{{asset('img/slide_6.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

			<div class="container-fluid justify-content-center my-5">
				<nav class="navbar navbar-dark bg-dark">
			  <form class="container-fluid justify-content-center">
					<a class="btn btn-dark btn-responsive" href="{{ url('/inserta') }}" role="button">Añadir Subasta</a>
					<p style="color:rgba(#000000, 0);" opacity>Añadir Subasta</p>
					<div class="dropdown" role="group">
			<button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
			Filtrar segun tipo
			</button>
			</form>
			<ul class="dropdown-menu dropdown-menu-dark">
				<li>
					<form class="dropdown-item" action="/listadoF" method="get">
						<input type="hidden" name="tipo" value="Todos">
						<button class="dropdown-item "type="submit" name="button">Todos</button>
					</form>
				</li>
			<li>
				<form class="dropdown-item" action="/filtrarCoche" method="post">
						{{csrf_field()}}
					<input type="hidden" name="tipo" value="Deportivo">
					<button class="dropdown-item "type="submit" name="button">Deportivo</button>
				</form>
			</li>
			<li>
				<form class="dropdown-item" action="/filtrarCoche" method="post">
						{{csrf_field()}}
					<input type="hidden" name="tipo" value="SUV">
					<button class="dropdown-item "type="submit" name="button">SUV</button>
				</form>
			</li>
			<li>
				<form class="dropdown-item" action="/filtrarCoche" method="post">
						{{csrf_field()}}
					<input type="hidden" name="tipo" value="Coupe">
					<button class="dropdown-item "type="submit" name="button">Coupe</button>
				</form>
			</li>
			<li>
				<form class="dropdown-item" action="/filtrarCoche" method="post">
						{{csrf_field()}}
					<input type="hidden" name="tipo" value="Americano">
					<button class="dropdown-item "type="submit" name="button">Americano</button>
				</form>
			</li>
			<li>
				<form class="dropdown-item" action="/filtrarCoche" method="post">
						{{csrf_field()}}
					<input type="hidden" name="tipo" value="Clasico">
					<button class="dropdown-item "type="submit" name="button">Clasico</button>
				</form>
			</li>
			</ul>
			</div>

			</nav>
		</div>



	<div class="album pt-3 pb-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

								@foreach ($coches as $coche)

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
																							preserveAspectRatio="xMidYMid slice" focusable="false">
										<title>Placeholder</title>
										<rect width="100%" height="100%" fill="#000000"/>
										<text x="50%" y="50%" fill="#eceeef" dy=".3em">Coches</text>
						</svg>

    			<div class="card-body">
						<h5 class="card-title">{{ $coche->marca }} {{ $coche->modelo }}</h5>
              <p class="card-text">
								<tbody>
							    <ul>
							      <li>Precio: {{ $coche->precio }} €</li>
										<li>Potencia: {{ $coche->cv }} CV</li>
										<li>Tipo: {{ $coche->tipo }}</li>
							    </ul>
							  </tbody>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
											<form action="/listadoCoches/{{ $coche->id }}" method="get">
				 							 	<input type="submit" value="Edit">
				 						 	</form>
								 <br>
											 <form action="/borrarCoche/{{ $coche->id }}" method="get">
				 							 	<input type="submit" value="Borrar">
				 						 	</form>
									<br>
		 										<form action="/verCoche/{{ $coche->id }}" method="get">
		 				 							<input type="submit" value="Ver">
		 				 						</form>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
					@endforeach
			</div>



		</div>
	</div>


@endsection
