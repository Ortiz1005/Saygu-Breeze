<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calificacion extends Model
{
    use HasFactory;

    //relacion uno a uno
public function materia(){
    return $this->belongsTo('App\Models\materia');
}

}
