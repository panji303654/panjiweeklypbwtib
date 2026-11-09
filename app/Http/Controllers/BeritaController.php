<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Contracts\View\View;

class BeritaController extends Controller
{
    public function tampilberita(): View
    {
        return view('berita', [
            'title' => 'Berita',
            'beritas' => Berita::query()->get(),
        ]);
    }

    public function tampilberitatunggal(string $slug): View
    {
        $singlenews = Berita::query()->where('slug', $slug)->firstOrFail();

        return view('beritatunggal', [
            'title' => $singlenews->judul,
            'singlenews' => $singlenews,
        ]);
    }
}
