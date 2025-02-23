@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .stat {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            width: 25%;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .stat h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .stat p {
            font-size: 2em;
            color: #333;
        }

        /* Tambahkan CSS untuk membuat teks 'Selamat datang' tebal */
        h2 {
            font-weight: bold; /* Membuat teks tebal */
            font-size: 2rem; /* Menyesuaikan ukuran font */
            color: #333; /* Warna teks */
        }
    </style>
</head>
<body>

    <main>
        <h2>Selamat datang, {{ $username }}</h2> <!-- Teks 'Selamat datang' di sini -->
        <div class="stats">
            <div class="stat">
                <h3>Total Produk</h3>
                <p>{{ $productCount }}</p>
            </div>
            <div class="stat">
                <h3>Total Kategori</h3>
                <p>{{ $kategoriCount }}</p>
            </div>
            <div class="stat">
                <h3>Total User</h3>
                <p>{{ $userCount }}</p>
            </div>
        </div>
    </main>

</body>
</html>
@endsection
