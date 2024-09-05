{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - women's wallet</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #ffe6f2;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 10%;
        }
        .login-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #287db6;
            margin-top: 10%
        }
        .form-label {
            color: #287db6;
        }
        
        .btn-login {
            background-color: #287db6;
            color: white;
        }
        .btn-login:hover {
            background-color: #287db6;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            color: #287db6;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @if (Session::has('StatsusLogin'))
    <b>{{Session::get('StatusLogin')}}</b>
    @endif
    <form action="/authentication" method="post">
    @csrf
    <div class="login-container">
        <h3 class="login-title">WOMEN'S WALLET</h3>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email ">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-login w-100">LOGIN</button>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
{{-- </body>
</html>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#da340a ">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Portefeuille</a>
        </div>
    </nav>
    <div class="container">
        @if (Session::has('pesan'))
          <div class="alert alert-seccess">{{Session::get('pesan')}}</div>
        @endif
        <div class="row justify-content-center" style="height: 200px;">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-header" style="background-color: #f88062">
                        Silahkan Login
                    </div>
                    <div class="card-body">
                        <form method="post" action="/auth">                            
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group mt-1">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn-block mt-3 w-100" style="background-color: #f88062">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src={{asset ("assets/bootstrap/js/bootstrap.min.js")}}></script>
</body>
</html>