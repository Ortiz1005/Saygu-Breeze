<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
    use HasFactory;

//relacion uno a muchos
public function alumno(){
    return $this->belongsTo('App\Models\alumno');
}

}
