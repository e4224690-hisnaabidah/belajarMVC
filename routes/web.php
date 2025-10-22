<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini kamu bisa mendaftarkan semua route web aplikasi kamu.
| Setiap route akan memanggil fungsi atau view tertentu.
| Sekarang kita ubah konteks produk menjadi "Skincare Herbal".
|
*/

// --- ROUTE DEFAULT ---
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return "Hello World";
});

Route::get('/user', function () {
    return "Hello User";
});

// --- FORM INPUT PRODUK ---
Route::get('/form-produk', function () {
    return view('form-produk');
});

Route::post('/kirim-produk', function (Request $request) {
    $nama = $request->input('nama');
    $harga = $request->input('harga');
    $kategori = $request->input('kategori');
    return "
        <h2>🪷 Produk Skincare Herbal Berhasil Dikirim!</h2>
        <p>Nama Produk: <b>$nama</b></p>
        <p>Harga Produk: <b>Rp " . number_format($harga, 0, ',', '.') . "</b></p>
        <p>Kategori: <b>$kategori</b></p>
        <p>Terima kasih telah menambahkan produk skincare herbal Anda 💚</p>
    ";
});

// --- EDIT PRODUK ---
Route::get('/produk/edit', function () {
    return view('edit-produk');
});

Route::put('/produk/update', function (Request $request) {
    $namaBaru = $request->input('nama');
    $hargaBaru = $request->input('harga');
    $kategoriBaru = $request->input('kategori');
    return "
        <h2>🌸 Data Skincare Herbal Diperbarui</h2>
        <p><b>Nama Baru:</b> $namaBaru</p>
        <p><b>Harga Baru:</b> Rp" . number_format($hargaBaru, 0, ',', '.') . "</p>
        <p><b>Kategori:</b> $kategoriBaru</p>
        <p>Perubahan data berhasil disimpan ✨</p>
    ";
});


Route::get('/produk/edit-harga', function () {
    return view('edit-harga');
});

Route::patch('/produk/update-harga', function (Request $request) {
    $hargaBaru = $request->input('harga');
    return "
        <h2>💧 Harga Skincare Herbal Diperbarui</h2>
        <p>Harga terbaru produk skincare herbal Anda adalah <b>Rp" . number_format($hargaBaru, 0, ',', '.') . "</b>.</p>
        <p>Perubahan harga berhasil dilakukan tanpa mengubah data lain 🌿</p>
    ";
});

Route::get('/tentang', function () {
    return "
        <h2>Tentang Skincare Herbal</h2>
        <p>Skincare Herbal adalah produk alami yang dibuat dari ekstrak tumbuhan pilihan 
        seperti lidah buaya, teh hijau, dan chamomile 🌱.</p>
        <p>Tujuannya untuk memberikan perawatan kulit yang lembut, aman, dan menutrisi kulit secara alami.</p>
        <footer style='margin-top:30px; font-size:14px; color:#777;'>Project by <b>Hisna Abidah</b></footer>
    ";
});
