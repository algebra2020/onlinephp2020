<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mjesto extends Model
{
    public function zupanija()
    {
        return $this->belongsTo('App\Zupanija');
    }
    public function students_rod()
    {
        return $this->hasMany('App\Student','pbr','pbrrod')->orderBy('prezstud');
    }
    public function students_stan()
    {
        return $this->hasMany('App\Student','pbrstan','pbr')->orderBy('prezstud');
    }
}
