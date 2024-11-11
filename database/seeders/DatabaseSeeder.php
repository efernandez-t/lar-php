<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            PokemonSeeder::class,
            GenSeeder::class,
            TypeSeeder::class,
            AbilitiesSeeder::class,
            Abilities_pokeSeeder::class,
            MovesSeeder::class,
            PokemoveSeeder::class,
            ItemsSeeder::class,
            EvolutionsSeeder::class,
            PokeTypeSeeder::class
        ]);
    }
}
