<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    
    public function show(){
        $data['produk'] = Produk::orderby('nama_produk','asc')->get();
        $data['total'] = Produk::count();

        return view('index',$data);
    }
    public function search(Request $request){

        $query = $request->cari;

        $data['produk'] = Produk::where('nama_produk', $query)->orWhereHas('kategori', function($c) use($query){
            $c->where('nama_kategori', $query);
        })->get();
        $data['total'] = $data['produk']->count();

        return view('index', $data);
    }

    public function create(){
        $data['kategori'] = Kategori::all();
        return view('produk-create', $data);
    }

    public function add(Request $request){
        $validatedata = $request->validate([
            'nama_produk' => 'required',
            'kategoris_id' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'stok' => 'required',
            'foto' => 'image'
        ]);

        $fileName = '';
        if ($request-> file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $produk = Produk::create([
            'nama_produk' => $request->nama_produk,
            'kategoris_id' => $request->kategoris_id,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'stok' => $request->stok,
            'foto' => $fileName
        ]);

        if ($produk) {
            Session::flash('pesan', 'Data berhasil ditambahkan');

        }else{
            Session::flash('pesan', 'Data gagal ditambahkan');
        }

        return redirect('produk');
    }

    public function delete(Request $request)
    {
        $produk = Produk::find($request->id);
        $delete = Produk::where('id', $request->id)->delete();
        if ($delete) {
            if ($produk->foto){
                Storage::delete('foto/'.$produk->foto);
            }
            Session::flash('pesan', 'Data berhasil dihapus');
        } else {
            Session::flash('pesan', 'Data gagal dihapus');
        }

        return redirect('produk');
    }
    public function edit(Request $request){
        $data['produk'] = Produk::find($request->id);
        $data['kategori'] = Kategori::all();
        return view('produk-edit', $data);
    }
    public function update(Request $request){

        $fileName = '';
        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $update = Produk::where('id', $request->id)->update([
            'nama_produk' => $request->nama_produk,
            'kategoris_id' => $request->kategoris_id,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'stok' => $request->stok,
            'foto' => $fileName
        ]);

        if($update) {
            Session::flash('pesan', 'Data berhasil diubah');

        }else{
            Session::flash('pesan', 'Data gagal diubah');
        }

        return redirect('produk');
    }

    public function showdb(){
        // return view('admin.dashboard');
        return view('admin.dashboard');
    }
}


