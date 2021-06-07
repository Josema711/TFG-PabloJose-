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


<div class="container-fluid justify-content-center my-5 me-5">
  <nav class="navbar navbar-dark bg-dark">
  <form class="container-fluid justify-content-center">

    <a class="btn btn-dark btn-responsive ms-5" href="{{ url('/MiPerfil') }}" role="button">Usuario</a>
<p style="color:rgba(#000000, 0);" opacity>Espacio suficiente para que este al principio del todo</p>
    <div class="dropdown" role="group">
<button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
Coches en subasta
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
  <form class="dropdown-item" action="/filtrarCocheC" method="post">
      {{csrf_field()}}
    <input type="hidden" name="tipo" value="Deportivo">
    <button class="dropdown-item "type="submit" name="button">Coches Deportivo</button>
  </form>
</li>
<li>
  <form class="dropdown-item" action="/filtrarCocheC" method="post">
      {{csrf_field()}}
    <input type="hidden" name="tipo" value="SUV">
    <button class="dropdown-item "type="submit" name="button">SUV</button>
  </form>
</li>
<li>
  <form class="dropdown-item" action="/filtrarCocheC" method="post">
      {{csrf_field()}}
    <input type="hidden" name="tipo" value="Coupe">
    <button class="dropdown-item "type="submit" name="button">Coupes</button>
  </form>
</li>
<li>
  <form class="dropdown-item" action="/filtrarCocheC" method="post">
      {{csrf_field()}}
    <input type="hidden" name="tipo" value="Americano">
    <button class="dropdown-item "type="submit" name="button">Coches Americanos</button>
  </form>
</li>
<li>
  <form class="dropdown-item" action="/filtrarCocheC" method="post">
      {{csrf_field()}}
    <input type="hidden" name="tipo" value="Clasico">
    <button class="dropdown-item "type="submit" name="button">Coches Clasicos</button>
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
            <img src="{{asset('img/productos/'.$coche->foto)}}" class="card-img-top" width="100%" fill="#000000" alt="Imagen coche">
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
		 										<form action="/verCoche/{{ $coche->id }}" method="get">
		 				 							<input type="submit" value="Ver">
		 				 						</form>
                </div>

                <?php
                $fecha1 = date('y-m-d'); // Fecha de hoy, es lo mismo que:  date("d/m/Y")
                $fecha2 = $coche->tiempo;

                    $f1 = strtotime($fecha1);
                    $f2 = strtotime($fecha2);

                    $segundos = $f2 - $f1; //Son el numero de segundos que hay entre las dos fechas
                    $dias = $segundos/(3600*24); //Lo divido por los segundos que tiene una hora, por las 24 horas del dia
                    $dias = round($dias); //La division puede no ser exacta, redondeo.



                    if ($f1 < $f2){
                      $res = "check.png";
                  	} else if ($f1 == $f2) {
                      $res = "almost.png";
                    }else{
                       $res = "cross.png";
                  	}

                 ?>
                <small class="text-muted"><img src="{{asset('img/'.$res)}}" alt=""></small>
              </div>
            </div>
          </div>
        </div>
					@endforeach
			</div>



		</div>
	</div>



@endsection
