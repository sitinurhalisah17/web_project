<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Level;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class UserController extends Controller
{
    //
    
    public function login(){
        return view( view: 'login');
    }

    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email' => ['required'],
            'password' => ['required']
        ]);
        
        // if (Auth::attempt($validasi)) {
        //     # code...
        //     return redirect('produk');
        // }

        if(Auth::attempt($validasi)){
            if (Auth::user()->levels_id == 1) {
                // return redirect('/dashboard');
                // return redirect('/user');
                return redirect('/produk');
            }else{
                // return redirect('/user');
                return redirect('/home');
            }
        }
        return redirect()->back()->with('pesan', 'Mohon maaf login Anda gagal');
    }
    public function home(){
        $data['produk'] = Produk::all();
        return view('home', $data);
    }
    public function dompetwanita(){
        // $data['produk'] = Produk::where('id', $id)->first();


        return view('dompetwanita');
    }
    public function dompetpria(){
        return view('dompetpria');
    }
    public function detailproduk($id){
        $data['produk'] = Produk::where('id', $id)->first();
        return view('/detailproduk', $data);
    }
    public function detailprodukpria(){
        return view('detailprodukpria');
    }


    public function keranjang(){
        return view('keranjang');
    }
    public function checkout(){
        return view('checkout');
    }
    public function alamat(){
        return view('alamat');
    }
    public function register(){
        return view('register');
    }

    function logout() {
        Auth::logout();
        return redirect('/login');
    }

    public function show(){
        $data['user'] = User::orderby('name', 'asc')->get();
        $data['total_user'] = User::count();

        return view('user', $data);
    }
    public function search(Request $request){
        $data['user'] = User::where('name', $request->cari)->orWhere('name', $request->cari)->get();
        $data['total_user'] = $data['user']->count();

        return view('user', $data);
    }

    public function create(){
        $data['level'] = Level::all();
        return view('user-create',$data);
    }

    public function add(Request $request){
        $validatedata = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'levels_id' => 'required',
            'foto' => 'image'
        ]);

        $fileName = '';
        if ($request-> file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'levels_id' => $request->levels_id,
            'foto' => $fileName
        ]);

        if ($user){
            Session::flash('pesan', 'Data berhasil ditambahkan');
        }else{
            Session::flash('pesan', 'Data gagal ditambahkan');

        }
        return redirect('user');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $delete = User::where('id', $request->id)->delete();
        if ($delete) {
            if ($user->foto){
                Storage::delete('foto/'.$user->foto);
            }
            Session::flash('pesan', 'Data berhasil dihapus');
        }else{
            Session::flash('pesan', 'Data gagal dihapus');
        }
        return redirect('user');
    }
    public function edit(Request $request){
        $data['user'] = User::find($request->id);
        $data['level'] = Level::all();
        return view('user-edit', $data);
    }
    public function update(Request $request){
        $fileName = '';
        if ($request->file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $update = User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'levels_id' => $request->levels_id

        ]);

        if($update){
            Session::flash('pesan', 'Data berhasil diubah');
        }else{
            Session::flash('pesan', 'Data gagal diubah');
        }
        return redirect('user');
    }

    function showproduk(){
        $data['produk'] = Produk::all();
        $data['keranjang'] = Keranjang::all();
        return view('/keranjang', $data);
    }
}
