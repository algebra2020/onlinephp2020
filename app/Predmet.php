<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predmet extends Model
{
    public function orgjed()
    {
        return $this->belongsTo('App\Orgjed');
    }
}
