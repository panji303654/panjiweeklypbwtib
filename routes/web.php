
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

// Halaman Home
Route::get('/', function () {
    return view('main');
});

// Halaman Profile
Route::get('/profile', function () {
    return view('profile');
});

// Halaman Daftar Berita
Route::get('/berita', function () {
    $data_berita = Berita::ambilberita();

    return view('berita', compact('data_berita'));
});

// Halaman Detail Berita
Route::get('/berita/{slug}', function ($slug) {
    $berita = Berita::getberita($slug);

    if (empty($berita)) {
        abort(404);
    }

    return view('beritadetail', [
        'title' => $berita['judul'],
        'berita' => $berita,
    ]);
});
