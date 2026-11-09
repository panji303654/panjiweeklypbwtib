<?php

use Illuminate\Support\Facades\Route;

// Data berita (sementara disimpan di sini)
function dataBerita(): array
{
    $data = [
        [
            'slug'    => 'mahasiswa-ti',
            'judul'   => 'Mahasiswa TI Juara Lomba Coding',
            'penulis' => 'Panji Satria Pratama',
            'konten'  => 'Isi berita tentang mahasiswa TI yang juara lomba coding.',
        ],
        [
            'slug'    => 'seminar-laravel',
            'judul'   => 'Seminar Laravel untuk Pemula',
            'penulis' => 'Admin',
            'konten'  => 'Isi berita tentang seminar Laravel untuk pemula.',
        ],
    ];

    // Diubah jadi object + diberi tanggal supaya cocok dengan blade
    return array_map(fn ($b) => (object) ($b + [
        'created_at' => now(),
        'updated_at' => now(),
    ]), $data);
}

// Home
Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

// Daftar berita
Route::get('/berita', function () {
    return view('berita', [
        'title'   => 'Berita',
        'beritas' => dataBerita(),
    ]);
})->name('berita.index');

// Detail berita
Route::get('/berita/{slug}', function ($slug) {
    $berita = collect(dataBerita())->firstWhere('slug', $slug);

    if (!$berita) {
        abort(404);
    }

    return view('beritatunggal', [
        'title'  => 'Detail Berita',
        'berita' => $berita,
    ]);
})->name('berita.show');

// Profile
Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
})->name('profile');

// Contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');