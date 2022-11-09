<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actorexterno extends Model
{
    use HasFactory;

    use HasFactory;
    public function reunions(){
        return $this->hasMany(Actor::class,'id');
    }
}
