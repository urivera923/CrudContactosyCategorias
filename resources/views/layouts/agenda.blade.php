<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=3d">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>@yield('tituloPagina')</title>


    </head>

    <body>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container-sm">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Sobre Mi</h4>
                        <p class="text-muted">Me llamo Uriel Flores Vera <br> Y estoy aquí para sacar a relucir al Orgulloso
                            Instituto Técnologico de Milpa Alta II y a mi, como estudiante de la hermosa carrera profesional
                            de Ingeniería en Sistemas Computacionales.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contactanos</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white"><i class="fa-brands fa-twitter me-2"></i> Follow on
                                    Twitter </a></li>
                            <li><a href="#" class="text-white"><i class="fa-brands fa-facebook-f me-2"></i>Fallow on
                                    Facebook</a></li>
                            <li><a href="#" class="text-white"><i class="fa-solid fa-paper-plane me-2"></i>Email
                                    me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="{{ route('inicio') }}" class="navbar-brand">
                    <img src="{{ asset('img/logo4.png') }}" alt="Logo" width="30" height="24"
                        class="d-inline-block align-text-top">
                </a>
                <div class="d-flex align-items-start justify-content-start">
                    <p class="text-white ms-4 mt-3"> <a class="text-decoration-none text-white"
                            href="{{ route('inicio') }}">Inicio</a><span
                            class="fw-bolder fas fa-solid fa-house-user ms-1"></span></p>
                    <p class="text-white ms-4 mt-3"> <a class="text-decoration-none text-white"
                        href="{{ route('categorias.index') }}">Categorias</a> <span class="fw-bolder fas fa-solid fa-book ms-1"></span>
                    </p>
                    <p class="text-white ms-4 mt-3"> <a class="text-decoration-none text-white"
                        href="{{ route('contactos.index') }}">Contactos</a><span class="fw-bolder fas fa-solid fa-users ms-1"></span>
                    </p>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    @yield('contenido')

                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        
        @yield('dataTable')
    </body>

</html>
