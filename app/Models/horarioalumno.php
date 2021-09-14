<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horarioalumno extends Model
{
    use HasFactory;

    public function alumno(){
        return $this->belongsTo('App\Model\alumno');
    }

    public function materia(){
        return $this->belongsTo('App\Model\materia');
    }

}
