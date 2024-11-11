<?php

namespace App\Http\Controllers;
use App\Models\Pokemon;
use App\Models\Move;
use App\Models\Item;
use GuzzleHttp\Psr7\Query;
class PokemonController extends Controller{
    public function index(){
        $data = Pokemon::with('ability', "evo.evo.evo.evo", "type")->get();
        return response()->json([
            "success" => true,
            "data" => $data
        ]);
    }
    public function single(int $pokemon){
        $data = Pokemon::where("id","=",$pokemon)->with('ability', "evo.evo.evo.evo","evo_from.evo_from.evo_from.evo_from","type")->get();
        return response()->json([
            "success" => true,
            "data" => $data
        ]);
    }
    public function moves(int $pokemon){
        $data = Pokemon::where("id","=",$pokemon)->with('moves')->get();
        $data = $data[0]["moves"];
        return response()->json([
            "success" => true,
            "Moves" => $data
        ]);
    }
    public function items(){
        $data = Item::orderBy("id","asc")->get();
        return response()->json([
            "success" => true,
            "data" => $data
        ]);
    }
    public function fav($pokes){
        $data = json_decode($pokes);
        $poke = Pokemon::whereIn("id",$data)->with('ability', "evo.evo.evo.evo", "type")->get();
        return response()->json([
            "success" => true,
            "data" => $poke
        ]);
    }
}