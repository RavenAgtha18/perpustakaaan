<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Transaction;
=======
use App\Models\Transaction;

>>>>>>> d0c26223835cda0e660d49c057a9bc52c2cbf5e6
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
<<<<<<< HEAD

            $author->created_at = $faker->date;
            $author->updated_at = $faker->date;
            
=======
            $author->created_at = $faker->date;
            $author->updated_at = $faker->date;


>>>>>>> d0c26223835cda0e660d49c057a9bc52c2cbf5e6
            $author->save();
        }
    }
}
