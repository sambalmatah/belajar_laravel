<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // PANGGIL KATEGORI SEEDER
        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
            PostSeeder::class
        ]);
        
        
        // CONTOH BASIC
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Yudi Ari',
        //     'username' => 'yudiariari',
        //     'email' => 'yudiari@example.com',
        // ]);
    }
}
