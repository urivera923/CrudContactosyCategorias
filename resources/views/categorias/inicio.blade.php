@extends('layouts/agenda')

@section('tituloPagina', 'Categorías')

@section('contenido')

  <div class="m-3 rounded">
    <div class="d-flex align-items-center justify-content-center my-5">
      <div class="card background_inicio border-card my-5 w-75">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="text-bold my-4 text-center text-white text-header">Categorías</h2>
              <hr class="">
              <a href="{{ route('categorias.create') }}" class="btn btn-info btn-add text-white rounded-pill px-3 py-2 mb-4 ms-2 shadow">
                Agregar nueva categoria
                <i class="fa-solid fa-address-book ms-2"></i>
              </a>
              <hr>
              @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                  {{ $mensaje }}
                </div>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-white align-middle">
              <div class="table-responsive">
                <table class="table table-bordered table-sm text-center align-middle table-hover table-dark"
                  id="tablaCategorias">
                  <thead class="botton text-white text-center">
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">Descripción</th>
                      <th scope="col">Editar</th>
                      <th scope="col">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody class="tables text-white text-center">
                    @foreach ($categorias as $item)
                      <tr>
                        <td scope="row">{{ $item->nombre }}</td>
                        <td scope="row">{{ $item->descripcion }}</td>
                        <td>
                          <a href="{{ route('categorias.edit', $item->id_categoria) }}"
                            class="btn btn-sm btn-warning btn-update text-white border border-2 rounded">
                            Editar
                            <i class="fas fa-edit fa-fw"></i>
                          </a>
                        </td>
                        <td>
                          <a href="{{ route('categorias.show', $item->id_categoria) }}"
                            class="btn btn-sm btn-danger btn-delete text-white border border-2 rounded">
                            Eliminar
                            <i class="fas fa-trash-alt fa-fw"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
