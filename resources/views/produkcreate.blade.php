@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<style>
    /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

/* Main container styling */
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

/* Header */
header {
    text-align: center;
    margin-bottom: 20px;
}

h1 {
    font-size: 24px;
    color: #333;
}

/* Form styling */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Form inputs */
input[type="text"],
textarea,
select,
input[type="file"] {
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    width: 100%;
}

textarea {
    resize: vertical;
    height: 100px;
}

/* Submit button */
button[type="submit"] {
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    margin-top: 20px;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Back button */
.back-button {
    display: inline-block;
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    text-align: center;
}

.back-button:hover {
    background-color: #0056b3;
}

</style>
<body>
    <div class="container">
        <header>
            <h1>Tambah Produk</h1>
        </header>

        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="kode_produk">Kode Produk:</label>
                <input type="text" id="kode_produk" name="kode_produk" required>
            </div>
            <div>
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" id="nama_produk" name="nama_produk" required>
            </div>
            <div>
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div>
                <label for="kategori_id">Kategori:</label>
                <select name="kategori_id" id="kategori_id" required>
                    @foreach ($kategori as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="gambar">Gambar Produk:</label>
                <input type="file" id="gambar" name="gambar">
            </div>
            <button type="submit">Simpan Produk</button>
        </form>

        <a href="{{ route('produk') }}" class="back-button">Kembali ke Produk</a>
    </div>
</body>
</html>
@endsection
