
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

// Halaman Home
Route::get('/', function () {
    return view('main');
});

// Halaman Profil
Route::get('/profile', function () {
    return view('profile');
});


// Halaman Detail Berita
Route::get('/berita/{slug}', function ($slug) {
    return view('beritadetail', [
        "title" => Berita::gettitle($slug),
        "berita" => Berita::getberita($slug),
    ]);
});

});
