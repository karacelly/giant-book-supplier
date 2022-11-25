<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PublisherSeeder extends Seeder
{

    public function run()
    {
        $publisher_logos = [
            'https://creativekidstales.com.au/wp-content/uploads/2021/04/Walker-Books-opt.jpg',
            'https://s2982.pcdn.co/wp-content/uploads/2015/01/Puffin-Books-Logo.jpg.optimal.jpg',
            'https://s2982.pcdn.co/wp-content/uploads/2015/01/Particular-Books-Logo.jpg.optimal.jpg',
            'https://s2982.pcdn.co/wp-content/uploads/2015/01/Bloomsbury-Childrens-Books-logo.jpg.optimal.jpg',
            'https://img.freepik.com/premium-vector/kid-reading-book-logo-template-design_316488-845.jpg?w=2000'
        ];
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 10; $i++) {
            Publisher::create([
                'name' => "PT " . $faker->name,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'image' => $publisher_logos[random_int(0, count($publisher_logos)-1)],
            ]);
        }
    }
}
