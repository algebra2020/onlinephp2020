<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nastavnik extends Model
{
    public function orgjed()
    {
        return $this->belongsTo('App\Orgjed');
    }
}
