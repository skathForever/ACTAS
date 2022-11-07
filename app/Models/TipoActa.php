<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoActa extends Model
{
    use HasFactory;

    
    public function tipoacta(Type $var = null)
    {
        return $this->belongsTo(regacta::class, 'id');
    }

}
