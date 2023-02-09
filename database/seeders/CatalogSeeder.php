<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Catalog;
use faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            $faker = Faker::create();

            for ($i = 0; $i < 20; $i++) {
                $author = new Catalog;

                $author->name = $faker->name;
                $author->created_at = $faker->date;
                $author->updated_at = $faker->date;
                
    
                $author->save();
            }
        }
    }
}
