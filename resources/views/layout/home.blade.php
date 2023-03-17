<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Tambahkan link stylesheet untuk Bootstrap 5 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<style>
    /* body {
        width: 100%;
        height: 100%;
    }

    * {
        padding: 0;
        margin: 0;
    } */
</style>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#">
            <img src="..\public\storage\images\logo_ict1.png" alt="logo_ict1" width="110px;" height="70px;">
          </a> --}}
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
                  <a class="nav-link active text-white" aria-current="page" href="#">Data Asisten</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="{{ url('/presensi')}}">Presensi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="{{ url('about') }}">About</a>
                </li>
            </ul> 
            </div>
          </div>
        </div>
      </nav>

        @yield('isi')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

       
    <!-- Tambahkan link JavaScript untuk Bootstrap 5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    
    
</body>



</html>