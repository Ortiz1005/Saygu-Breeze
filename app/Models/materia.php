<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    use HasFactory;

    //relacion uno a muchos
public function horarioalumno(){
    return $this->hasMany('App\Models\horarioalumno');
}

//relacion uno a muchos
public function horarioprofesor(){
    return $this->hasMany('App\Models\horarioprofesor');
}

//relacion uno a uno
public function calificacion(){
    return $this->hasOne('App\Models\calificacion');
}

//relacion uno a muchos
public function semestre(){
    return $this->hasMany('App\Models\semestre');
}

}
