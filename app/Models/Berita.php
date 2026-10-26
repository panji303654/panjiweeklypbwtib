<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            'judul' => 'Mahasiswa TI',
            'slug' => 'mahasiswa-ti',
            'penulis' => 'admin',
            'konten' => 'Mahasiswa TI belajar membuat website menggunakan Laravel.'
        ],
        [
            'judul' => 'Perkembangan Teknologi',
            'slug' => 'perkembangan-teknologi',
            'penulis' => 'Panji',
            'konten' => 'Teknologi memudahkan manusia mendapatkan informasi.'
        ],
        [
            'judul' => 'Kecerdasan Buatan',
            'slug' => 'kecerdasan-buatan',
            'penulis' => 'admin',
            'konten' => 'AI membantu pekerjaan manusia dengan lebih efisien.'
        ],
        [
            'judul' => 'Keamanan Data',
            'slug' => 'keamanan-data',
            'penulis' => 'Panji',
            'konten' => 'Keamanan data penting untuk melindungi informasi pribadi.'
        ],
        [
            'judul' => 'Manfaat Internet',
            'slug' => 'manfaat-internet',
            'penulis' => 'admin',
            'konten' => 'Internet memudahkan komunikasi dan pembelajaran.'
        ],
        [
            'judul' => 'Belajar Pemrograman',
            'slug' => 'belajar-pemrograman',
            'penulis' => 'Panji',
            'konten' => 'Pemrograman membantu mahasiswa membuat aplikasi.'
        ],
        [
            'judul' => 'Teknologi Pendidikan',
            'slug' => 'teknologi-pendidikan',
            'penulis' => 'admin',
            'konten' => 'Teknologi memudahkan mahasiswa belajar secara online.'
        ],
    ];

    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getberita($slug)
    {
        foreach (self::$data_berita as $berita) {
            if ($berita['slug'] === $slug) {
                return $berita;
            }
        }

        return [];
    }

    public static function gettitle($slug)
    {
        $berita = self::getberita($slug);

        return $berita['judul'] ?? 'Berita tidak ditemukan';
    }
}