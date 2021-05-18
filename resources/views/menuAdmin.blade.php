<!DOCTYPE html>
	<html lang="es" dir="ltr">
 	 <head>
    	<meta charset="utf-8">
    	<title></title>
			<link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&family=Reggae+One&display=swap" rel="stylesheet">


			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/bootstrap-theme.min.css" rel="stylesheet">
			<link href="css/theme.css" rel="stylesheet">

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
	            <li><a class="text-white">Pablo Ruiz Ballesteros</a></li>
	            <li><a class="text-white">Jose Manuel Huertas</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="navbar shadow-sm" style="background-color: #B6B6B6;">
	    <div class="container">
	      <a href="#" class="navbar-brand d-flex align-items-center">
					<strong style="font-family: 'Noto Sans', sans-serif; font-family: 'Reggae One', cursive; color: #000000;">KEUKEGEN</strong>
	      </a>
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	        <!-- <span class="navbar-toggler-icon"  style="color: #000000;"></span> -->
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
  					<path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
						</svg>
	      </button>
	    </div>
	  </div>
	</header>

	<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

								@foreach ($coches as $coche)

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
																							preserveAspectRatio="xMidYMid slice" focusable="false">
										<title>Placeholder</title>
										<rect width="100%" height="100%" fill="#128be6"/>
										<text x="50%" y="50%" fill="#eceeef" dy=".3em">Coches</text>
						</svg>

            <div class="card-body">
              <p class="card-text">
								<tbody>
							    <ul>
							      <li>Marca: {{ $coche->marca }}</li>
							      <li>Modelo: {{ $coche->modelo }}</li>
							      <li>Precio: {{ $coche->precio }}</li>
										<li>Potencia: {{ $coche->cv }}</li>
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

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/docs.min.js" type="text/javascript"></script>

  </body>
</html>
