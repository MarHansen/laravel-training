<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0 ; $i < 15 ; $i++){
            $data =[[
                'title' => fake()->title,
                'type_id' => fake()->numberBetween(1, 4),
                'description' => 'This is the description',
                'writer_id' => fake()->numberBetween(1, 5),
                'post_date' => fake()->date
            ]];

            DB::table('recipes')->insert($data);
        }
    }
}
