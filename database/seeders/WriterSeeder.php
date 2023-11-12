<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0 ; $i < 10 ; $i++){
            $data =[[
                'name' => fake()->name,
            ]];

            DB::table('writers')->insert($data);
        }
    }
}
