<?php

use App\Http\Controllers\PokemonController;

Route::get('/pokemons',[PokemonController::class,'index']);
Route::get('/pokemons/{pokemon}',[PokemonController::class,'single']);
Route::get('/pokemons/{pokemon}/moves',[PokemonController::class,'moves']);
Route::get('/pokemons/pr/{pokemon}',[PokemonController::class,'evolutionaryLine']);
Route::get('/items',[PokemonController::class,'items']);
Route::get('/fav/{pokes}',[PokemonController::class,'fav']);
