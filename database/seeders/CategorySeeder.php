<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CARA MEMBUAT SEEDER MANUAL
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'bg-red-100'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'bg-green-100'
        ]);

        Category::create([
            'name' => 'Artificial Inteligence',
            'slug' => 'artificial-inteligence',
            'color' => 'bg-blue-100'
        ]);
    }
}
