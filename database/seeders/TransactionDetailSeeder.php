<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TransactionDetail;
use faker\Factory as Faker;

use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
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
            $catalog = new TransactionDetail;

            $catalog->transaction_id = rand(1,20);
            $catalog->book_id = rand(4,23);
            $catalog->qty = rand(1,20);

            $catalog->created_at = $faker->date;
            $catalog->updated_at = $faker->date;
            
            $catalog->save();
        }
    }
}