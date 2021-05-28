@extends('layouts.plantilla')
@section('contenido')


						<div class="jumbotron col-md-4 ">

            <h1 id="timerDiv">00:00:00</h1>
        </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">

            <div class="col-md-4">
                Hora
            <input class="form-control" type="number" id="h" value="0" min="0" max="60">
            </div>
            <div class="col-md-4">
                Minutos
            <input class="form-control" type="number" value="1" min="0" max="60" id="m">
            </div>
            <div class="col-md-4">
                Segundos
            <input  class="form-control" type="number" min="0" max="60" value="60" id="s">
            </div>
                  <div class="col-md-12">
                   <br/>
                  <button type="button" class="btn btn-success btn-lg btn-block" onclick="empezar()">Empezar</button>
                      </div>

            </div>
            </div>
@endsection
