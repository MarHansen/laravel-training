<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data =[[
            'TipeMakanan' => 'Makan Pagi',
        ],[
            'TipeMakanan' => 'Makan Siang',
        ],[
            'TipeMakanan' => 'Makan Malam'
        ],[
            'TipeMakanan' => 'Deesert'
        ]];

        DB::table('types')->insert($data);

    }
}
