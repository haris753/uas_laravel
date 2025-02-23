<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JAWARA STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Navbar background hitam dan teks putih */
        .navbar-custom {
            background-color: black; /* Latar belakang hitam */
        }

        /* Teks navbar putih dan tebal */
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white; /* Teks putih */
            font-weight: bold; /* Teks tebal */
        }

        /* Efek hover untuk navbar */
        .navbar-custom .nav-link:hover {
            color: #ddd; /* Warna teks lebih terang saat hover */
        }

        /* Navbar brand yang lebih besar */
        .navbar-custom .navbar-brand {
            font-size: 1.5rem;
        }

        /* Navbar saat tombol toggle (untuk mobile) */
        .navbar-toggler-icon {
            background-color: white; /* Icon toggle berwarna putih */
        }
    </style>
  </head>
  <body>

    <!-- Navbar dengan latar belakang hitam dan teks putih -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Jawara Store</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/">Beranda</a>
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
