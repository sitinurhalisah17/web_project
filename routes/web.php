<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/login', [UserController::class, 'login']);
Route::post('/auth', [UserController::class,'auth']);
Route::get('/logout', [UserController::class, 'logout']);

//tampilan
Route::get('/home', [UserController::class, 'home']);
Route::get('/dompetwanita', [UserController::class, 'dompetwanita']);
Route::get('/dompetpria', [UserController::class, 'dompetpria']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/detailproduk/{id}', [UserController::class, 'detailproduk']);
Route::get('/detailprodukpria', [UserController::class, 'detailprodukpria']);
Route::get('/alamat', [UserController::class, 'alamat']);
Route::get('/keranjang', [UserController::class, 'keranjang']);


Route::middleware('statusLogin')->group(function(){
    Route::get('/produk', [ProdukController::class, 'show']);
    Route::post('/searchproduk', [ProdukController::class, 'search']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/create', [ProdukController::class, 'add']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);

    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'delete']);

    Route::get('/user', [UserController::class, 'show']);
    Route::post('/search', [UserController::class, 'search']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/create', [UserController::class, 'add']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);

    Route::get('/transaksi/{id}', [TransaksiController::class, 'transaksi']);
    Route::post('/beli/{id}', [TransaksiController::class, 'buy']);

    // Route::get('/user', [KategoriController::class, 'show']);
    // Route::get('/user/create', [KategoriController::class, 'create']);
    // Route::post('/user/create', [KategoriController::class, 'add']);
    // Route::get('/user/edit/{id}', [KategoriController::class, 'edit']);
    // Route::post('/user/update/{id}', [KategoriController::class, 'update']);
    // Route::get('/user/delete/{id}', [KategoriController::class, 'delete']);

    Route::post('/cart/{produk:id}',[KeranjangController::class,'addchart'])->name('cart.add');
    Route::get("/delete-cart/{id}",[KeranjangController::class,"delete"]);
   


});

Route::get('/dashboard',[ProdukController::class, 'showdb']);
// Route::get('/produk/create',[DashboardController::class, 'create']);
    





