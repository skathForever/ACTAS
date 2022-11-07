<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegActa extends Model
{
    use HasFactory;
    
    public function tipoacta()
    {
        return $this->hasMani(tipoacta::class, 'id_tipo');
    }
}
