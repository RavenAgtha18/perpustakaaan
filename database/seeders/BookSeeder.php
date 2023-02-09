<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $catalog = new Book;

            $catalog->isbn = $faker->randomNumber(9);
            $catalog->title = $faker->name;
            $catalog->year = rand(2020,2022);
            $catalog->publisher_id = rand(1,20);
            $catalog->author_id = rand(1,20);
            $catalog->catalog_id = rand(1,4);
            $catalog->qty = rand(1,20);
            $catalog->price = rand(1000,2000);
            $catalog->created_at = $faker->date;
            $catalog->updated_at = $faker->date;

            $catalog->save();
        } 
    }
}
