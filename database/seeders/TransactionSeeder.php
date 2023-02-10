<?php

namespace Database\Seeders;

use App\Models\Transaction;

use faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
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
            $author = new Transaction;

            $author->member_id = rand(1,20);
            $author->date_start = $faker->date;
            $author->date_end = $faker->date;
            $author->created_at = $faker->date;
            $author->updated_at = $faker->date;


            $author->save();
        }
    }
}
