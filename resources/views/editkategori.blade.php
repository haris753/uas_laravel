<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Edit Kategori</h1>
        </header>

        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="nama_kategori">Nama Kategori:</label>
                <input type="text" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required>
            </div>
            <button type="submit">Update Kategori</button>
        </form>

        <a href="{{ route('kategori') }}" class="back-button">Kembali ke Kategori</a>
    </div>
</body>
</html>
