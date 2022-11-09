<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    public function actas()
    {       
        return $this->belongsTo(Acta::class, 'id_acta');
    }

    public function actorUrbanizacions()
    {       
        return $this->belongsTo(ActorUrbanizacion::class, 'id_urbanizacion');
    }

    public function gameas()
    {       
        return $this->belongsTo(ActorGamea::class, 'id_gamea');
    }

    public function externos()
    {       
        return $this->belongsTo(Actorexterno::class, 'id_externo');
    }

    public function organizaciones()
    {       
        return $this->belongsTo(Actororganizacion::class, 'id_organizacion');
    }

    public function urbanizaciones()
    {       
        return $this->belongsTo(ActorUrbanizacion::class, 'id_urbanizacion');
    }
    
}
