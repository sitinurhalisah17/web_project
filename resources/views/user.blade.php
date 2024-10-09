@extends('template-admin.pasang')
@section('content')

<div class="container pt-5" style="margin-left: 20%">
    <div class="row">
        <div class="col-md-6">
            <a href="/user/create/" class="btn btn-primary">Tambah Data User</a><br>
        </div>
        <div class="col-md-6">
            <form action="/search" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="cari" class="form-control" placeholder="Search" id="">
                    <button class="btn btn-success" type="submit">Go</button>
                </div>
            </form>
        </div>
    </div>
    Total Data User: {{$total_user}}
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                {{-- <th>JUMLAH</th> --}}
                <th>EMAIL</th>
                <th>LEVEL</th>
                <th>FOTO</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                {{-- <td>{{$item->password}}</td> --}}
                <td>{{$item->level->nama_level }}</td>

                <td><img src="{{ asset('storage/foto/'.$item->foto)}}" alt="" style="width: 80px; height:80px"></td>
                <td>
                    <a href="/user/delete/{{$item->id}}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                    <a href="/user/edit/{{$item->id}}" class="btn btn-info">Edit</a>
                </td>                
            </tr>         
            @endforeach
        </tbody>
    </table>
</div>
@endsection