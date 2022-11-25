<!DOCTYPE html>
<html lang="es">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\styles.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Repaso | @yield('titulo')</title>
</head>

<body>
    <div class="wrapper">
    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{asset('imgs/libros.png')}}" alt="" id="libroNav" width="40" height="40"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('libroIndex')}}">Ver libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" {{ request()->routeIs('libroIndex')? '':'Hidden' }}  href="{{route('libroCreate')}}">Registrar libro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/registrarAutor">Ver autores</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>




    <!-- Contenido -->
    
        @yield('contenido')
    </div>




    <!-- Pie de Página -->
    <footer class="footer">
        Biblioteca Repaso® 03/Nov/2022
    </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
