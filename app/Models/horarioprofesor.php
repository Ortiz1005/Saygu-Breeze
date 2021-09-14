<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horarioprofesor extends Model
{
    use HasFactory;

//relacion uno a uno
public function grupo(){
    return $this->belongsTo('App\Models\grupo');
}

//relacion uno a muchos
public function profesor(){
    return $this->belongsTo('App\Models\profesor');
}

//relacion uno a muchos
public function materia(){
    return $this->belongsTo('App\Models\materia');
}

}
