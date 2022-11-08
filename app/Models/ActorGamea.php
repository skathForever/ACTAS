<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actorgamea extends Model
{
    use HasFactory;

    public function reunions(){
        return $this->hasMany(Reunion::class,'id');
    }
}
