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

    <h3>Insertar coche nuevo:</h3>

      <form class="row g-3" action="insertaCoche" method="get">
        <div class="col-md-6">
          <label class="form-label">Marca</label>
          <input type="text" class="form-control" name="marca">
        </div>
        <div class="col-md-6">
          <label class="form-label">Modelo</label>
          <input type="text" class="form-control" name="modelo">
        </div>
        <div class="col-12">
          <label class="form-label">Precio</label>
          <input type="text" class="form-control" name="precio" placeholder="€">
        </div>
        <div class="col-12">
          <label class="form-label">CV</label>
          <input type="text" class="form-control" name="cv" placeholder="cv">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" value="Introducir">Introducir</button>
        </div>
    </form>

    <script src="js/jquery.min.js" type="text/javascript"></script>
  	<script src="js/bootstrap.min.js" type="text/javascript"></script>
  	<script src="js/docs.min.js" type="text/javascript"></script>

    
  </body>
</html>
