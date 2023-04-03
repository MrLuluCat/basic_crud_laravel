<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Absensi</title>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
      .ikigai {
        background-color: #2c3439;
        /* color: #ced9bf; */
        
      }
    </style>
  </head>
  <body class="ikigai">
    <div my-2 px-4>
      <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid px-4">
          <a class="navbar-brand" href="{{ url('/') }}">
            <span class="text-white">Web Absensi</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav me-auto mb-2 mb-lg-0">
             
            </div>
            <div class="d-flex" role="search">
            
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="{{ url('/absensi')}}">Data Asisten</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="{{ url('/presensi')}}">Presensi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="{{ url('/about') }}">About</a>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </nav>

    </div>
    
    <main class="container">
      

        @include('component.massage')

        @yield('konten')

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    {{-- flatpickr --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> --}}
    {{-- <script> --}}
      {{-- // Otherwise, selectors are also supported --}}
      {{-- // flatpickr("input[type=datetime-local]", {}); --}}
    {{-- </script> --}}
  </body>
</html>