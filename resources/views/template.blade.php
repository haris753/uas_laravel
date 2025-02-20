<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Jawara Store</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/">Beranda</a>
              <a class="nav-link" href="/profil">Profil</a>
            </div>
          </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-2" style="background-color: beige; padding: 10px;">
            <nav class="nav flex-column">
                <a class="nav-link" href="/admin">Beranda</a>
                <a class="nav-link" href="/dashboard">Dashboard</a>
                <a class="nav-link" href="/produk">Produk</a>
                <a class="nav-link" href="/kategori">Kategori</a>
                <a class="nav-link" href="/tentangkami">Pengguna</a>
                <a class="nav-link" href="/ganti-password">Ganti Password</a>
                <a class="nav-link" href="/logout">Logout</a>
            </nav>
        </div>

        <div class="col-10" style="padding: 15px">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
  </body>
</html>