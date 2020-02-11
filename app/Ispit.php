<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ispit extends Model
{
    public function nastavnik()
    {
        return $this->belongsTo('App\Nastavnik');
    }
}
