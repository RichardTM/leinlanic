<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $table = 'lecciones';

    public function nivel()
    {
        return $this->belongsTo(Nivel::class);
    }
    
    public function actividades()
    {
        return $this->hasMany(Actividad::class);
    }
}
