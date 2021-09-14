<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semestre extends Model
{
    use HasFactory;

//relacion uno a muchos
public function materia(){
    return $this->belongsTo('App\Models\materia');
}

//relacion uno a muchos
public function carrera(){
    return $this->belongsTo('App\Models\carrera');
}

}
