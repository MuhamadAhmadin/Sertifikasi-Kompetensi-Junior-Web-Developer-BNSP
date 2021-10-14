<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    @stack('css')

  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard.users.index') }}">Pengguna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pendaftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Data Siswa</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0 mx-2" action="{{ route('logout') }}" method="POST">
            @csrf
            <a href="#" class="d-flex">
                <img src="{{ Auth::user()->get_avatar_url() }}" alt="Avatar" width="50" height="50" style="border-radius: 50%">
                <span class="d-flex flex-column ml-2">
                    <span class="">{{ Auth::user()->name }}</span>
                    <small class="text-muted">{{ Auth::user()->role_name }}</small>
                </span>
            </a>
            <button class="btn btn-outline-danger my-2 my-sm-0 ml-4" type="submit">Logout</button>
          </form>
        </div>
      </nav>
    </header>
