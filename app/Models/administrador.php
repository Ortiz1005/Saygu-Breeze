<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    use HasFactory;


//relacion uno a muchos
public function inscripcion(){
    return $this->hasMany('App\Models\inscripcion');
}

}
