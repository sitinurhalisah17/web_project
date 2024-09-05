<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<body class="container mt-5" style="margin-top:50%;">
    <h1 class="mb-4">Keranjang Belanja Anda</h1>
    <div class="table-responsive">
        <table id="cart-table" class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Produk A</td>
                    <td class="price">Rp 50000</td>
                    <td><input type="number" class="quantity form-control" value="1" min="1" onchange="updateCart()"></td>
                    <td class="total">Rp 50000</td>
                    <td><button class="btn btn-danger" onclick="removeItem(this)">Hapus</button></td>
                </tr>
                <tr>
                    <td>Produk B</td>
                    <td class="price">Rp 30000</td>
                    <td><input type="number" class="quantity form-control" value="2" min="1" onchange="updateCart()"></td>
                    <td class="total">Rp 60000</td>
                    <td><button class="btn btn-danger" onclick="removeItem(this)">Hapus</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <p id="grand-total" class="fs-4 fw-bold">Total Harga: Rp 110000</p>

    <button class="btn btn-success mb-4" onclick="alert('Lanjutkan ke proses checkout')">Proses Pembayaran</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src={{asset ("assets/bootstrap/js/bootstrap.min.js")}}></script>
