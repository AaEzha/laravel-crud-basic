<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - {{ $title ?? "Produk" }}</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
</head>
<body class="mx-1">
    <div class="row">
        <div class="col-auto">
            <img src="{{ url('food.png') }}" alt="Food">
        </div>
        <div class="col my-auto">
            <h3>{{ config('app.name') }}</h3>
        </div>
    </div>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
          <a class="navbar-brand" href=".">{{ config('app.name') }}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href=".">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('tambah') }}">Tambah Produk</a>
              </li>
            </ul>
          </div>
        </nav>
    </header>

    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Informasi
                </div>
                <div class="card-body">
                    <h4 class="card-title">NIM</h4>
                    <p class="card-text">Nama</p>
                </div>
            </div>
        </div>
        <div class="col">
            @yield('content')
        </div>
    </div>


    <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
