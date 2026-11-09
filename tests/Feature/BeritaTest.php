<?php

namespace Tests\Feature;

use App\Models\Berita;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BeritaTest extends TestCase
{
    use RefreshDatabase;

    public function test_news_title_links_to_its_database_detail(): void
    {
        $berita = new Berita;
        $berita->judul = 'Berita Uji';
        $berita->slug = 'berita-uji';
        $berita->penulis = 'Penulis Uji';
        $berita->konten = 'Isi berita uji.';
        $berita->save();

        $this->get(route('berita.index'))
            ->assertOk()
            ->assertSee(route('berita.show', $berita->slug), false)
            ->assertSee($berita->judul);

        $this->get(route('berita.show', $berita->slug))
            ->assertOk()
            ->assertSee($berita->konten);
    }

    public function test_missing_news_slug_returns_not_found(): void
    {
        $this->get(route('berita.show', 'tidak-ada'))
            ->assertNotFound();
    }
}
