<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function prestamos(){
        return $this->hasMany('App\Prestamo');
    }
}
