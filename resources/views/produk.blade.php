@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<style>
    /* Reset Default Styling */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
    line-height: 1.6;
}

/* Container Styling */
.container {
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Header Styling */
header {
    text-align: center;
    margin-bottom: 20px;
}

header h1 {
    font-size: 24px;
    color: #343a40;
}

.add-product {
    display: inline-block;
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.add-product:hover {
    background-color: #0056b3;
}

/* Table Styling */
table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

table th, table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #dee2e6;
}

table th {
    background-color: #f1f1f1;
    color: #343a40;
}

table td {
    background-color: #ffffff;
}

/* Image Styling */
img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
}

/* Action Button Styling */
.edit, .delete {
    padding: 5px 10px;
    border: none;
    background-color: transparent;
    color: #007bff;
    cursor: pointer;
    transition: color 0.3s ease;
}

.edit:hover, .delete:hover {
    color: #0056b3;
}

.delete {
    color: #dc3545;
}

.delete:hover {
    color: #c82333;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .container {
        width: 95%;
    }

    table th, table td {
        padding: 10px;
    }

    .add-product {
        padding: 8px 16px;
    }
}

</style>
<body>
    <div class="container">
        <header>
            <h1>Produk</h1>
            <a href="{{ route('produkcreate') }}" class="add-product">Tambah Produk</a>
        </header>
        
        <table>
            <thead>
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->kode_produk }}</td>
                        <td>{{ $product->nama_produk }}</td>
                        <td>{{ $product->deskripsi }}</td>
                        <td><img src="{{ asset('storage/' . $product->gambar) }}" alt="Gambar Produk" width="100"></td>
                        <td>{{ $product->kategori->name }}</td>
                        <td>
                            <a href="{{ route('produk.edit', $product->id) }}" class="edit">✏️</a>
                            <form action="{{ route('produk.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
