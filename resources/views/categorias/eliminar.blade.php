@extends('layouts/agenda')

@section('tituloPagina', 'Eliminar categoria')

@section('contenido')
  <div class="m-3 rounded">
    <div class="d-flex align-items-center justify-content-center my-5">
      <div class="card background_inicio border-card my-5 w-75">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">

              <h2 class="text-bold my-3 text-center text-white text-header">Eliminar Categoría</h2>
              <hr class="bg-light">
              
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-danger d-flex justify-content-center align-items-center border shadow" role="alert">
                <div><i class="fas fa-solid fa-exclamation mx-2 fa-3x"></i> </div>
                <div><i class="fas fa-solid fa-skull-crossbones mx-2 fa-3x"></i> </div>
                <div class="mx-2 fw-bolder text-center">
                  ¿Estás seguro de eliminar este registro?
                  <p>Advertencia: Una vez aliminado, ya no se puede recuperar</p>
                  <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                      <thead class="btn-add text-white">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Descripción</th>

                        </tr>
                      </thead>
                      <tbody class="table-background text-white text-center">
              
                        <tr>
                          <th scope="row">{{ $categorias->id_categoria }}</th>
                          <td scope="row">{{ $categorias->nombre }}</td>
                          <td scope="row">{{ $categorias->descripcion }}</td>
                        </tr>
                  
                      </tbody>
                    </table>
                    <form action="{{ route('categorias.destroy', $categorias->id_categoria) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm btn-danger btn-delete text-white border border-2 rounded">
                        Eliminar
                        <i class="fa-solid fa-trash-can"></i>
                      </button>
                      <a class="btn btn-sm btn-primary text-decoration-none text-white border border-2 rounded" href="{{ route('categorias.index') }}">
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
      </div>
    </div>
  </div>

@endsection
