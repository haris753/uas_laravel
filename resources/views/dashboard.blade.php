@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAWARA STORE</title>
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
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

.product-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Menjaga produk rata tengah */
    padding: 20px;
}

.product {
    background: #fff;
    margin: 10px;
    padding: 15px;
    border: 1px solid #ccc;
    width: 250px; /* Ukuran tetap kotak produk */
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.product:hover {
    transform: translateY(-10px);
}

.product-image img {
    width: 100%; /* Memastikan gambar mengisi kontainer produk */
    height: 150px; /* Set tinggi gambar */
    object-fit: contain; /* Menjaga aspek rasio gambar */
    background: #eee;
    margin-bottom: 10px;
}

.view-button {
    background: #007BFF;
    color: white;
    padding: 10px;
    text-decoration: none;
    border-radius: 5px;
    display: inline-block; /* Agar tombol lebih teratur */
    margin-top: 10px;
}

.view-button:hover {
    background: #0056b3;
}

@media (max-width: 1024px) {
    .product {
        width: 45%; /* Untuk layar sedang (tablet) */
    }
}

@media (max-width: 768px) {
    .product {
        width: 48%; /* Agar lebih banyak produk di layar tablet */
    }
}

@media (max-width: 480px) {
    .product {
        width: 90%; /* Untuk layar kecil (smartphone) */
    }
}

</style>
<body>
    <main>
        <div class="product-container">
            <div class="product">
                <div class="product-image">
                    <img src="samsung-galaxy-s23-ultra.jpg" alt="Samsung Galaxy S23 Ultra">
                </div>
                <h2>Samsung Galaxy S23 Ultra</h2>
                <p>Smartphone canggih dengan kamera 200MP.</p>
                <a href="#" class="view-button">Lihat</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="iphone-15-pro-max.jpg" alt="iPhone 15 Pro Max">
                </div>
                <h2>iPhone 15 Pro Max</h2>
                <p>Smartphone premium dengan chipset A17 Pro.</p>
                <a href="#" class="view-button">Lihat</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="redmi-note-13.jpg" alt="Xiaomi Redmi Note 13">
                </div>
                <h2>Xiaomi Redmi Note 13 Pro</h2>
                <p>Smartphone dengan layar AMOLED dan kamera 108MP.</p>
                <a href="#" class="view-button">Lihat</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="oppo-find-n2.jpg" alt="OPPO Find N2">
                </div>
                <h2>OPPO Find N2</h2>
                <p>Smartphone lipat dengan layar besar dan fleksibel.</p>
                <a href="#" class="view-button">Lihat</a>
            </div>
        </div>
    </main>
</body>
</html>
@endsection