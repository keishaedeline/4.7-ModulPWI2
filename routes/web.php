<?php

use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

// menampilkan data diri Anda
Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Keisha Edeline Hutabarat',
        'kelas'=> 'D4SM-48-02',
        'nim' => '707082400090',
    ]);
});

Route::view('/contact', 'pages.contact');
Route::view('/product', 'pages.product'); 

Route::get('/latihan', function () {
    $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];
    return view('pages.latihan', ['matakuliah' => $matakuliah]);
});

Route::get('/sapa', [SapaController::class, 'index']);

// Satu controller dapat memiliki beberapa method
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

//memasukan data dari form yang diisikan ke dalam database 
Route::post('/product', [ProductController::class, 'store']);

// menampilkan detail data produk berdasarkan id tertentu
Route::get('/product/{id}', [ProductController::class, 'show']);

// menampilkan halaman form untuk merubah data
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

// menyimpan data yang sudah dirubah pada form edit data
Route::put('/product/{id}', [ProductController::class, 'update']);

// menghapus data berdasarkan id yang kita pilih
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

// membuat routing menggunakan resource controller untuk kategori produk (dibuat pada B.3)
Route::resource('/category', CategoryController::class);
