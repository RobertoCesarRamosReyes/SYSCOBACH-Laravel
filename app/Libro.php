<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public function materia(){
        return $this->belongsTo('App\Materia');
    }
}
