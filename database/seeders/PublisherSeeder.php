<?php

namespace Database\Seeders;

use App\Models\publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Catalog;
use faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
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
            $author = new Publisher;

            $author->name = $faker->name;
            $author->phone_number = '0821'.$faker->randomNumber(8);
            $author->addres = $faker->address;
            $author->email = $faker->email;
            $author->created_at= $faker->date;
            $author->updated_at = $faker->date;


            $author->save();
        }
    }
}
