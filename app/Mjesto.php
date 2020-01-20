<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mjesto extends Model
{
    public function zupanija()
    {
        return $this->belongsTo('App\Zupanija');
    }
}
