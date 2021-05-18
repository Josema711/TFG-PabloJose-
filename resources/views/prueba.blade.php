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

						<nav class="navbar sticky-top " style="background-color: #B6B6B6;">
								  <div class="container-fluid">
								    <span class="navbar-brand navbar-nav h1" style="margin-left: 45%;
																																		font-family: 'Noto Sans', sans-serif;
																																		font-family: 'Reggae One', cursive;"

																																		>KEUKEGEN</span>
								  </div>
						</nav>

						<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Marca</th>
			      <th scope="col">Modelo</th>
			      <th scope="col">Precio</th>
						<th scope="col">CV</th>
			    </tr>
			  </thead>
			  <tbody>
					@foreach ($coches as $coche)
			    <tr>
			      <th scope="row">{{ $coche->id }}</th>
			      <td>{{ $coche->marca }}</td>
			      <td>{{ $coche->modelo }}</td>
			      <td>{{ $coche->precio }}</td>
						<td>{{ $coche->cv }}</td>
						<td>
							<form action="/borrarCoche/{{ $coche->id }}" method="get">
							 <input type="submit" value="Borrar">
						 </form>
					 </td>
					 <td>
						 <form action="/listadoCoches/{{ $coche->id }}" method="get">
							 <input type="submit" value="Modificar">
						 </form>
					</td>
			    </tr>
					@endforeach
			  </tbody>
			</table>

		<a href="{{ url('/VistaVentas') }}" class="btn btn-outline-dark" role="button">Ventas</a>

		<a href="{{ url('/inserta') }}" class="btn btn-outline-dark" role="button">Insertar Coche</a>

   	    <form action="/salir" method="get">
     	     <input class="btn btn-outline-dark" type="submit" value="Salir">
   	    </form>

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/docs.min.js" type="text/javascript"></script>

  </body>
</html>
