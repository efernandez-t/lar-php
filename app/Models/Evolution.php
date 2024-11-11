<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolution extends Model
{
    public function evo(){
        return $this->belongsTo(Pokemon::class, 'pokemon_id_evo')->with('ability', "type");
    }
    public function evo_from(){
        return $this->belongsTo(Pokemon::class, 'pokemon_id')->with('ability', "type");
    }
    use HasFactory;
}
