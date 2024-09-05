<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">

</head>
<body>
    <div class="container my-5">
        
        <div class="row">
            <div class="col-md-8">
              
                <h4 class="mb-3">Informasi Pengguna</h4>
                <form>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Alamat 2 <span class="text-muted">(Opsional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment atau suite">
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">Negara</label>
                            <select class="form-select" id="country" required>
                                <option value="">Pilih...</option>
                                <option>Indonesia</option>
                                <option>Malaysia</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">Provinsi</label>
                            <select class="form-select" id="state" required>
                                <option value="">Pilih...</option>
                                <option>Jawa Barat</option>
                                <option>Bali</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control" id="zip" required>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Pembayaran</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                            <label class="form-check-label" for="credit">Kartu Kredit</label>
                        </div>
                        <div class="form-check">
                            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="debit">Kartu Debit</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                    </div>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Nama di Kartu</label>
                            <input type="text" class="form-control" id="cc-name" required>
                            <small class="text-muted">Nama lengkap seperti yang tertera di kartu.</small>
                        </div>

                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Nomor Kartu Kredit</label>
                            <input type="text" class="form-control" id="cc-number" required>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-label">Masa Berlaku</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="MM/YY" required>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" required>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Lanjutkan Pembayaran</button>
                </form>
            </div>

        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src={{asset ("assets/bootstrap/js/bootstrap.min.js")}}></script>
