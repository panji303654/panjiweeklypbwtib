<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        Berita::factory(5)->create();

        // User::factory(10)->create();

        //User::factory()->create([
           // 'name' => 'Test User',
           // 'email' => 'test@example.com',
        //]);

        // DB::table('users')->insert([
        //     'name' => "Abe",
        //     'email' => 'abe@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

    }
}
