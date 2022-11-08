<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    use HasFactory;

    public function tipoactas()
    {       
        return $this->belongsTo(tipoacta::class, 'id_tipo');
    }

    public function reunions(){
        return $this->hasMany(Reunion::class,'id');
    }
}
