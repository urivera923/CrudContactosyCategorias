@extends('layouts/agenda')

@section('tituloPagina', 'Agregar nuevo contacto')

@section('contenido')
  <div class="m-3 rounded">
    <div class="d-flex align-items-center justify-content-center my-5">
      <div class="card background_inicio border-card my-5 w-75">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">

              <h2 class="text-bold my-3 text-center text-white text-header">Agregar Nueva Contacto</h2>
              <hr class="bg-light">

            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-sm-8">
              <form action="{{ route('contactos.store') }}" method="POST" class="row g-3 shadow p-3 border-form table-contacto">
                @csrf
                @method('POST')
                <div class="col-md-4 mb-2">
                  <label for="paterno" class="form-label text-white fw-bolder">Apellido Paterno</label>
                  <input type="text" class="form-control" id="paterno" name="paterno"
                    placeholder="Apellido Paterno" required>
                </div>
                <div class="col-md-4 mb-2">
                  <label for="materno" class="form-label text-white fw-bolder">Apellido Materno</label>
                  <input type="text" class="form-control" id="materno" name="materno"
                    placeholder="Apellido Materno" required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="nombre" class="form-label text-white fw-bolder">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre"
                    placeholder="Nombre" required>
                </div>
                <div class="mb-2">
                  <label for="correo" class="form-label text-white fw-bolder">Correo electronico</label>
                  <input type="text" class="form-control" id="correo" name="correo"
                    placeholder="Correo eléctronico" required>
                </div>
                <div class="col-md-6">
                  <label for="telefono" class="form-label text-white fw-bolder">Teléfono</label>
                  <input type="text" class="form-control" id="telefono" name="telefono"
                    placeholder="Teléfono" required>
                </div>
                <div class="col-md-6">
                  <label for="categoria" class="form-label text-white fw-bolder">Categoria</label>
                  <select id="categoria" name="categoria" class="form-select" required>
                    <option selected value="" class="text-bolder">Selecciona una opción</option>
                    @foreach ($categorias as $item)
                      <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="d-grid gap-2 d-md-block">
                  <button class="btn btn-add my-2 btn-outline-primary text-white border rounded-pill mb-3">
                    <i class="fas fa-solid fa-plus"></i>
                    Agregar
                  </button>
                  <a class="btn btn-sm btn-delete btn-danger text-decoration-none text-white border border-2 rounded rounded-pill my-2 mb-3" href="{{ route('contactos.index') }}">
                    Cancelar
                    <i class="fa-solid fa-rotate-left"></i>
                  </a>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
