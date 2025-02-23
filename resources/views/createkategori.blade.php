@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
</head>
<style>
    /* General container styles */
.container {
    width: 60%;
    margin: 50px auto;
    font-family: Arial, sans-serif;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Header styles */
header {
    text-align: center;
    margin-bottom: 30px;
}

h1 {
    font-size: 28px;
    color: #333;
    font-weight: bold;
}

/* Form styling */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

form div {
    display: flex;
    flex-direction: column;
}

label {
    font-size: 16px;
    color: #555;
}

input[type="text"] {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

input[type="text"]:focus {
    border-color: #007bff;
}

button {
    padding: 12px 20px;
    font-size: 16px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #218838;
}

/* Back button styling */
.back-button {
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    text-align: center;
    font-size: 16px;
}

.back-button:hover {
    background-color: #0056b3;
}

/* Responsive design */
@media (max-width: 768px) {
    .container {
        width: 90%;
    }

    h1 {
        font-size: 24px;
    }

    input[type="text"] {
        font-size: 14px;
        padding: 8px;
    }

    button {
        font-size: 14px;
        padding: 10px;
    }

    .back-button {
        font-size: 14px;
        padding: 8px 12px;
    }
}

</style>
<body>
    <div class="container">
        <header>
            <h1>Tambah Kategori</h1>
        </header>

        <form action="{{ route('kategori') }}" method="POST">
            @csrf
            <div>
                <label for="nama_kategori">Nama Kategori:</label>
                <input type="text" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori') }}" required>
            </div>
            <button type="submit">Simpan Kategori</button>
        </form>

        <a href="{{ route('kategori') }}" class="back-button">Kembali ke Kategori</a>
    </div>
</body>
</html>
@endsection
