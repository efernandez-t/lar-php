<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    public function ability(){
        return $this -> belongsToMany(Abilities::class); #funciona
    }
    public function evo(){
        return $this -> hasMany(Evolution::class, 'pokemon_id');
    }
    public function evo_from(){
        return $this -> hasMany(Evolution::class, 'pokemon_id_evo');
    }
    public function type(){
        return $this -> belongsToMany(Type::class);
    }
    public function gen(){
        return $this -> belongsTo(Gen::class);
    }
    public function moves(){
        return $this -> belongsToMany(Move::class); #funciona
    }
    public function evolutions(){
        return $this->hasMany(Evolution::class, 'pokemon_id');
    }
    use HasFactory;
}
