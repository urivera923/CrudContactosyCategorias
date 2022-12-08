@extends('layouts/agenda')

@section('tituloPagina', 'Inicio')

@section('contenido')
<div class="m-3 rounded">
  <div class="d-flex align-items-center justify-content-center my-5">
    <div class="card background_inicio border-card cardbody my-5">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="d-flex align-items-center justify-content-center my-2">
              <h2 class="text-bold text-white text-header">Esta es una agenda sencilla con Laravel 8</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="d-flex align-items-center justify-content-center my-3">
              <img class="figure-img img-fluid rounded shadow mb-4 border-img" src="{{ asset('img/1.jpg') }}" alt="" width="30%">
            </div>
            <p class="text-center text-bolder text-white text">
              Esta es mi primera agenda con google fonts
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> 
  </div> 
 
@endsection