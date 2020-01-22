<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zupanija extends Model
{
     public function mjestos()
    {
        return $this->hasMany('App\Mjesto');
    }
}
