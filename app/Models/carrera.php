<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrera extends Model
{
    use HasFactory;

//relacion uno a muchos
public function semestre(){
    return $this->hasMany('App\Models\semestre');
}

}
