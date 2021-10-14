
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
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
              <a class="nav-link" href="#">Pengguna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pendaftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Data Siswa</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0" action="{{ route('logout') }}" method="POST">
            @csrf
            <input class="form-control mr-sm-2" type="text" placeholder="Cari Sesuatu" aria-label="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container pt-5">
        <div class="jumbotron mt-5">
            <h1 class="display-4">Selamat Datang!</h1>
            <p class="lead">Selamat datang di aplikasi PSB Online. Aplikasi ini dibuat untuk tugas praktek Sertifikasi Kompetensi BNSP Junior Web Developer</p>
            <hr class="my-4">
            <p>Anda dapat melihat data formulir registrasi siswa dengan menekan tombol dibawah ini:</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Lihat Pendaftar</a>
            </p>
          </div>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Muhamad Ahmadin.</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
