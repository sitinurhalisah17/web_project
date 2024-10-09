<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('asset/bootstrap/css/bootstrap.min.css')}}>
</head>
<body>
    {{-- <style>
        .product-card {
        background-color: #da340a; 
        border-radius: 8px;
        padding: 10px;
        text-align: left;
        margin-bottom: 20px;
        height: 450px; 
        width: 300px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

    }

    .product-card img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .product-description {
        font-size: 1.0rem;
        color: #ffffff;
        margin-top: 10px;
    }
    </style> --}}
    
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#da340a; ">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Portefeuille</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/produk" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="padding-top: 3%">
        <a href="#" style="background-color: #da340a; text-decoration: none; color: white; margin-top: 80px; margin-left: 45%; height: 60px; width: 60px;">WOMEN'S WALLET</a>
    </div>

    <main>
        {{-- <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card">
                        <img src="img/dompet.jpg" alt="Jam Tangan Wanita Rubber">
                        <div class="product-description">OLEVS Jam Tangan Wanita Anti Air</div>
                        <div class="product-price">Rp 169.000</div>
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <p>(3k)</p>
                            <div class="cart-icon" style="margin-left: 80%; margin-top: -10%">
                                <i class="bi bi-cart" style="margin-top: -10%"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div> --}}

        <div class="container">
                
            
            <div class="row" style="margin-top: 10%">
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                           
                                <img src="img/dompet.jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >   
                            
                            <div class="card-body">
                                <h5 class="card-title">Jims Honey</h5>
                                <p class="card-text">IDR. 155.000</p>
                                <a href="/detailproduk" class="btn" style="background-color: #da340a">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/dompetwanita.jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body" style="margin-left: 3px">
                                <h5 class="card-title">Patris Eve</h5>
                                <p class="card-text">IDR. 165.000</p>
                                <button class="buy-button" style="background-color: #da340a">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/images.jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body" style="margin-left: 3px">
                                <h5 class="card-title">mango zip</h5>
                                <p class="card-text">IDR. 200.000</p>
                                <button class="buy-button" style="background-color: #da340a">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/images (4).jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body" style="margin-left: 3px">
                                <h5 class="card-title">Parayu</h5>
                                <p class="card-text">IDR. 185.000</p>
                                <button class="buy-button" style="background-color: #da340a">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="container">
            <div class="row" style="margin-top: 5%">
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/images(2).jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body">
                                <h5 class="card-title">Lesie</h5>
                                <p class="card-text">IDR. 155.000</p>
                                <button class="buy-button" style="background-color: #da340a">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/images(3).jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body" style="margin-left: 3px">
                                <h5 class="card-title">Aleka</h5>
                                <p class="card-text">IDR. 178.000</p>
                                <button class="buy-button" style="background-color: #da340a">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/dompetwanita4.jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body" style="margin-left: 3px">
                                <h5 class="card-title">Lova</h5>
                                <p class="card-text">IDR. 165.000</p>
                                <button class="buy-button" style="background-color: #da340a">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/hanami.webp" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body" style="margin-left: 3px">
                                <h5 class="card-title">Hanami</h5>
                                <p class="card-text">IDR. 225.000</p>
                                <button class="buy-button" style="background-color: #da340a">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row" style="margin-top: 5%">
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/dompet.jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body">
                                <h5 class="card-title">Jims Honey</h5>
                                <p class="card-text">IDR. 155.000</p>
                                <a href="/detailproduk" class="btn" style="background-color: #da340a">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/dompetwanita.jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body" style="margin-left: 3px">
                                <h5 class="card-title">Patris Eve</h5>
                                <p class="card-text">IDR. 165.000</p>
                                <button class="buy-button" style="background-color: #da340a">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/images.jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body" style="margin-left: 3px">
                                <h5 class="card-title">mango zip</h5>
                                <p class="card-text">IDR. 200.000</p>
                                <button class="buy-button" style="background-color: #da340a">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" >
                        <div class="card">
                            <img src="img/images (4).jpg" class="card-img-top" alt="" style="width: 100%; height: 200px;" >
                            <div class="card-body" style="margin-left: 3px">
                                <h5 class="card-title">Parayu</h5>
                                <p class="card-text">IDR. 185.000</p>
                                <button class="buy-button" style="background-color: #da340a">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        {{-- <div style="background-color: #da340a">
            <div class="footer container py-5">
               <div class="row text-black mt-5">
                <div class="col">
                    <div class="h6">Customer Care</div>
                    <ul class="list-group" style="list-style: none; font-size: 15px;">
                        <li class="">Store Locator</li>
                        <li class="">Product Care</li>
                        <li class="">Contact Us</li>
                    </ul>
                </div>
                </div>
            </div> 
        </div> --}}
    </main>
    <footer class="text-white text-center py-3" style="background-color: #da340a">
        <p>&copy; 2024 E-Commerce. All Rights Reserved.</p>
   </footer>
    {{-- <div>
        @yield('content')
    </div> --}}
</body>
</html>
<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>