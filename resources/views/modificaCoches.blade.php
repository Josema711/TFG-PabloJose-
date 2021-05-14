<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="css/theme.css" rel="stylesheet">
  </head>
  <body>
    <h3>Modificar</h3>
    <form action="/modificaCoche/{{ $coches->id }}" method="get">
      <div class="formulario">
        <label>Marca:</label> <input type="text" name="marca" value="{{ $coches->marca }}"><br>
        <label>Modelo:</label> <input type="text" name="modelo" value="{{ $coches->modelo }}"><br>
        <label>Precio:</label> <input type="text" name="precio" value="{{ $coches->precio }}"><br>
        <label>CV:</label> <input type="text" name="cv" value="{{ $coches->cv }}"><br>
        <input type="submit" name="" value="Modificar">
      </div>
    </form>

    <script src="js/jquery.min.js" type="text/javascript"></script>
  	<script src="js/bootstrap.min.js" type="text/javascript"></script>
  	<script src="js/docs.min.js" type="text/javascript"></script>

    
  </body>
</html>
