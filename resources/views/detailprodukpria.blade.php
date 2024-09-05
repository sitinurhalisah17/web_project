<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>


<nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#da340a ">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Portefeuille</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Produk</a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    <div class="row">
       
        <div class="col-md-6">
            <img src="img/dompetpria(1).jpg" class="img-fluid rounded" alt="Gambar Produk" style="width: 400px; height:400px; margin-top: 10%">
        </div>

       
        <div class="col-md-6" style="padding-top: 5%">
            <h1 style="color:#da340a">Brodo</h1>
            <div class="d-flex align-items-start">
                
                <div>
                    <p class="lead">Ini adalah deskripsi produk yang menarik dan informatif. Menjelaskan fitur, manfaat, dan penggunaan produk ini secara jelas dan menarik.</p>
                    
                    <h2 class="text-danger">Rp 225.000</h2>

                    
                    <ul class="list-group mb-3">
                        <li class="list-group-item">Warna: Hitam</li>
                        <li class="list-group-item">Ukuran: M</li>
                        <li class="list-group-item">Berat: 500 gram</li>
                    </ul>
                    <div class="quantity">
                        <label for="quantity">Kuantitas:</label>
                        <div class="input-group">
                            <button class="btn-minus">-</button>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="99">
                            <button class="btn-plus">+</button>
                        </div>
                    </div>

                   
                    <div class="d-grid gap-2">
                        {{-- <button class=" text-white" type="button" style="background-color: #da340a">Tambahkan ke Keranjang</button> --}}
                        <a href="/keranjang" class="btn" style="background-color: #da340a">Tambahkan ke keranjang</a>

                        {{-- <button class="btn btn-outline" type="button" style="background-color: #da340a">Beli Sekarang</button> --}}
                        <a href="/alamat" class="btn" style="background-color: #da340a">Beli Sekarang</a>

                    </div>
                </div>
                
               
            </div>
        </div>
    </div>
</div>


<footer class="text-white text-center py-3" style="background-color: #da340a; margin-top:300px">
    <p>&copy; 2024 E-Commerce. All Rights Reserved.</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   <script>
  
    document.querySelector('.btn-plus').addEventListener('click', function() {
        let quantityInput = document.getElementById('quantity');
        let currentValue = parseInt(quantityInput.value);
        if (currentValue < quantityInput.max) {
            quantityInput.value = currentValue + 1;
        }
    });

    document.querySelector('.btn-minus').addEventListener('click', function() {
        let quantityInput = document.getElementById('quantity');
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > quantityInput.min) {
            quantityInput.value = currentValue - 1;
        }
    });
    </script>
                
</body>
</html>
<script src={{asset ("assets/bootstrap/js/bootstrap.min.js")}}></script>