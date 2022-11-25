<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Action and Adventure'
        ]);
        Category::create([
            'name' => 'Classics'
        ]);
        Category::create([
            'name' => 'Comic Book or Graphic Novel'
        ]);
        Category::create([
            'name' => 'Detective and Mystery'
        ]);
        Category::create([
            'name' => 'Fantasy'
        ]);
        Category::create([
            'name' => 'Historical Fiction'
        ]);
        Category::create([
            'name' => 'Horror'
        ]);
        Category::create([
            'name' => 'Literary Fiction'
        ]);
        Category::create([
            'name' => 'Romance'
        ]);
        Category::create([
            'name' => 'Science Fiction (Sci-Fi)'
        ]);
    }
}
