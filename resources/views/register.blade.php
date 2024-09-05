{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{assets('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #da340a">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Portefeuille</a>
        </div>
    </nav>
    <div class="container">
     @if (Session::has('pesan'))
       <div class="alert alert-seccess">{{Session::get('pesan')}}</div>      
     @endif
     <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-header text-center" style="background-color: #f88062">
                        Register
                    </div>
                    <div class="card-body">
                    <form method="post" action="">

                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="email" class="form-control" id="name" placeholder="Nama Lengkap" name="email">
                        </div>
                        <div class="form-group mt-1">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" id="">
                        </div>
                        <div class="form-group mt-2">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" id="">
                        </div>
                        <button type="submit" class="btn-block mt-3 w-100" style="background-color: #f88062">Masuk</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
    </div>

</body>
</html>
<script src={{asset ("assets/bootstrap/js/bootstrap.min.js")}}></script> --}}