<?php

use App\Models\Kategori;
use App\Models\Produk;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailPesananController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('user', UserController::class);
    // Route::resource('home', HomeController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('detail', DetailPesananController::class);
});

Route::get('/', function () {
    $produk = Produk::all();
    $kategori = Kategori::all();
    return view('welcome', compact('produk','kategori'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('include.backend.profile');
});

Route::get('/shop', function () {
    return view('include.frontend.shop');
});
Route::get('/produk', function () {
    $produk = Produk::all();
    return view('include.frontend.produk', compact('produk'));
});
Route::get('/cart', function () {
    return view('include.frontend.cart');
});
Route::get('/checkout', function () {
    return view('include.frontend.checkout');
});
Route::get('/signin', function () {
    return view('include.frontend.signin');
});
Route::get('/wishlist', function () {
    $produk = Produk::all();
    return view('include.frontend.wishlist', compact('produk'));
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pp', function () {
    return view('layouts.backend');
});

Route::get('/beranda', function () {
    return view('beranda');
});
