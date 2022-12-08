@extends('layouts/agenda')

@section('tituloPagina', 'Eliminar contacto')

@section('contenido')
  <div class="m-3 rounded">
    <div class="d-flex align-items-center justify-content-center my-5">
      <div class="card background_inicio border-card my-5 w-75">
        <div class="card-body">
          <div class="row">
              <div class="col-sm-12">

                <h2 class="text-bold my-3 text-center text-white text-header">Eliminar Contacto</h2>
                <hr class="bg-light">
                
              </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-danger d-flex justify-content-center align-items-center border shadow" role="alert">
                <div><i class="fas fa-solid fa-exclamation mx-2 fa-3x"></i> </div>
                <div><i class="fas fa-solid fa-skull-crossbones mx-2 fa-3x"></i> </div>
                <div class="mx-2 fw-bolder text-center">
                    ¿Estás seguro de eliminar este contacto?
                    <p>Advertencia: Una vez alimnado, ya no se puede recuperar</p>
                    <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                      <table class="table table-bordered text-center align-middle">
                        <thead class="btn-add text-white">
                          <tr>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Apellido Paterno</th>
                              <th scope="col">Apellido Materno</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Email</th>
                              <th scope="col">Teléfono</th>
                              <th scope="col">Categoria</th>
                            </tr>
                          </tr>
                        </thead>

                        </tr>
                      </thead>
                      <tbody class="table-background text-white text-center">
              
                        <tr>
                          <th scope="row">{{ $contactos->id_contacto }}</th>
                          <td scope="row">{{ $contactos->paterno }}</td>
                          <td scope="row">{{ $contactos->materno }}</td>
                          <td scope="row">{{ $contactos->nombre }}</td>
                          <td scope="row">{{ $contactos->telefono }}</td>
                          <td scope="row">{{ $contactos->email }}</td>
                          <td scope="row">{{ $contactos->nombre_categoria }}</td>
                        </tr>
                  
                      </tbody>
                    </table>
                    <form action="{{ route('contactos.destroy', $contactos->id_contacto) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm btn-danger btn-delete text-white border border-2 rounded">
                        Eliminar
                        <i class="fa-solid fa-trash-can"></i>
                      </button>
                      <a class="btn btn-sm btn-primary text-decoration-none text-white border border-2 rounded" href="{{ route('contactos.index') }}">
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
