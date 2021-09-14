<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscripcion extends Model
{
    use HasFactory;

//relacion uno a muchos
    public function administrador(){
        return $this->belongsTo('App\Model\administrador');
    }

    public function grupo(){
        return $this->belongsTo('App\Model\grupo');
    }

//relacion uno a uno
public function alumno(){
    return $this->belongsTo('App\Model\alumno');
}


}
