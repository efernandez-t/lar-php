<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table("Types")->insert([
        'id'=>'1',
        'type'=>'Normal'
    ]);
    DB::table("Types")->insert([
        'id'=>'2',
        'type'=>'Fire'
    ]);
    DB::table("Types")->insert([
        'id'=>'3',
        'type'=>'Water'
    ]);
    DB::table("Types")->insert([
        'id'=>'4',
        'type'=>'Electric'
    ]);
    DB::table("Types")->insert([
        'id'=>'5',
        'type'=>'Grass'
    ]);
    DB::table("Types")->insert([
        'id'=>'6',
        'type'=>'Ice'
    ]);
    DB::table("Types")->insert([
        'id'=>'7',
        'type'=>'Fighting'
    ]);
    DB::table("Types")->insert([
        'id'=>'8',
        'type'=>'Poison'
    ]);
    DB::table("Types")->insert([
        'id'=>'9',
        'type'=>'Ground'
    ]);
    DB::table("Types")->insert([
        'id'=>'10',
        'type'=>'Flying'
    ]);
    DB::table("Types")->insert([
        'id'=>'11',
        'type'=>'Psychic'
    ]);
    DB::table("Types")->insert([
        'id'=>'12',
        'type'=>'Bug'
    ]);
    DB::table("Types")->insert([
        'id'=>'13',
        'type'=>'Rock'
    ]);
    DB::table("Types")->insert([
        'id'=>'14',
        'type'=>'Ghost'
    ]);
    DB::table("Types")->insert([
        'id'=>'15',
        'type'=>'Dragon'
    ]);
    DB::table("Types")->insert([
        'id'=>'16',
        'type'=>'Dark'
    ]);
    DB::table("Types")->insert([
        'id'=>'17',
        'type'=>'Steel'
    ]);
    DB::table("Types")->insert([
        'id'=>'18',
        'type'=>'Fairy'
    ]);
    }
}
