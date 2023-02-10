<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Member;
use faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
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
            $author = new Member;

            $author->name = $faker->name;
            $author->gender =  rand(1,2);
            $author->phone_number = '0821' . $faker->randomNumber(8);
            $author->addres = $faker->address;
            $author->email = $faker->email;
            $author->created_at = $faker->date;
            $author->updated_at = $faker->date;

            $author->save();

        }
    }
}
