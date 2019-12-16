<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Ingredient');

        for($i = 1; $i <= 20; $i ++){   
            DB::table('ingredients')->insert([
                'slug' => $faker->word,
                'title' => $faker->name,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
