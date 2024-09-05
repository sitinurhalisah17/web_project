<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Alamat Pengiriman</title>
    <link rel="stylesheet" href={{ asset('asset/bootstrap/css/bootstrap.min.css')}}>
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
    <h1 style="color: #da340a; margin-left: 20%; margin-top:5%;">Alamat Pengiriman</h1>
    <form action="/belisekarang/{{$transaksi->id}}" method="post" style="margin-left: 20%;">
        @csrf
       
        <div class="mb-3">
            <label for="nama">Nama Lengkap:</label><br>
            <input type="text" id="nama" name="nama" required placeholder="Nama Lengkap" style="width: 700px;"><br><br>
        </div>

        <div class="mb-3">
            <label for="telepon">Nomor Telepon:</label><br>
            <input type="tel" id="telepon" name="telepon" required placeholder="Nomor Telepon" style="width: 700px";><br><br>    
        </div>

        <div class="mb-3">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required placeholder="Email" style="width: 700px;"><br><br>
       
        </div>

        <div class="mb-3">
            <label for="alamat">Alamat Jalan:</label><br>
           <input type="text" id="alamat" name="alamat" required placeholder="Alamat Jalan" style="width: 700px;"><br><br>
        </div>

       <div class="mb-3">
           <label for="kota">Kota:</label><br>
           <input type="text" id="kota" name="kota" required placeholder="Kota" style="width: 700px;"><br><br>
       </div>

       <div class="mb-3">
           <label for="provinsi">Provinsi:</label><br>
           <input type="text" id="provinsi" name="provinsi" required placeholder="Provinsi" style="width: 700px;"><br><br>
       </div>

       <div class="mb-3">
           <label for="kodepos">Kode Pos:</label><br>
           <input type="text" id="kodepos" name="kodepos" required placeholder="Kode Pos" style="width: 700px;"><br><br>

       </div>

       <div class="mb-3">
           <label for="negara">Negara:</label><br>
           <input type="text" id="negara" name="negara" required placeholder="Negara" style="width: 700px;"><br><br>

       </div>

        <div>
            <label for="jenis-pengiriman">Jenis Pengiriman:</label><br>
            <select id="jenis-pengiriman" name="jenis-pengiriman" required style="width: 700px;">
                <option value="standar">Standar</option>
                <option value="ekspres">Ekspres</option>
                <option value="same-day">Same Day</option>
            </select>
        </div>

        <input type="submit" value="Kirim" style="background-color: #da340a; width:700px; margin-top:20px;">
      
    </form>
    
    <footer class="text-white text-center py-3" style="background-color: #da340a; margin-top:100px;">
        <p>&copy; 2024 E-Commerce. All Rights Reserved.</p>
   </footer>
</body>
</html>
<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>
