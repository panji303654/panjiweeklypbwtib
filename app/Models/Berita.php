<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            'judul' => 'Mahasiswa TI',
            'penulis' => 'admin',
            'konten' => 'Mahasiswa TI belajar membuat website menggunakan Laravel.'
        ],
        [
            'judul' => 'Perkembangan Teknologi',
            'penulis' => 'Panji',
            'konten' => 'Teknologi memudahkan manusia mendapatkan informasi.'
        ],
        [
            'judul' => 'Kecerdasan Buatan',
            'penulis' => 'admin',
            'konten' => 'AI membantu pekerjaan manusia dengan lebih efisien.'
        ],
        [
            'judul' => 'Keamanan Data',
            'penulis' => 'Panji',
            'konten' => 'Keamanan data penting untuk melindungi informasi pribadi.'
        ],
        [
            'judul' => 'Manfaat Internet',
            'penulis' => 'admin',
            'konten' => 'Internet memudahkan komunikasi dan pembelajaran.'
        ],
        [
            'judul' => 'Belajar Pemrograman',
            'penulis' => 'Panji',
            'konten' => 'Pemrograman membantu mahasiswa membuat aplikasi.'
        ],
        [
            'judul' => 'Teknologi Pendidikan',
            'penulis' => 'admin',
            'konten' => 'Teknologi memudahkan mahasiswa belajar secara online.'
        ]
    ];

 public static function ambilberita()
       {
        return self::$data_berita;
       }

    public static function getberita ($slug)
       {
        $beritas = self :: $data_berita;

        $berita = [];
        foreach($beritas as $b)
            {
                if($b["slug"] == $slug)
                    {
                        $berita = $b;
                    }
            }
            return $berita;
       }

       public static function gettitle ($slug)
       {
          $berita = self::getberita($slug);

          return $berita ["judul"]
       }
}
