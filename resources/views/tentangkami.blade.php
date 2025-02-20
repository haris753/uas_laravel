@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: rgb(5, 5, 5);
}

header {
    background: #0c0101;
    color: #fff;
    padding: 10px 20px;
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
    color: #fff;
    text-decoration: none;
}

main {
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.member-container {
    display: block; /* Menjadikan kontainer menggunakan blok vertikal */
    margin-top: 20px;
}

.member {
    border: 1px solid #ccc;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    text-align: center;
    background-color: white;
}

.avatar {
    width: 100px;
    height: 100px;
    background-color: #ccc;
    margin: 0 auto 10px;
    border-radius: 50%;
    background-size: cover;
    background-position: center;
    object-fit: cover;
}

h2 {
    margin: 10px 0;
    font-size: 22px;
    font-weight: bold;
}

p {
    font-size: 16px;
    color: #555;
}

a {
    display: inline-block;
    margin-top: 10px;
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.back-button {
    display: inline-block;
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
    margin-top: 30px;
}

.back-button:hover {
    background-color: #0056b3;
}

@media (max-width: 768px) {
    /* Untuk tablet dan layar lebih kecil, tetap pastikan member rata vertikal */
    .member {
        width: 100%; /* Pastikan lebar penuh */
        margin: 10px 0;
    }
}

@media (max-width: 480px) {
    /* Untuk ponsel kecil */
    .member {
        width: 100%;
        margin: 5px 0;
    }
}


</style>
<body>
    <header>
        <h1>Tentang Kami</h1>
    </header>
    <main>
    <div class="member-container">
        <section class="member">
            <div class="avatar" style="background-image: url('path_to_image.jpg');"></div> 
            <h2>12345678</h2> 
            <p>Nama Lengkap</p> 
            <p>Kelas: A</p> 
            <p>Kontribusi yang saya lakukan adalah: Mendesain halaman ini, mengintegrasikan CSS dan HTML untuk membuat layout yang responsif.</p>
            <a href="https://github.com/abcd">Github saya</a>
        </section>

        <section class="member">
            <div class="avatar" style="background-image: url('path_to_image.jpg');"></div> 
            <h2>23456789</h2> 
            <p>Nama Lengkap</p> 
            <p>Kelas: B</p> 
            <p>Kontribusi yang saya lakukan adalah: Membantu menulis konten, melakukan pengujian tampilan responsif.</p>
            <a href="https://github.com/efgh">Github saya</a>
        </section>

        <section class="member">
            <div class="avatar" style="background-image: url('path_to_image.jpg');"></div>
            <h2>34567890</h2>
            <p>Nama Lengkap</p>
            <p>Kelas: C</p>
            <p>Kontribusi yang saya lakukan adalah: Mengimplementasikan fungsi interaktif dan menambahkan elemen multimedia.</p>
            <a href="https://github.com/ijkl">Github saya</a>
        </section>
    </div>

</main>

</body>
</html>
@endsection

