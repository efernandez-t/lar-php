<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Gens")->insert([
            'id'=>'1',
            'name'=>'1',
            'Regió'=>'kanto',
        ]);
        DB::table("Gens")->insert([
            'id'=>'2',
            'name'=>'2',
            'Regió'=>'Johto',
        ]);
        DB::table("Gens")->insert([
            'id'=>'3',
            'name'=>'3',
            'Regió'=>'Hoenn',
        ]);
        DB::table("Gens")->insert([
            'id'=>'4',
            'name'=>'4',
            'Regió'=>'Sinnoh',
        ]);
        DB::table("Gens")->insert([
            'id'=>'5',
            'name'=>'5',
            'Regió'=>'Unova',
        ]);
        DB::table("Gens")->insert([
            'id'=>'6',
            'name'=>'6',
            'Regió'=>'Kalos',
        ]);
        DB::table("Gens")->insert([
            'id'=>'7',
            'name'=>'7',
            'Regió'=>'Alola',
        ]);
        DB::table("Gens")->insert([
            'id'=>'8',
            'name'=>'8',
            'Regió'=>'Galar',
        ]);
        DB::table("Gens")->insert([
            'id'=>'9',
            'name'=>'9',
            'Regió'=>'Paldea',
        ]);
    }
}
