<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Dish');

        for($i = 1; $i <= 20; $i ++){   
            DB::table('dishes')->insert([
                'category_id' => $faker->numberBetween($min = 0, $max = 20),
                'tag_id' => $faker->numberBetween($min = 0, $max = 20),
                'lang_id' => $faker->numberBetween($min = 0, $max = 20),
                'title' => $faker->name,
                'description' => $faker->paragraph,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
