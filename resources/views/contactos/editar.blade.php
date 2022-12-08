@extends('layouts/agenda')

@section('tituloPagina', 'Editar contacto')

@section('contenido')
  <div class="m-3 rounded">
    <div class="d-flex align-items-center justify-content-center my-5">
      <div class="card background_inicio border-card my-5 w-75">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">

              <h2 class="text-bold my-3 text-center text-white text-header">Editar Contacto</h2>
              <hr class="bg-light">

            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-sm-10">
              <form action="{{ route('contactos.update', $contactos->id_contacto) }}" method="POST" class="row g-3 shadow p-3 border-form table-contacto">
                @csrf
                @method('PUT')
                <div class="col-md-4 mb-2">
                  <label for="paterno" class="form-label text-white fw-bolder">Apellido Paterno</label>
                  <input type="text" class="form-control" id="paterno" name="paterno"
                    placeholder="Apellido Paterno" required value="{{ $contactos->paterno }}">
                </div>
                <div class="col-md-4 mb-2">
                  <label for="materno" class="form-label text-white fw-bolder">Apellido Materno</label>
                  <input type="text" class="form-control" id="materno" name="materno"
                    placeholder="Apellido Materno" required value="{{ $contactos->materno }}">
                </div>
                <div class="col-md-4 mb-3">
                  <label for="nombre" class="form-label text-white fw-bolder">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre"
                    placeholder="Nombre" required value="{{ $contactos->nombre }}">
                </div>
                <div class="mb-2">
                  <label for="correo" class="form-label text-white fw-bolder">Correo electronico</label>
                  <input type="text" class="form-control" id="correo" name="correo"
                    placeholder="Correo eléctronico" required value="{{ $contactos->email }}">
                </div>
                <div class="col-md-6">
                  <label for="telefono" class="form-label text-white fw-bolder">Teléfono</label>
                  <input type="text" class="form-control" id="telefono" name="telefono"
                    placeholder="Teléfono" required value="{{ $contactos->telefono }}">
                </div>
                <div class="col-md-6">
                  <label for="categoria" class="form-label text-white fw-bolder">Categoria</label>
                  <select id="categoria" name="categoria" class="form-select">
                    @foreach ($categorias as $item)
                      @if ($item->id_categorias == $contactos->id_categoria)
                          <option selected value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                        @else
                          <option selected value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>

                <div class="d-grid gap-2 d-md-block">
                  <button class="btn btn-sm btn-warning btn-update text-white border border-2 rounded">
                    Actualizar
                    <i class="fa-solid fa-arrows-rotate"></i>
                  </button>
                  <a class="btn btn-sm btn-delete btn-danger text-decoration-none text-white border border-2 rounded ms-2" href="{{ route('contactos.index') }}">
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
