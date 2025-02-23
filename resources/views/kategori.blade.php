@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk</title>
</head>
<style>
    /* General styles for the container */
.container {
    width: 80%;
    margin: 20px auto;
    font-family: Arial, sans-serif;
}

/* Header styling */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

h1 {
    font-size: 24px;
    color: #333;
}

.add-product {
    text-decoration: none;
    padding: 10px 15px;
    background-color: #28a745;
    color: white;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.add-product:hover {
    background-color: #218838;
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f4f4f4;
    font-weight: bold;
}

td {
    background-color: #fff;
}

td a.edit, td button.delete {
    background: none;
    border: none;
    color: #007bff;
    cursor: pointer;
    font-size: 18px;
}

td a.edit:hover, td button.delete:hover {
    color: #0056b3;
}

/* Button delete style */
button.delete {
    background-color: transparent;
    color: red;
}

button.delete:hover {
    color: darkred;
}

/* Add responsiveness */
@media (max-width: 768px) {
    .container {
        width: 90%;
    }

    table {
        font-size: 14px;
    }

    .add-product {
        font-size: 14px;
        padding: 8px 12px;
    }
}
</style>
<body>
    <div class="container">
        <header>
            <h1>Kategori Produk</h1>
            <a href="{{ route('createkategori') }}" class="add-product">Tambah Kategori</a>
        </header>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $kategori)
                    <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->nama_kategori }}</td>
                        <td>
                            <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display:inline;">
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