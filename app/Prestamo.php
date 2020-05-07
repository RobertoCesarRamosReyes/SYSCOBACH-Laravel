<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    public function alumno(){
        return $this->belongsTo('App\Alumno');
    }
}
