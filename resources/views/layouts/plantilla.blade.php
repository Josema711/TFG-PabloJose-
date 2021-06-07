<!DOCTYPE html>
	<html lang="es" dir="ltr">
 	 <head>
    	<meta charset="utf-8">
    	<title>Keukegen</title>
			<link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&family=Reggae+One&display=swap" rel="stylesheet">


			<link href="/css/bootstrap.min.css" rel="stylesheet">
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" type="text/javascript"></script>


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
@include('sweet::alert')
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




  @yield('contenido')




   	    <form action="/salir" method="get">

					<button type="submit" name="button" class="btn btn-outline-danger btn-xs mx-2 my-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
							<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
						</svg>
					</button>

   	    </form>

				<footer class="bg-light text-center text-lg-start " style="width: 100%;
  margin: 0 auto;
  position: relative;">
				  <!-- Copyright hay que crear el nuestro con lo de CreativeCommons-->
				  <div class="text-center p-3" style="background-color: #000000;">
						<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank">
							<p class="text-light"><i>@CreativeCommons</i></p>
						</a>

				  </div>
				</footer>


	<script src="/js/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="/js/popper.min.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>


  </body>
  </html>
