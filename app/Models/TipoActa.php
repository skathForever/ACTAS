<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoActa extends Model
{
    use HasFactory;

    public function RegActas(){
        return $this->hasMany(Acta::class,'id');
    }



}
