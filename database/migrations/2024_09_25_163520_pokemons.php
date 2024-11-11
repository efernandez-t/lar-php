<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Pokemon', function (Blueprint $table) {
            $table->integer("id")->primaryKey();
            $table->string("Name");
            $table->double("Height");
            $table->double("Weight");
            $table->double("Hp");
            $table->integer("Attack");
            $table->integer("Defense");
            $table->integer("Sp_Atk");
            $table->integer("Sp_Def");
            $table->integer("Speed");
            $table->text("Desc");
            $table->string("sprite");
            $table->string("sprite_shiny");
            $table->integer("Gen_id");
        });
        Schema::create('move_pokemon', function (Blueprint $table) {
            $table->id();
            $table->integer("pokemon_id");
            $table->integer("move_id");
        });
        Schema::create('Evolutions', function (Blueprint $table) {
            $table->id();
            $table->integer("pokemon_id");
            $table->integer("pokemon_id_evo");
        });
        Schema::create('Gens', function (Blueprint $table) {
            $table->integer("id")->primaryKey();
            $table->string("name");
            $table->string("Regió");
        });
        Schema::create('Items', function (Blueprint $table) {
            $table->integer("id")->primaryKey();
            $table->string("name");
            $table->string("desc");
            $table->string("sprite");
        });
        Schema::create('Moves', function (Blueprint $table) {
            $table->integer("id")->primaryKey();
            $table->string("name");
            $table->integer("power")->nullable();
            $table->integer("precision")->nullable();
            $table->integer("pp");
            $table->string("type");
            $table->string("class");
            $table->text("desc");
        });
        Schema::create('Types', function (Blueprint $table) {
            $table->integer("id")->primaryKey();
            $table->string("type");
        });
        Schema::create('abilities_pokemon', function (Blueprint $table) {
            $table->id();
            $table->integer("pokemon_id");
            $table->integer("abilities_id");
            $table->boolean("ocult");

        });
        Schema::create('Abilities', function (Blueprint $table) {
            $table->integer("id")->primaryKey();
            $table->string("Name");
            $table->text("Desc");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pokemon');
        Schema::dropIfExists('move_pokemon');
        Schema::dropIfExists('Evolutions');
        Schema::dropIfExists('Gens');
        Schema::dropIfExists('Items');
        Schema::dropIfExists('Moves');
        Schema::dropIfExists('Types');
        Schema::dropIfExists('abilities_pokemon');
        Schema::dropIfExists('Abilities');
    }
};
