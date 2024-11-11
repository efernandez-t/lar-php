<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Move extends Model
{
    public function moves(){
        return $this -> belongsToMany(Pokemon::class);
    }
    use HasFactory;
}
