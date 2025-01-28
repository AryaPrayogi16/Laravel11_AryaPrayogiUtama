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
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Uncategorized',
            'slug' => 'uncategorized',
            'color' => 'gray'
        ]);
        Category::create([
            'name' => 'Tips & Trick',
            'slug' => 'tips-trick',
            'color' => 'yellow'
        ]);
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'color' => 'pink'
        ]);
    }
}
