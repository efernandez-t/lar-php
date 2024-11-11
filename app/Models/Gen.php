<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gen extends Model
{
    public function gen(){
        return $this -> hasOne(Pokemon::class);
    }
    use HasFactory;
}
