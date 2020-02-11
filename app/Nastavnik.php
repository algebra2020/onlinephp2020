<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nastavnik extends Model
{
    public function orgjed()
    {
        return $this->belongsTo('App\Orgjed');
    }
    public function mjesto()
    {
        return $this->belongsTo('App\Mjesto');
    }
     public function ispiti()
    {
        return $this->hasMany('App\Ispit');
    }   
}
