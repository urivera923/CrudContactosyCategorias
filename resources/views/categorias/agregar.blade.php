@extends('layouts/agenda')

@section('tituloPagina', 'Agregar nueva categoria')

@section('contenido')
  <div class="m-3 rounded">
    <div class="d-flex align-items-center justify-content-center my-5">
      <div class="card background_inicio border-card my-5 w-75">
        <div class="card-body">
          <div class="row">
              <div class="col-sm-12">

                <h2 class="text-bold my-3 text-center text-white text-header">Agregar Nueva Categoría</h2>
                <hr class="bg-light">
                
              </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <form action="{{ route('categorias.store') }}" method="POST" class="shadow p-3  border-form table-contacto">
                @csrf
                @method('POST')
                <div class="mb-3">
                  <label for="nombre" class="form-label text-white fw-bolder">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="mb-4">
                  <label for="descripcion" class="form-label text-white fw-bolder">Descripción</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Descripción"></textarea>
                </div>
                <button class="btn btn-add my-2 btn-outline-primary text-white border rounded-pill mb-3">
                  <i class="fas fa-solid fa-plus"></i>
                  Agregar
                </button>
                <a class="btn btn-sm btn-delete btn-danger text-decoration-none text-white border border-2 rounded rounded-pill my-2 mb-3" href="{{ route('categorias.index') }}">
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
