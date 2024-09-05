@extends('template')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center"  style="background-color: #f88062">
                        Form User
                    </div>
                    <div class=card-body>
                        <form action="/user/create/" method="post" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group pt-2">
                                 <label for="username">Nama User</label>
                                 <input type="text" class="form-control" id="username" placeholder="Masukan nama user"
                                 name="name" value="{{old('name')}}">          
                              </div>   
                              <div class="form-group pt-2">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Masukan email user"
                                name="email" value="{{old('email')}}">          
                             </div>    

                             <div class="form-group pt-2">
                                <label for="email">Password</label>
                                <input type="text" class="form-control" id="password" placeholder="Masukan email user"
                                name="password" value="{{old('password')}}">          
                             </div>       
                              <div class="form-group pt-2">
                                 <label for="image">Gambar</label>
                                 <input type="file" class="form-control-file" name="foto" id="image">
                            </div>         
                            <button type="submit" class=" w-100 btn-block mt-5" style="background-color: #f88062">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection