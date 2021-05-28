@extends('layouts.plantilla')
@section('contenido')

	<div class="container" style="padding-top:15%; padding-bottom:10%; padding-left:15%; padding-right:15%;">

<div class="border border-start"  style="padding:2em; border-radius:25px; background:#b4b4b4; box-shadow:-8px -8px 16px #b3a3a3, 8px 8px 16px #000000;">

    <h3>Insertar coche nuevo:</h3>

      <form action="insertaCoche" method="get">

			        <div class="row">

								<div class="col-md-6">
									<label class="form-label">Marca</label>
				          <input type="text" class="form-control" name="marca">
								</div>
								<div class="col-md-6">
									<label class="form-label">Modelo</label>
				          <input type="text" class="form-control" name="modelo">
								</div>

			        </div>


							<div class="row">

								<div class="col-md-3 col-sm-3 col-xs-3">
									<label class="form-label">Precio</label>
				          <input type="text" class="form-control" name="precio" placeholder="€">
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3">
									<label class="form-label">CV</label>
				          <input type="text" class="form-control" name="cv">
								</div>
								<div class="col">
									<label class="form-label">Tipo de Coche:</label>
			              <select name="tipo" id="tipo" class="form-select" aria-label="Tipo de Coche">
			                    <option value="" disabled selected>...</option>
			                      <option name="Deportivo" value="Deportivo">Deportivo</option>
			                      <option name="SUV" value="SUV">SUV</option>
			                      <option name="Coupe" value="Coupe">Coupe</option>
			                      <option name="Americano" value="Americano">Americano</option>
			                      <option name="Clasico" value="Clasico">Clasico</option>
			              </select>
								</div>

							</div>
							<div class="row mt-4">
				          <button type="submit" class="btn btn-danger" value="Introducir">Introducir</button>
				      </div>

    </form>

	</div>

  </div>


	@endsection
