<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aula extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function grupo(){
        return $this->belongsTo('App\Models\grupo');
    }
}
