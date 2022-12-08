@extends('layouts/agenda')

@section('tituloPagina', 'Editar categoria')

@section('contenido')
  <div class="m-3 rounded">
    <div class="d-flex align-items-center justify-content-center my-5">
      <div class="card background_inicio border-card my-5 w-75">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">

              <h2 class="text-bold my-3 text-center text-white text-header">Editar Categoría</h2>
              <hr class="bg-light">
              
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <form action="{{ route('categorias.update', $categorias->id_categoria) }}" method="POST" class="shadow p-3 border-form table-contacto">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="nombre" class="form-label text-white fw-bolder">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required   value="{{ $categorias->nombre }}">
                </div>
                <div class="mb-4">
                  <label for="descripcion" class="form-label text-white fw-bolder">Descripción</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Descripción">{{ $categorias->descripcion }}</textarea>
                </div>
                <button class="btn btn-sm btn-warning btn-update text-white border border-2 rounded">
                  Actualizar
                  <i class="fa-solid fa-arrows-rotate"></i>
                </button>
                <a class="btn btn-sm btn-delete btn-danger text-decoration-none text-white border border-2 rounded" href="{{ route('categorias.index') }}">
                  Cancelar
                  <i class="fa-solid fa-rotate-left"></i>
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
