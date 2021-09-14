<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;

//relacion uno a muchos
public function horarioalumno(){
    return $this->hasMany('App\Models\horarioalumno');
}

//relacion uno a muchos
public function pagos(){
    return $this->hasMany('App\Models\pagos');
}


//relacion uno a uno
public function inscripcion(){
    return $this->hasOne('App\Models\inscripcion');
}

}
