<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
    use HasFactory;

    //relacion uno a muchos
public function inscripcion(){
    return $this->hasMany('App\Models\inscripcion');
}

//relacion uno a muchos
public function aula(){
    return $this->hasMany('App\Models\aula');
}

//relacion uno a uno
public function horarioprofesor(){
    return $this->hasOne('App\Models\horarioprofesor');
}

}
