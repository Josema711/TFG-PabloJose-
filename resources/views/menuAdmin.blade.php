<!DOCTYPE html>
	<html lang="es" dir="ltr">
 	 <head>
    	<meta charset="utf-8">
    	<title></title>
			<link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&family=Reggae+One&display=swap" rel="stylesheet">


			<link href="/css/bootstrap.min.css" rel="stylesheet">

				</head>
			  	<body>

	    <!-- Favicons -->
	<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#7952b3">


	    <style>
	      .bd-placeholder-img {
	        font-size: 1.125rem;
	        text-anchor: middle;
	        -webkit-user-select: none;
	        -moz-user-select: none;
	        user-select: none;
	      }

	      @media (min-width: 768px) {
	        .bd-placeholder-img-lg {
	          font-size: 3.5rem;
	        }
	      }
	    </style>


	  </head>
	  <body>

	<header>
	  <div class="collapse bg-dark" id="navbarHeader">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-8 col-md-7 py-4">
	          <h4 class="text-white">About us</h4>
	          <p class="text-muted">Somos una empresa muy abiciosa y exclusiva solo apta para aquellos que habeis sido seleccionados y aprobados por el ADMIN, aqui podras encontrar subastas de los coches mas lujosos del mundo. No te cortes y compra.</p>
	        </div>
	        <div class="col-sm-4 offset-md-1 py-4">
	          <h4 class="text-white">Contact</h4>
	          <ul class="list-unstyled">
	            <li><a class="text-white" href="https://www.instagram.com/pablorb12/" target="_blank" >Pablo Ruiz Ballesteros</a></li>
	            <li><a class="text-white" href="https://www.instagram.com/josema711/" target="_blank" >Jose Manuel Huertas</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="navbar shadow-sm" style="background-color: #000000;">
	    <div class="container">
	      <a href="/dashboard" class="navbar-brand d-flex align-items-center">
					<strong style="font-family: 'Noto Sans', sans-serif; font-family: 'Reggae One', cursive; color: #ffffff;">KEUKEGEN</strong>
	      </a>
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	        <!-- <span class="navbar-toggler-icon"  style="color: #000000;"></span> -->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#ffffff class="bi bi-envelope" viewBox="0 0 16 16">
  					<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
					</svg>
	      </button>
	    </div>
	  </div>
	</header>
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


<div class="container">
	<div class="menu">
		<div class="d-grid mt-3 gap-4 d-md-block text-center">
  		<a class="btn btn-dark" href="{{ url('/inserta') }}" role="button">Añadir Subasta</a>
  		<button class="btn btn-dark" type="button">Button</button>
		</div>
	</div>
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


   	    <form action="/salir" method="get">
     	     <input class="btn btn-outline-danger btn-xs" type="submit" value="Cerrar Sesion">
   	    </form>

				<footer class="bg-light text-center text-lg-start">
				  <!-- Copyright hay que crear el nuestro con lo de CommonRights-->
				  <div class="text-center p-3" style="background-color: #000000;">
				   <p class="text-light">© 2020 Copyright: <a class="text-light" href="#"> KEUKEGEN.com</a></p>
				  </div>
				</footer>


				<script src="/js/jquery-3.5.1.min.js" type="text/javascript"></script>
			  <script src="/js/popper.min.js" type="text/javascript"></script>
				<script src="/js/bootstrap.min.js" type="text/javascript"></script>

  </body>
</html>
