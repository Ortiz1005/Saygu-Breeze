<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;

//relacion uno a muchos
public function horarioprofesor(){
    return $this->hasMany('App\Models\horarioprofesor');
}

}
