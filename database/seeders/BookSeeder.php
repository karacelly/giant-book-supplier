<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book_covers = [
            'https://cdnwpseller.gramedia.net/wp-content/uploads/2021/10/06103314/laut-bercerita.jpg',
            'https://cdn.gramedia.com/uploads/items/Home_Sweet_Loan_cov.jpg',
            'https://cdn.gramedia.com/uploads/items/9786020649320_the_midnight_library_cov.jpg',
            'https://cdn.gramedia.com/uploads/items/Narnia_1_cov_page-0001.jpg', 'https://cdn.gramedia.com/uploads/items/Narnia_3_The_Horse_and_His_Boy_cov_page-0001.jpg'
        ];

        $faker = Faker::create('id_ID');
        for($i = 0; $i < 30; $i++) {
            Book::create([
                'publisher_id' => random_int(1, 10),
                'title' => $faker->regexify('[A-Z] Book'),
                'author' => $faker->name(),
                'year' => $faker->numberBetween(2000, 2022),
                'synopsis' => $faker->paragraph(10),
                'image' => $book_covers[random_int(0, count($book_covers)-1)],
            ]);
        }
    }
}
